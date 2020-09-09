<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get(route('init'));
        $response->assertStatus(200);
    }

    /**
     * Probamos a entrar al apartado administracion sin loguearnos
     * El cual nos debe redirigir al login
     */
    public function testLoginWithOutRegister(){
        $response =$this->get(route('administracion'));
        $response->assertRedirect(route('login'));
    }

    /**
     * Probamos a entrar al apartado administracion logueado
     * Este metodo debera devolvernos que hemos podido entrar sin problemas
     */
    public function testLoginRegister(){
        $user = User::find(1);
        $this->be($user);

        $response =$this->get(route('administracion'));
        $response->assertStatus(200);
    }

    /**
     * Cunado una persona ya esta registrada no deberia poder acceder a la pagina para registrarse
     * y deberia redirigirnos a home
     */
    public function testRegisterButLogin(){
        $user = User::find(1);
        $this->be($user);

        $response =$this->get(route('register'));
        $response->assertRedirect(route('home'));
    }

    /**
     * Una vez ya logueados no nos deja ir a la pagina de login y nos debe redireccionar a home
     */
    public function testLoginButLogin(){
        $user = User::find(1);
        $this->be($user);

        $response =$this->get(route('login'));
        $response->assertRedirect(route('home'));
    }
}
