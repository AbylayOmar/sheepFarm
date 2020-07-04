<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Sheep;

class SheepTest extends TestCase
{
    
    use RefreshDatabase;

    /** @test */
    function create_sheep() {
        $this -> withExceptionHandling();

        $response = $this -> post('api/sheep');

        $response -> assertStatus(200);
    }

    /** @test */
    function create_sheep_in_paddock() {
        $this -> withExceptionHandling();

        $response = $this -> post('api/sheep/1');

        $response -> assertStatus(200);
    }
}
