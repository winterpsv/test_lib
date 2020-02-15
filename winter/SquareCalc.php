<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\Square;

/**
 * Class SquareCalc
 * Реализован интерфейс для вычисления площади квадрата
 *
 * @author Sergey Pedchenko <winterpsv@gmail.com>
 *
 * @license https://opensource.org/licenses/MIT The MIT License
 *
 * @package winter
 *
 * @version 1.0.2
 */
class SquareCalc implements Square
{
    /** @var float $x */
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
