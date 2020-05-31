<?php

namespace Tests\Browser;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCategoryadd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://tallersis.com/')
                    ->clickLink('Login')
                    ->type('email', 'Kevin@Rubin.com')
                    ->type('password', '123456789')
                    ->press('Ingresar')
                    ->assertPathIs('/')                    
                    ->clickLink('Admin')                    
                    ->clickLink('Categorias')                    
                    ->type('name', 'Niñcxooos')                    
                    ->value('select', '0')                                     
                    ->type('icon', '<i class="far fa-folder-open"></i>')                    
                    ->press('Guardar')
                    ->assertPathIs('/admin/categories/0')
                    ->assertSee('Guardado con exito')
                    ->pause(1000)
                    
                    ;
                    
        });
    }
}
