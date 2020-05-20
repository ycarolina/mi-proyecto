<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/yoselyn/caro')
             ->assertStatus(200)
             ->assertSee('Bienvenido yoselyn, tu apodo es caro');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/yoselyn')
             ->assertStatus(200)
             ->assertSee('Bienvenido yoselyn, no tienes apodo');
    }
    
}
