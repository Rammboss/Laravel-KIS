<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserLoginTest extends TestCase
{
    public function testExample()
    {
        $this->accapt_login_and_redirect_to_home();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function accapt_login_and_redirect_to_home()
    {
        $credential = [
            'username' => 'aast1',
            'password' => 'test'
        ];
        $this->post('login', $credential)->assertRedirect('/home');
    }
}
