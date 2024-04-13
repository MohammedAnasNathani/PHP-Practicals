<html>

<head>
    <title>WAP to implement Functions of Array</title>
</head>

<body>
    <?php
    // Creating an array
    $fruits = array("Apple", "Banana", "Orange", "Grapes");

    // Printing array elements
    echo "Array Elements:<br>";
    print_r($fruits);

    // Accessing individual elements
    echo "<br><br>Accessing Individual Elements:<br>";
    echo "First Element: " . $fruits[0] . "<br>";
    echo "Second Element: " . $fruits[1] . "<br>";

    // array_push()
    echo "<br>Adding Elements to the End using array_push:<br>";
    array_push($fruits, "Strawberry", "Peach");
    print_r($fruits);

    // array_pop()
    echo "<br><br>Removing the Last Element using array_pop:<br>";
    $lastElement = array_pop($fruits);
    echo "Removed Element: $lastElement<br>";
    print_r($fruits);

    // array_shift()
    echo "<br><br>Removing the First Element using array_shift:<br>";
    $firstElement = array_shift($fruits);
    echo "Removed Element: $firstElement<br>";
    print_r($fruits);

    // array_unshift()
    echo "<br><br>Adding Elements to the Beginning using array_unshift:<br>";
    array_unshift($fruits, "Mango", "Kiwi");
    print_r($fruits);

    // array_reverse()
    echo "<br><br>Reversing the Array:<br>";
    $reversedArray = array_reverse($fruits);
    print_r($reversedArray);

    // count()
    echo "<br><br>Counting Elements in the Array:<br>";
    $count = count($fruits);
    echo "Number of elements: $count<br>";

    // array_keys()
    echo "<br><br>Getting Array Keys using array_keys:<br>";
    $keys = array_keys($fruits);
    print_r($keys);

    // array_values()
    echo "<br><br>Getting Array Values using array_values:<br>";
    $values = array_values($fruits);
    print_r($values);

    // array_slice()
    echo "<br><br>Getting a Slice of the Array using array_slice:<br>";
    $slice = array_slice($fruits, 1, 3);
    print_r($slice);

    // array_merge()
    echo "<br><br>Merging Arrays:<br>";
    $moreFruits = array("Jackfruit", "Papaya");
    $allFruits = array_merge($fruits, $moreFruits);
    print_r($allFruits);

    ?>

</body>

</html>