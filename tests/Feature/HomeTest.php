<?php

namespace Tests\Feature;


use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //TEST ROUTE HOME
    public function testHomePage()
    {
        $response = $this->get('/homeC');

        $response->assertSeeText('Home');
    }
    public function testAboutPage()
    {
        $response = $this->get('/aboutC');

        $response->assertSeeText('About');

    }
}
