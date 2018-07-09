<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParticipateInForumTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */

     /** @test */
    public function an_authenticated_user_can_participate_in_forum_threads()
    {
        //given we have an authernticated user
        $this->be($user = factory('App\User')->create());
        // and an existing threads
        $thread = factory('App\Thread')->create();
        // when a user adds a reply to thread
        $reply = factory('App\Reply')->make();
        $this->post('/threads/'.$thread->id.'/replies', $reply->toArray());
        // then their reply should be visible in the page.
        $this->get($thread->path())
        -> assertSee($reply->body);
    }
}
