<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\User; 

class UserTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testlogin(){



        $response = $this->get('/admin')->assertRedirect('/login');
    }

    /*public function testLogedAdmin(){

        $this->actingAs(factory(User::class)->create([
            'lastname' => 'ceso',
            'email' => 'Kevinc@Rubin.com',
            'role'=> '1',
        ]));

        $response = $this->get('/admin')->assertOk();
    }*/

    public function testLogedUser(){

        $this->actingAs(factory(User::class)->create([
            'lastname' => 'ceso',
            
            'role'=> '0',
        ]));

        $response = $this->get('/us')->assertOk();
    }


    public function testCrearUsuario(){

        $response = $this->post('/register',[
            'name' => 'ceso',
            'lastname' => 'ceso',
            'email' => 'ceso@ceso.com',
            'password' => '123456789',
        ]);

        $this->get('/login')->assertOk();

    }

    public function test_a_name_is_req()
    {

        

         $response = $this->post('/register',[
            'name' => '',
            'lastname' => 'ceso',
            'email' => 'ceso@ceso.com',
            'password' => '123456789',
        ]);
         $response->assertSessionHasErrors('name');

    }

    public function test_a_lastname_is_req()
    {

        

         $response = $this->post('/register',[
            'name' => 'cessoo',
            'lastname' => '',
            'email' => 'ceso@ceso.com',
            'password' => '123456789',
        ]);
         $response->assertSessionHasErrors('laaaaaastname');

    }

    public function test_a_email_is_req()
    {

        

         $response = $this->post('/register',[
            'name' => 'cessoo',
            'lastname' => 'cesoo',
            'email' => '',
            'password' => '123456789',
        ]);
         $response->assertSessionHasErrors('email');

    }

    public function test_a_pass_is_req()
    {

        

         $response = $this->post('/register',[
            'name' => 'cessoo',
            'lastname' => 'cesoo',
            'email' => 'ceso@ceso.com',
            'password' => '',
        ]);
         $response->assertSessionHasErrors('password');

    }


    /*public function testBannedUser()
    {
        $u = User::findOrFail(3);
        if($u->status == "100"):
            $u->status = "1";
            $msg= "Usuario activo nuevamente";
            ($u->save());
            $u = User::findOrFail(3);
            $this->assertEquals($u->status, 1, 'Usuario Activado');
        else:
            $u->status = "100";
            $msg = "Usuario suspendido con exito";
            ($u->save());
            $u = User::findOrFail(3);
            $this->assertEquals($u->status, 100, 'Usuario Banneado');
        endif;
    }
*/

}
