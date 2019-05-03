<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LinksTest extends TestCase
{
    /**
     * A quick test of home page running
     *
     * @return void
     */
    public function testHomePage()
    {

        print "\n[LinksTest] :: checking link for home page";
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * A quick test of services page running
     *
     * @return void
     */
    public function testServicesPage()
    {

        print "\n[LinksTest] :: checking link for services page";
        $response = $this->get('/services');
        $response->assertStatus(200);
    }

    /**
     * A quick test of bookings page running
     *
     * @return void
     */
    public function testBookingsPage()
    {

        print "\n[LinksTest] :: checking link for bookings page";
        $response = $this->get('/booking');
        $response->assertStatus(200);
    }

    /**
     * A quick test of contact page running
     *
     * @return void
     */
    public function testContactPage()
    {

        print "\n[LinksTest] :: checking link for contact us page";
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
