<?php

declare(strict_types = 1);

namespace App\Services;

class ShippingService
{
    public function calculateFee(int $weight, LogisticsInterface $logistics) : int
    {
        return $logistics->calculateFee($weight);
    }
}