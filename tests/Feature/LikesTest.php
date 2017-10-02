<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;
use App\User;

class LikesTest extends TestCase
{
    /** @test */

    public function a_user_can_like_a_post()
    {
    	$post = factory(Post::class)->create();

    	$user = factory(User::class)->create();
    	$this->actingAs($user);

    	$post->like();
    	$this->assertDatabaseHas('likes', [
    		'user_id' => $user->id,
    		'likable_id' => $post->id,
    		'likable_type' => get_class($post),
    		]);

    	$this->assertTrue($post->isLiked());
    }
}
