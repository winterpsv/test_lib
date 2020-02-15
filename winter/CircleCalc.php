<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\Square;

/**
 * Class CircleCalc
 * Реализован интерфейс для вычисления площади круга
 *
 * @author Sergey Pedchenko <winterpsv@gmail.com>
 *
 * @license https://opensource.org/licenses/MIT The MIT License
 *
 * @package winter
 *
 * @version 1.0.2
 */
class CircleCalc implements Square
{
    /** @var float Pi */
    private const PI = 3.1416;

    /** @var float|null */
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
