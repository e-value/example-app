<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase as RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// use PHPUnit\Framework\TestCase;

use App\Models\User;
use App\Models\Tweet;

class IndexControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 
     * @test
     * 
     */
    public function test_ツイート一覧()
    {
        $user = User::factory()->create();
        // print_r($user->toArray());

        Tweet::factory()->create([
            'user_id' => 1
        ]);
        

        $response = $this->get('/tweet');
        $response->assertStatus(200);
    }
}
