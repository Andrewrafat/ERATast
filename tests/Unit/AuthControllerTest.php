<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class AuthControllerTest extends TestCase
{
    public function testProfile()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $controller = new AuthController();
        $response = $controller->profile();

        // Assert that the response is a JSON response
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        // Decode the JSON response
        $responseData = json_decode($response->getContent(), true);

        // Assert that the response has required keys
        $this->assertArrayHasKey('code', $responseData);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertArrayHasKey('data', $responseData);

        // Assert the content of the response
        $this->assertEquals(200, $responseData['code']);
        $this->assertEquals('true', $responseData['message']); // Assuming this is the expected message for success
        $this->assertEquals($user->toArray(), $responseData['data']); // Assuming user data is returned
    }
    public function test_valid_login()
    {

        $response = $this->postJson('/api/login', [
            'PhoneNumber' => '01200126619',
            'password' => 'password',
        ]);


        $response->assertStatus(200)
            ->assertJsonStructure([
                'access_token',
                'token_type',
                'user' => [
                    'id',
                    'name',
                    'email',
                ],
            ]);
    }
    public function test_invalid_login_with_missing_credentials()
    {
        $response = $this->postJson('/api/login', []);

        // Assert that the response is a JSON response
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        // Decode the JSON response
        $responseData = $response->json();

        // Assert the presence of required keys
        $this->assertArrayHasKey('code', $responseData);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertArrayHasKey('error', $responseData);
        $this->assertArrayHasKey('data', $responseData);

        // Assert the content of the response
        $this->assertEquals(400, $responseData['code']);
        $this->assertEquals('false', $responseData['message']);
        $this->assertEquals([], $responseData['data']);
        $this->assertEquals([
            'PhoneNumber' => ['The phone number field is required.'],
            'password' => ['The password field is required.'],
        ], $responseData['error']);
    }







    public function testLoginWithInvalidCredentials()
    {


        $response = $this->postJson('/api/login', [
            'PhoneNumber' => '15', //invalid_number
            'password' => 'invalid_password'
        ]);

        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));

        // Decode the JSON response
        $responseData = $response->json();
        // dd($responseData);

        $this->assertArrayHasKey('code', $responseData);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertArrayHasKey('error', $responseData);
        $this->assertArrayHasKey('data', $responseData);

        // Assert the content of the response
        $this->assertEquals(401, $responseData['code']);
        $this->assertEquals('true', $responseData['message']);
        $this->assertEquals('Not Authorized', $responseData['error']);
        $this->assertEquals([], $responseData['data']);
    }

    public function testRegisterWithValidData()
    {
        $faker = Faker::create();
        $uniqueNumber = $faker->unique()->numberBetween(1000, 9999); // Generate a unique random number between 1000 and 9999

        $response = $this->postJson('/api/register', [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => 'password', // password
            'password_confirmation' => 'password',
            'UserName' => $faker->userName,
            'PhoneNumber' => $uniqueNumber, // Generate a random 10-digit number    
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'access_token',
                'token_type',
                'user' => [
                    'id',
                    'name',
                    'email',
                ],
            ]);
    }


    public function testRegisterWithDuplicateEmail()
    {
        $request = new Request([
            'name' => 'John Doe',
            'email' => 'andrewrafat91@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'PhoneNumber' => '1234567890',
            'UserName' => 'johndoe'
        ]);
    
        $controller = new AuthController();
        $response = $controller->register($request);
    
        $this->assertTrue($response->headers->contains('Content-Type', 'application/json'));
    
        // Decode the JSON response
        $responseData = json_decode($response->getContent(), true);
        // dd($responseData);
    
        $this->assertArrayHasKey('code', $responseData);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertArrayHasKey('error', $responseData);
        $this->assertArrayHasKey('data', $responseData);
    
        // Assert the content of the response
        $this->assertEquals(400, $responseData['code']);
        $this->assertEquals('false', $responseData['message']);
    
        // Assert the content of the "error" field
        $this->assertTrue(isset($responseData['error']));
    
        // Check if there are errors
        if (isset($responseData['error'])) {
            foreach ($responseData['error'] as $field => $errors) {
                // Assert that each field has at least one error
                $this->assertNotEmpty($errors);
    
                // Assert the number of errors for each field
                $this->assertGreaterThanOrEqual(1, count($errors));
    
                // Assert the specific error message for each field
                foreach ($errors as $error) {
                    $this->assertIsString($error);
                }
            }
        }
    
        $this->assertEquals([], $responseData['data']);
    }
    
}
