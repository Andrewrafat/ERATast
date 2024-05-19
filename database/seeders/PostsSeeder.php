<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('is_admin','0')->get();
        foreach ($users as $user) {
            \App\Models\Post::create([
                'title' =>'this my new post title',
            'description'=>'this my new post description',
            'contact_phone'=>'this my new post contact_phone',
            'user_id'=> $user->id
                ]);
        }
       
    }
}
