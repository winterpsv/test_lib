<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\RectangleCalc;
use winterpsv\winter\SquareCalc;
use winterpsv\winter\CircleCalc;

/**
 * Class Calc
 * Очищаем/принимаем данные, вычисляем и выводим
 *
 * @author Sergey Pedchenko <winterpsv@gmail.com>
 *
 * @license https://opensource.org/licenses/MIT The MIT License
 *
 * @package winter
 *
 * @version 1.0.2
 */
class Calc
{
    /**
     * @var object|null
     */
    private ?object $sq;

    /**
     * Calc constructor.
     */
    public function __construct()
    {
        $this->resetResult();
    }

    /**
     * Reset result
     */
    public function resetResult(): void
    {
        $this->sq = null;
    }

    /**
     * View result
     */
    public function getResult(): void
    {
        try {
            $result = $this->sq->Square();
            echo "\u{2603} площадь равна = ".$result . "<br>";
        } catch (\TypeError $e) {
            echo $e->getMessage() . "<br>";
        }
        $this->resetResult();
    }

    /**
     * @param string|null $type
     * @param float|null $x
     * @param float|null $y
     */
    public function counts(?string $type, ?float $x, ?float $y): void
    {
        switch ($type) {
            case 'Circle':
                $this->sq = new CircleCalc($x);
                break;
            case 'Square':
                $this->sq = new SquareCalc($x);
                break;
            case 'Rectangle':
                $this->sq = new RectangleCalc($x, $y);
                break;
            default :
                echo "Не указан тип фигуры!";
        }
    }
}
