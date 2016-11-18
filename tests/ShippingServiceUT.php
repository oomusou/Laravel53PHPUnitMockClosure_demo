<?php

declare(strict_types = 1);


use App\Services\BlackCat;
use App\Services\LogisticsInterface;
use App\Services\ShippingService;

class ShippingServiceUT extends TestCase
{
    /** @test */
    public function 黑貓Interface單元測試()
    {
        /** arrange */
        $mock = $this->createMock(BlackCat::class);
        $mock->expects($this->once())
            ->method('calculateFee')
            ->withAnyParameters()
            ->willReturn(110);

        App::instance(LogisticsInterface::class, $mock);

        /** act */
        $weight = 1;
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight' => $weight,
        ]);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }
}