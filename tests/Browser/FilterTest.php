<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FilterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testFilter()
    {
        $this->browse(function (Browser $browser) {
            $browser->resize(1600, 900)
                    ->visit('http://tallersis.com/')
                    ->clickLink('Login')
                    ->type('email', 'Kevin@Rubin.com')
                    ->type('password', '123456789')
                    ->press('Ingresar')
                    ->assertPathIs('/')                    
                    ->clickLink('Admin')   
                    ->clickLink('Usuarios') 
                    
                    //->select('size', 'Large'); 
                    ->click('button[id="dropdownMenuButton"]')
                    ->pause(1000)
                    ->clickLink(' Verificados')
                    ->pause(1000) 
                    ->assertPathIs('/admin/users/1') 
                    ->pause(2000)   ;           
                    /*->clickLink('Servicios') 
                    ->clickLink('Agregar Servicio') 
                    ->pause(1000)                    
                    ->type('name', 'Niñcxooos')
                     ->pause(1000)                     
                    ->value('select', '2') 
                     ->pause(1000)  
                    ->select('.custom-file-input', 'descarga.png')
                     ->pause(1000) 
                    ->type('price', '10') 
                     ->pause(5000) 
                    ->select('.custom-select', '1') 
                     ->pause(5000)   
                    ->value('discount', '2')
                     ->pause(5000) 
                    ->type('content', 'hola') 
                     ->pause(1000)                 
                    ->press('Guardar')
                     ->pause(1000) 
                    ->assertPathIs('/admin/categories/0')
                    ->assertSee('Guardado con exito')
                    ->pause(1000)*/
                                        
                    

        });
    }
}
