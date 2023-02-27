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
    public function test_ツイート一覧()
    {
        Tweet::factory()->create();
        $response = $this->get('/tweet');
        $response->assertStatus(200);
    }
}
