<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }

    public function songs_static() {
        $httpClient = new \GuzzleHttp\Client();
        $response = $httpClient->get('/songs_static');

        // Failing assertion to expect a 200 OK status code
        $this->assertEquals(200, $response->getStatusCode());
    }
}

