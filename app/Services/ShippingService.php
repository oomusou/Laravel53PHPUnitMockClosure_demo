<?php

declare(strict_types = 1);

namespace App\Services;

class ShippingService
{
    /**
     * 計算運費
     * @param int $weight
     * @param callable $logistics
     * @return int
     */
    public function calculateFee(int $weight, callable $logistics) : int
    {
        return $logistics($weight);
    }
}