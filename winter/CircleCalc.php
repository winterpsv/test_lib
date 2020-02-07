<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\Square;

/**
 * Class CircleCalc
 * Реализован интерфейс для вычисления площади круга
 * @package winter
 */
class CircleCalc implements Square
{
    private const PI = 3.1416;
    private ?float $r;

    /**
     * CircleCalc constructor.
     * @param float|null $r
     */
    public function __construct(float $r)
    {
        $this->r = $r;
    }

    /**
     * @return float|null
     */
    public function Square(): ?float
    {
        return self::PI * ($this->r ** 2);
    }
}