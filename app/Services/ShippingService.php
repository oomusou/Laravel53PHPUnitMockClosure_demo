<?php

declare(strict_types = 1);

namespace App\Services;

class ShippingService
{
    public function calculateFee(int $weight, $logistics) : int
    {
        return $logistics($weight);
    }
}