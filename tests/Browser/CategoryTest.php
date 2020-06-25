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
            $code = rand(100000, 999999);
            $browser->visit('http://tallersis.com/')
                    ->clickLink('Login')
                    ->type('email', 'knivess200@gmail.com')
                    ->type('password', '1g7O7xOH')
                    ->press('Ingresar')
                    ->assertPathIs('/')                    
                    ->clickLink('Admin')                    
                    ->clickLink('Categorias')                    
                    ->type('name', $code.'Niñoss2.0')                    
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
