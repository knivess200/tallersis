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
            $browser->visit('http://tallersis.com/')
                    ->clickLink('Register')
                    ->type('name', 'Juan')
                    ->type('lastname', 'Rubin')
                    ->type('email', 'Jucn@Rubin.com')
                    ->type('password', '123456789')
                    ->type('cpassword', '123456789')
                    ->pause(1000)
                    ->press('Registrarse')
                    ->assertPathIs('/login');
                    
        });
    }
}
