<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function itListsClients()
    {
        $response = $this->get('/api/clients');

        $response->assertOK();
        $this->assertCount(15, $response-> json('data'));
        $this->assertNotNull($response->json('data')[0]['tel_client']);
    }
}
