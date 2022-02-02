<?php
class Person {
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function show() {
        print "ボクの名前は{$this->lastName}{$this->firstName}です。";
    }
}