<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //test home page
        $response2 = $this->get('/');
        $response2->assertStatus(200);

        // test posts page
        $response = $this->get('/posts');
        $response->assertStatus(200);

        //test contact page    
        $response1 = $this->get('/contact');
        $response1->assertStatus(200);
    }


    // public function testBasicExample()
    // {
    //     $post = ['title' => 'testPost' ,'body' => 'This is a test post'];
    //     $response = $this->json('POST', '/posts/create', ['title' => 'testPost' ,'body' => 'This is a test post']);

    //     $response
    //         ->assertStatus(405)
    //          ->assertJsonStructure([
    //          $post =>[
    //                 'id',
    //                 'title',
    //                 'body',
    //                 'created_at',
    //                 'updated_at'
    //             ]
    //         ]);

       
    // }

    public function testDatabase()
    {
    // Make call to application...

        $this->assertDatabaseHas('posts', [
          'title' => 'post2'
        ]);
    }

    
}
