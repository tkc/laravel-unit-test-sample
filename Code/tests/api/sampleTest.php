<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Way\Tests\Assert;
use Way\Tests\Should;

class ApiTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
//        Artisan::call('migrate:rollback');
//        Artisan::call('migrate');
//        $this->seed();
    }

    /**
     * 個別のプロセスとして実行する、定数の依存を解消する。
     * @test
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */

    public function testBasicExample()
    {
        $param = [
            "card_id" => TestConfig::$card_id
        ];

//        $response = $this->call('POST',
//            '/rest/v1/ec/add_item', $param
//        );
//        print_r($response->original);
//        $this->assertTrue($response->original['code'] == 200 || $response->original['code'] == 201);

    }


}
