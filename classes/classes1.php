<?php

// Classes and Objects in PHP

// Class -> Tesla Y
// Object -> My Tesla Y or your Tesla Y

class Person {

    public function __construct(public string $name, public int $age) {}

    public function introduce(): string{
        return "Hi, I am {$this->name} and I am {$this->age} years old.";
    }
}

class Employee extends Person {

    public function __construct(string $name, int $age, public string $position) {
        parent::__construct($name, $age);
    }

    public function introduce(): string {
        return parent::introduce() . " I work as a {$this->position}.";
    }

}

$person = new Person("Alice", 30);
echo $person->introduce() . "\n";

$person2 = new Person("Piotr", 37);
echo $person2->introduce() . "\n";

$people = [
    new Employee("Jerry", 45, "Manager"),
    new Person("John", 28)
];

function introduce(Person $person): string {
    return $person->introduce() . "\n";
}

foreach ($people as $person) {
    echo introduce($person);
}