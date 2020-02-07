<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\Square;

/**
 * Class SquareCalc
 * Реализован интерфейс для вычисления площади квадрата
 * @package winter
 */
class SquareCalc implements Square
{
    private float $x;

    /**
     * SquareCalc constructor.
     * @param float $x
     */
    public function __construct(float $x)
    {
        $this->x = $x;
    }

    /**
     * @return float|null
     */
    public function Square(): ?float
    {
        return $this->x ** 2;
    }
}