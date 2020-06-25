<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $code = rand(100000, 999999);
            $browser->visit('http://tallersis.com/')
                    ->clickLink('Register')
                    ->type('name', 'Juan')
                    ->type('lastname', 'Rubin')
                    ->type('email', $code.'manuel@Rubin.com')
                    ->type('password', '123456789')
                    ->type('cpassword', '123456789')
                    ->pause(1000)
                    ->press('Registrarse')
                    ->assertPathIs('/login');
                    
        });
    }
}
