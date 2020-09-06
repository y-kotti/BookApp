<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BooksControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $response = $this->withHeaders([
//            'Authorization' => 'Bearer token'
//        ])->getJson('/auth/login');

        $response = $this->call('GET', '/books-info');

        $response->assertStatus(200);
    }
}
