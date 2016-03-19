<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Way\Tests\Assert;
use Way\Tests\Should;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->see('Laravel 5');

//        Artisan::call('migrate:refresh');
    }

    public function testLaravelDevsIncludesDayle()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
        $this->assertContains('Dayle', $names, 'オプションのメッセージ');
    }

    public function testFamilyRequiresParent()
    {
        $family = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
        ];
        $this->assertArrayHasKey('parents', $family); // true
    }

    /*
       @expectedException InvalidArgumentException
    */

    public function testexpectedException()
    {
        // ?
    }

    public function lesson1()
    {
        $name = 'Joe';
        Should::equal('Joe', $name);
        Assert::equals('Joe', $name);
    }


}
