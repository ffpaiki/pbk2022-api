<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JurusanTest extends TestCase
{
    public function test_get_all_jurusan_response()
    {
        $response = $this->get('/api/jurusan');

        $response->assertStatus(200);
    }

    public function test_get_one_jurusan_response()
    {
        $response = $this->get('/api/jurusan/1');

        $response->assertStatus(200);
    }
}
