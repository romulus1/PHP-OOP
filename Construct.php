<?php
    class Food {
        public $chips;
        public $fruits;
        public $vegetables;
            
        public function __construct($chips, $fruits, $vegetables) {
            $this->chips = $chips;
            $this->fruits = $fruits;
            $this->vegetables = $vegetables;
        }
            
        public function statement() {
            return "I like " . $this->chips . " but " . $this->fruits . " are healthier and tastier";
        }
    }

    $food = new food('Doritos', 'blackberries', "carrots");
    echo $food->statement(); 
?>

<?php
        class School {
        public $school;
        public $location;
        public $bulldog;
            
        public function __construct($school, $location, $bulldog) {
            $this->school = $school;
            $this->location = $location;
            $this->bulldog = $bulldog;
        }
            
        public function greet() {
            return "My favorite school is " . $this->school . " in " . $this->location;
        }
    }

    $pusd = new school('Pasadena High School', 'Pasadena', "bulldog");
    echo $pusd->greet(); 
    

?>