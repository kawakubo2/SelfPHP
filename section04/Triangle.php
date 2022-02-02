<?php
require_once 'Figure.php';

class Triangle extends Figure {
    protected $base;
    protected $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->base * $this->height / 2;
    }

    public function __toString() {
        return "Triangle class: base={$this->base} height={$this->height}";
    }
}