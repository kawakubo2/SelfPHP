<?php
// Rectangle.php
require_once 'Figure.php';

class Rectangle extends Figure {
    protected $width;  // 幅
    protected $height; // 高さ

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }

    public function __toString() {
        return "Rectangle class: width={$this->width} height={$this->height}";
    }
}