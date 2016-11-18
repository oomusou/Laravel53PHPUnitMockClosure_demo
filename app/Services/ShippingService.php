<?php

declare(strict_types = 1);

namespace App\Services;

class ShippingService
{
    /**
     * 計算運費
     * @param int $weight
     * @param LogisticsInterface $logistics
     * @return int
     */
    public function calculateFee(int $weight, LogisticsInterface $logistics) : int
    {
        return $logistics->calculateFee($weight);
    }
}