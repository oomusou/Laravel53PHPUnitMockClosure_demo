<?php

declare(strict_types = 1);

namespace App\Services;

interface LogisticsInterface
{
    public function calculateFee(int $weight) : int;
}