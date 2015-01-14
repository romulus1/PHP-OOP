<?php

class Animal {
    public $firstName;
    public $lastName;
    public $scientificName;
    public $gender;
    public $weight;
    public $bark;
    public $meow;

            function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
                $this->scientificName = $scientificName;
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->gender = $gender;
                $this->weight = $weight;
            }
function getName() {
return "This is my ". $this->firstName ." and last " . $this->lastName;
}
}
class Cat extends Animal {
function greet() {
return $this->meow;
}

}
class Dog extends Animal {
function hello() {
return $this->bark;
}
}
$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15);
print "Animal 1 is a " . $cat->getName();