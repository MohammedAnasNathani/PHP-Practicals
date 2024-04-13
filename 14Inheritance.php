<html>

<head>
    <title>WAP to implement inheritance in PHP</title>
</head>

<body>
    <?php
    // Define parent class
    class Animal
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function sound()
        {
            echo "Animal makes a sound<br>";
        }
    }

    // Define child class that inherits from Animal
    class Dog extends Animal
    {
        public function sound()
        {
            echo "Dog barks<br>";
        }

        public function action()
        {
            echo "Dog runs<br>";
        }
    }

    // Create an instance of the child class
    $dog = new Dog("Fido");

    // Access properties and methods of the parent class
    echo "Name: " . $dog->name . "<br>";
    echo "Sound: ";
    $dog->sound();
    echo "Action: ";
    $dog->action();
    ?>
</body>

</html>