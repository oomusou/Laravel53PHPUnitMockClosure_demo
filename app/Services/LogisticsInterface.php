<?php

declare(strict_types = 1);

namespace App\Services;

interface LogisticsInterface
{
    /**
     * 計算運費
     * @param int $weight
     * @return int
     */
    public function calculateFee(int $weight) : int;
}