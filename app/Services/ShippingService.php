<?php

declare(strict_types = 1);

namespace App\Services;

use Closure;

class ShippingService
{
    public function calculateFee(int $weight, Closure $logistics) : int
    {
        return $logistics($weight);
    }
}