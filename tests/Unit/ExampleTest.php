<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

// use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $this->assertTrue(true);
        
        // $response = $this->get('/')->assertSee('Blog Post');

        // Given
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);
        $posts = Post::archives();
        // When
        // $this->assertCount(2, $posts);
        // dd($posts);

        $this->assertEquals([
        	[
        		"year" => $first->created_at->format('Y'),
        		"month" => $first->created_at->format('F'),
        		"published" => 1
        	],
        	
        	[
        		"year" => $second->created_at->format('Y'),
        		"month" => $second->created_at->format('F'),
        		"published" => 1
        	],
        ], $posts);
        // Then
    }
}
