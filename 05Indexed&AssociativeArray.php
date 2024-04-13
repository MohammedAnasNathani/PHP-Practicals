<html>

<head>
    <title>WAP to implement Indexed & Associative Array</title>
</head>

<body>
    <?php
    // Indexed array
    $indexedArray = array("Apple", "Banana", "Orange", "Grapes");

    echo "Indexed Array:<br>";
    // Adding an element
    $indexedArray[] = "Pineapple";
    // Removing an element
    unset($indexedArray[1]);
    // Modifying an element
    $indexedArray[2] = "Mango";
    // Printing indexed array
    foreach ($indexedArray as $index => $value) {
        echo "Index: $index, Value: $value<br>";
    }

    // Associative array
    $associativeArray = array(
        "name" => "Anas",
        "age" => 18,
        "city" => "Downtown Dubai"
    );

    echo "<br>Associative Array:<br>";
    // Adding a new key-value pair
    $associativeArray["country"] = "United Arab Emirates";
    // Removing a key-value pair
    unset($associativeArray["age"]);
    // Modifying a value
    $associativeArray["city"] = "Palm Jumeirah";
    // Printing associative array
    foreach ($associativeArray as $key => $value) {
        echo "Key: $key, Value: $value<br>";
    }
    ?>
</body>

</html>