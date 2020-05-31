<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
   // use DatabaseMigrations;
  //  use RefreshDatabase;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {

      /*  $user = factory(User::class)->create([
            'email' => 'Kevin@Rubin.com',
            'lastname' => 'Rubin',
            'role' => '1',
        ]);
*/

        $this->browse(function (Browser $browser) {
            $browser->visit('http://tallersis.com/')
                    ->clickLink('Login')
                    ->type('email', 'Kevin@Rubin.com')
                    ->type('password', '123456789')
                    //->click('button[type="submit"]')
                    ->press('Ingresar')
                    ->assertPathIs('/')
                    ->pause(1000);
                    //->assertSee('Laravel');
        });
    }

    
}
