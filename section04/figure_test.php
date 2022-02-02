<?php
require_once 'Figure.php';
require_once 'Rectangle.php';
require_once 'Circle.php';
require_once 'Triangle.php';

function calcTotal(array $figs) : float {
    $total = 0;
    foreach ($figs as $fig) {
        $total += $fig->getArea();
    }
    return $total;
}

$player1 = [new Rectangle(25, 8), new Circle(5), new Triangle(20, 10), new Rectangle(10, 10)];
$player2 = [new Circle(10), new Triangle(10, 10), new Rectangle(10, 10)];

$player1Area = calcTotal($player1);
$player2Area = calcTotal($player2);

print("プレイヤー1の面積: {$player1Area}<br>");
print("プレイヤー2の面積: {$player2Area}<br>");