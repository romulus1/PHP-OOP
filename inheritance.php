<?php
    class Code {
        public $favoriteCode;
        public $noCode;

        function __construct($favoriteCode, $noCode) {
            $this->favoriteCode = $favoriteCode;
            $this->noCode = $noCode;
        }
    
        function getCode() {
        return "This is my favorite code " . $this->favoriteCode . 
                " and my least favorite is " . $this->noCode;
        }
    }
    class php extends Code {
            function getCode() {
            print $this->noCode;
            }

}
    class html extends Code {
            function hello() {
            return $this->bark;
    }
}  

$php = new php("easy", "Php ", "creative");
print "is so easy" . $php->getCode();

    class somethingElse {                  //
        public $favoriteCode;
        public $noCode;

        function __construct($favoriteCode, $noCode) {
            $this->favoriteCode = $favoriteCode;
            $this->noCode = $noCode;
        }
    
        function getCode() {
        return "This is my favorite code " . $this->favoriteCode . 
                " and my least favorite is " . $this->noCode;
        }
    }
    class Somet extends Code {                 //
            function getCode() {
            print $this->noCode;
            }

}
    class keep extends Code {                //
            function hello() {
            return $this->bark;
    }
}  

$php = new php("easy", "Php ", "creative");
print "is so easy" . $php->getCode();
//Lecture 5//

    class Animal {
        public $firstName;
        public $lastName;
        public $scientificName;
        public $gender;
        public $weight;

        function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
            $this->scientificName = $scientificName;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->gender = $gender;
            $this->weight = $weight;
        }

        function getName() {
        return "This is my " . $this->firstName .
                " and last " . $this->lastName .
                " and this is my scientific name " . $this->scientificName . ".";
        }
    }
        class Cat extends Animal {
            function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
                parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
            $this->meow = $meow;
        }
        
        function greet() {
            return $this->meow;
        }
    }
    class Dog extends Animal {
        function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark) {
            parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
        $this->bark = $bark;
        }

        function hello() {
        return $this->bark;
        }
    }
        $cat = new Cat("Cat", "Mellow", "Yellow", "male", 15, true);
        print "Animal 1 is a " . $cat->getName();
        
            class person {
        public $firstName;
        public $lastName;
        public $gender;
        public $weight;

        function __construct($firstName, $lastName, $gender, $weight) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->gender = $gender;
            $this->weight = $weight;
        }

        function getName() {
        return "This is my " . $this->firstName .
                " and last " . $this->lastName . ".";
        }
    }
        class worker extends person {
            function __construct($firstName, $lastName, $gender, $job){
                parent::__construct( $firstName, $lastName, $gender, $job);
            $this->work = $work;
        }
        
        function greet() {
            return $this->work;
        }
    }
    class student extends Person {
        function __construct($firstName, $lastName, $gender, $weight, $gpa) {
            parent::__construct( $firstName, $lastName, $gender, $weight, $gpa);
        $this->gpa = $gpa;
        }

        function hello() {
        return $this->gpa;
        }
    }
        $student = new Student("person", "latino", "male", 15);
        print "The student's gpa is " . $studnt->getGpa();