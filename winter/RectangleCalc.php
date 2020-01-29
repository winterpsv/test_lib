<?php

declare(strict_types=1);

namespace winter;

use winter\Square;

/**
 * Class RectangleCalc
 * Реализован интерфейс для вычисления площади прямоугольника
 * @package winter
 */
class RectangleCalc implements Square
{
    private float $x, $y;

    /**
     * RectangleCalc constructor.
     * @param float $x
     * @param float $y
     */
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float|null
     */
    public function Square(): ?float
    {
        return $this->x * $this->y;
    }
}