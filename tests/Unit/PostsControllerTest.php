<?php

namespace Tests\Unit;

use App\Models\User; // Import User model
use App\Models\Post; // Import Post model
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Factory; // Import Factory facade

class PostsControllerTest extends TestCase
{
    use RefreshDatabase; // To reset the database after each test

    public function testIndex()
    {
        // Simulate authentication
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        // Create some posts associated with the authenticated user
        $posts = Post::factory()->count(5)->create(['user_id' => $user->id]);

        // Access the index endpoint
        $response = $this->getJson('/api/posts');

        // Assert response status
        $response->assertStatus(200);

        // Assert response content
        $responseData = $response->json(); // Convert JSON response to array

        // Assert top-level keys
        $this->assertArrayHasKey('code', $responseData);
        $this->assertArrayHasKey('message', $responseData);
        $this->assertArrayHasKey('data', $responseData);

        // Assert data keys
        $this->assertArrayHasKey('current_page', $responseData['data']);
        $this->assertArrayHasKey('data', $responseData['data']);
        $this->assertArrayHasKey('first_page_url', $responseData['data']);
        $this->assertArrayHasKey('from', $responseData['data']);
        $this->assertArrayHasKey('last_page', $responseData['data']);
        $this->assertArrayHasKey('last_page_url', $responseData['data']);
        $this->assertArrayHasKey('links', $responseData['data']);
        $this->assertArrayHasKey('next_page_url', $responseData['data']);
        $this->assertArrayHasKey('path', $responseData['data']);
        $this->assertArrayHasKey('per_page', $responseData['data']);
        $this->assertArrayHasKey('prev_page_url', $responseData['data']);
        $this->assertArrayHasKey('to', $responseData['data']);
        $this->assertArrayHasKey('total', $responseData['data']);

        // Assert specific post data
        foreach ($responseData['data']['data'] as $post) {
            $this->assertArrayHasKey('id', $post);
            $this->assertArrayHasKey('title', $post);
            $this->assertArrayHasKey('description', $post);
            $this->assertArrayHasKey('contact_phone', $post);
            $this->assertArrayHasKey('user_id', $post);
            $this->assertArrayHasKey('created_at', $post);
            $this->assertArrayHasKey('updated_at', $post);

            // Additional assertions for specific data types or values if needed
            $this->assertEquals($user->id, $post['user_id']);
        }
    }




    public function testPostCreateWithValidData()
    {
        // Create a user
        $user = User::factory()->create();

        // Simulate authentication
        $this->actingAs($user, 'api');

        // Make a request to create a post
        $response = $this->postJson('/api/post/create', [
            'title' => 'Test Post',
            'description' => 'This is a test post description.',
            'contact_phone' => '1234567890',
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'code',
                'message',
                'error',
                'data' => [],
            ]);

        // Assert that the post is created in the database
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post',
            'description' => 'This is a test post description.',
            'contact_phone' => '1234567890',
            'user_id' => $user->id,
        ]);
    }


 }
