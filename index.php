<?php

class Circle {
    private string $color;
    private float $radius;

    public function __construct($color, $radius){
        $this->color = $color;
        $this->radius = $radius;
    }

    public function get_radius(){
        return $this->radius;
    }

    public function get_color (){
        return $this->color;
    }
}


$circleDetails = new Circle ("red" ,20);
echo "<pre>";
var_dump($circleDetails);
echo "</pre>";

echo "<br>****************************<br>";


class Emplyee {
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $salary;
    public function __construct($id, $firstName, $lastName, $salary){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }
    public function get_id(){
        return $this->id;
    }

    public function get_fName(){
        return $this->firstName;
    }
    public function get_lName(){
        return $this->lastName;
    }
    public function get_salary(){
        return $this->salary;
    }
}

$emloyeeDetails = new Emplyee(2026, "Engy", "Samy", 3400);
echo "<pre>";
var_dump($emloyeeDetails);
echo "</pre>";

echo "<br>****************************<br>";


// understnad what you need

class Rectangle {
    private float $length;
    private float $width;
    private string $area;


    public function __construct($length, $width, $area){
        $this->length = $length;
        $this->width = $width;
        $this->area = $area;
    }


    public function set_length(float $length){
        $this->length = $length;
    }
    public function get_length(){
        return $this->length;
    }

    public function set_width(float $width){
        $this->width = $width;
    }
    public function get_width(){
        return $this->width;
    }

    public function get_area(){}
}

$rectangleDetials = new Rectangle(1.0 , 1.0, "f");
echo "<pre>";
var_dump($rectangleDetials);
echo "</pre>";

echo "<br>****************************<br>";
