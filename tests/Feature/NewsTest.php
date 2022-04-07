<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_status_success(): void
    {
        $response = $this->get(route('news'));

        $response->assertStatus(200);
    }

    public function test_create_status_success(): void
    {
        $response = $this->get(route('news.create'));

        $response->assertStatus(200);
    }

    public function test_store_news_success(): void
    {
        $data = [
            'name' => 'Alex',
            'telephone' => '1234567',
            'email' => 'mail@mail.ru'
        ];

        $response = $this->postJson(route('news.create'), $data);

        $response->assertJson($data)
                 ->assertCreated();

    }
}
