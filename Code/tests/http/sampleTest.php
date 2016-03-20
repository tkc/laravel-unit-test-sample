<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Way\Tests\Assert;
use Way\Tests\Should;

class WebTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
//        Artisan::call('migrate:rollback');
//        Artisan::call('migrate');
//        Artisan::call('db:seed');
    }

    public function testTopPage()
    {
        $this->visit('/')
            ->see('<div class="title">')
            ->see('Laravel 5')
            ->dontSee('Rails');
    }

    public function testForm()
    {
        $this->visit('/register')
            ->type('Taylor', 'name')
            ->check('terms');
//            ->press('register');
//        ->seePageIs('/dashboard');
    }


}
