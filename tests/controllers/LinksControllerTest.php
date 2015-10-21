<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinksControllerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    /** @test */
    public function it_shows_the_form_to_create_a_link()
    {
        $this->visit('links/create');
    }
}
