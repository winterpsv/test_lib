<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\Square;

/**
 * Class RectangleCalc
 * Реализован интерфейс для вычисления площади прямоугольника
 *
 * @author Sergey Pedchenko <winterpsv@gmail.com>
 *
 * @license https://opensource.org/licenses/MIT The MIT License
 *
 * @package winter
 *
 * @version 1.0.2
 */
class RectangleCalc implements Square
{
    /** @var float $x */
    /** @var float $y */
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
