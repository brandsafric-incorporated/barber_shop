<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginPageExists()
    {
        print "\n[LoginTest] :: asserting that login page exists";
        $response = $this->get('/login');
        $response->assertStatus(200);

        print "\n[LoginTest] :: asserting that view is auth.login";
        $response->assertViewIs('auth.login');
    }

    public function testUserWithLogin()
    {
        // making a dummy user that is not stored in database
        $user = factory(User::class)->make();

        // add user to request and get response for login page
        $response = $this->actingAs($user)->get('/login');

        // we should be redirected to home page
        print "\n[LoginTest] :: asserting that successful login will redirect to /home";
        $response->assertRedirect('/home');
    }

    public function testLogout()
    {
      // making a dummy user that is not stored in database
      $user = factory(User::class)->make();

      // add user to request and get response for login page
      $response = $this->actingAs($user)->get('/login');

      // perform logout
      $response = $this->post('/logout');

      print "\n[LoginTest] :: asserting that user is a guest after logout is done";
      $this->assertGuest();
    }

}
