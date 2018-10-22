<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class HomeTest extends TestCase
{
    /**
     * Comprobar que el home del admin cargue correctamente.
     *
     * @test
     */
    function load_profile_admin()
    {
        $user = User::role('admin')->first();

        $this->actingAs($user)
            ->get('home')
            ->assertStatus(200)
            ->assertSee('DIPLOS ACTIVOS');
    }

    /**
     * Comprobar que el home del teacher cargue correctamente.
     *
     * @test
     */
    function load_profile_teacher()
    {
        $user = User::role('teacher')->first();

        $this->actingAs($user)
            ->get('home')
            ->assertStatus(200)
            ->assertSee('Últimas Actividades');
    }

    /**
     * Comprobar que el home del student cargue correctamente.
     *
     * @test
     */
    function load_profile_student()
    {
        $user = User::role('student')->first();

        $this->actingAs($user)
            ->get('home')
            ->assertStatus(200)
            ->assertSee('Las ultimas calificaciones de tus tareas apareceran aqui');
    }
}
