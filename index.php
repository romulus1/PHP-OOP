class Person {
    public $firstName = “Luis”;
    public $lastName = “Cedano”;
    public $gender = “male”;
    public $price = 0;
    
    function getName() {
    return "{$this>firstName}";
    "{$this>lastName}";
    }
}

$person1 = new Person();
$person1>firstName = “Luis”;
$person1>lastName = “Cedano”;

print “The person's name is {$dog1>getName()}.”;

-----------------------------------------------

