<?php

use App\Services\BlackCat;
use App\Services\LogisticsInterface;
use App\Services\ShippingService;

class ShippingServiceIT extends TestCase
{
    /** @test */
    public function 黑貓Interface整合測試()
    {
        /** arrange */
        App::bind(LogisticsInterface::class, BlackCat::class);

        /** act */
        $weight = 1;
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight' => $weight,
        ]);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function 黑貓Closure整合測試()
    {
        /** arrange */

        /** act */
        $weight = 1;
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight' => $weight,
            'logistics' => function ($weight) {
                return 100 * $weight + 10;
            }
        ]);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }
}
