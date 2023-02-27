<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Tweet;

class IndexControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 
     * @test
     * 
     */
    public function get_tweets_テスト()
    {
        Tweet::factory()->create();
        $response = $this->get('/tweet');
        $response->assertStatus(200);
    }
}
