<?php
require_once 'Figure.php';

class Circle extends Figure {
    protected $radius; // 半径

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea() : float {
        return pow($this->radius, 2) * M_PI;
    }

    public function __toString() {
        return "Circle class: radius={$this->radius}";
    }
}