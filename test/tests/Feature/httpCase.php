<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class httpCase extends \Monolog\Test\TestCase
{
    public function inicioTest(){

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
