<?php

declare(strict_types = 1);

use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function 黑貓單元測試()
    {
        /** arrange */
        $mock = $this->createPartialMock(stdClass::class, ['__invoke']);

        $mock->expects($this->once())
            ->method('__invoke')
            ->withAnyParameters()
            ->willReturn(110);

        /** act */
        $weight = 1;
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight'    => $weight,
            'logistics' => $mock,
        ]);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function 黑貓整合測試()
    {
        /** arrange */

        /** act */
        $weight = 1;
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight'    => $weight,
            'logistics' => function (int $weight) {
                return 100 * $weight + 10;
            },
        ]);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }
}
