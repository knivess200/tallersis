<?php

namespace Tests\Unit;

use App\User; 
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUsuario()
    {
        $fb = new User();
        $list = $fb->getUsers();
    	$this->assertEquals();
        
    }
}
