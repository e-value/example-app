<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Tweet;
use App\Models\User;

class DeleteControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 
     * @test
     * 
     */
    public function test_ツイートの削除(): void
    {
        $user = User::factory()->create();
        print_r($user->toArray());

        $tweet = Tweet::factory()->create([
            'user_id' => 1
        ]);
        print_r($tweet->toArray());

        $this->actingAs($user);

        $response = $this->delete('/tweet/delete/'.$tweet->id);
        $response->assertRedirect('/tweet');
        
        
    }
}
