//<!-- //Lecture 1: Example 1: Classes -->
class Person {
    //class body
    //class body
    //class body
}

class planet {
    //class body
    //class body
    //class body
}

class band {
    //class body
    //class body
    //class body
}

//<!-- //Example 2 -->
$person1 = new Person();
$person2 = new Person();

$planet1 = new Planet();
$planet2 = new Planet();

$band1 = new Band();
$band2 = new Band();
<!-- Example 3: Properties -->
class Person {
    public $firstName = "Luis";
    public $lastName = "Cedano";
    public $gender = "male";
    public $gpa = 3;
}

class Planet {
    public $name = "Venus";
    public $atmosphere = "pressure";
    public $gravity = "low";
    public $size = 0;
}

class Band {
    public $name = "Queen";
    public $numofpeople = "4";
    public $popularity = "high";
    public $numofSongs = "64";
}

<!-- Example 4 -->
$person1 = new Person();
print $person1>name;

$planet1 = new Planet();
print $planet1>size;

$band1 = new Band();
print $band>members;
<!-- Example 5: Methods -->
public function myMethod( $argument, $another) {
// stuff
}

<!-- Example 6 -->
class Person {
    public $firstName = "Luis";
    public $lastName = "Cedano";
    public $gender = "male";
    public $Gpa = 3;
    
    function getGpa() {
    return "{$this>Gpa}" .
    "{$this>Gpa}";
    }
}

$person1 = new Person();
$person1>firstName = "Luis";
$person1>lastName = "Cedano";
print "The person’s name is {$person1>getGpa()}.";


class Planet {
    public $name = "Venus";
    public $atmosphere = "pressure";
    public $gravity = "low";
    public $size = 0;
    
    function getName() {
    return "{$this>firstName}" .
    "{$this>lastName}";
    }
}

$planet1 = new Planet();
$planet1>firstName = "Venus";
print "The planet’s size is {$person1>getName()}.";

class Person {
    public $name = "default name";
    public $atmosphere = "default last name";
    public $gravity = "male";
    public $size = 0;
    
    function getName() {
    return "{$this>firstName}" .
    "{$this>lastName}";
    }
}

$planet1 = new Planet();
$planet1>firstName = "Venus";
print "The planet’s size is {$person1>getName()}.";

<!--Lecture 2: Creating a constructor method -->

class Person {
public $firstName;
public $lastName;
public $race;

    function __construct($title, $firstName, $lastName, $race) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->race = $race;
    }

    function getName() {
    return "{$this->firstName}" .
    "{$this->lastName}";
    }
}

class Planet {
public $name;
public $gravity;
public $size;

    function __construct($title, $name, $gravity, $size) {
    $this->Name = $Name;
    $this->gravity = $gravity;
    $this->size = $race;
    }

    function getInfo() {
    return "{$this->name}" .
    "{$this->size}";
    }
}

class Band {
public $name;
public $members;
public $songs;

    function __construct($title, $name, $members, $songs) {
    $this->Name = $Name;
    $this->gravity = $members;
    $this->size = $songs;
    }

    function getAlbum() {
    return "{$this->members}" .
    "{$this->songs}";
    }
}

