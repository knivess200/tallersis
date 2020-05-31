<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginfailTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginFail()
    {
       $this->browse(function (Browser $browser) {
            $browser->visit('http://tallersis.com/')
                    ->clickLink('Login')
                    ->type('email', 'Kevin@Rubcin.com')
                    ->type('password', '123456759')
                    ->press('Ingresar')
                    ->pause(1000)
                    ->assertSee('Correo electronico o contraseña errónea');
                    //->waitForText('Message')
                    //->type('message', 'Correo electronico o contraseña errónea');
                    //->click('button[type="submit"]')
                    //->press('Ingresar')
                    //->assertPathIs('/');
                    //->assertSee('Correo electronico o contraseña errónea');
        });
    }
}
