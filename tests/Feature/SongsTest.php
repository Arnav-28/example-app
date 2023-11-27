<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Practicals\Song;

class SongsTest extends TestCase
{

    public function testSongsOk(): void
    {
        $response = $this->get('/songs');
        $response->assertStatus(200);
    }
    
}


