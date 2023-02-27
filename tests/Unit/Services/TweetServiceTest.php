<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Services\TweetService;

use App\Models\User;
use App\Models\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase as RefreshDatabase;
use Mockery;

class TweetServiceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 
     * @test
     * 
     */
    public function test_check_own_tweet_自分の呟きかをチェック()
    {
        // $users = User::factory()->count(2)->create();
        // print_r($users->toArray());

        // $tweet = Tweet::factory()->create();
        // print_r($tweet->toArray());

        $tweetService = new TweetService();

        $mock = Mockery::mock('alias:App\Models\Tweet');
        $mock->shouldReceive('where->first')->andReturn((object)[
            'id' => 1,
            'user_id' => 1
        ]);

        $result = $tweetService->checkOwnTweet(1, 1);
        $this->assertTrue($result);

        $result = $tweetService->checkOwnTweet(2, 1);
        $this->assertFalse(False);
    }
}
