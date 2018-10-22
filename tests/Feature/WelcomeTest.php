<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
    /**
     * Comprobación de que la vista welcome es cargada.
     *
     * @test
     */
    function load_view_welcome()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Diplomado "Sangre y Componentes Seguros"');
    }
}
