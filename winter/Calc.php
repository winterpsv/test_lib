<?php

declare(strict_types=1);

namespace winterpsv\winter;

use winterpsv\winter\RectangleCalc;
use winterpsv\winter\SquareCalc;
use winterpsv\winter\CircleCalc;

/**
 * Class Calc
 * Очищаем/принимаем данные, вычисляем и выводим
 * @package winter
 */
class Calc
{
    private ?object $sq;

    public function __construct()
    {
        $this->resetResult();
    }

    public function resetResult(): void
    {
        $this->sq = null;
    }

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
