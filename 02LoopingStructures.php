<html>

<head>
    <title>WAP to implement Looping Structures</title>
</head>

<body>
    <?php
    // for loop
    echo "Looping with for loop:<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration $i<br>";
    }

    // while loop
    echo "Looping with while loop:<br>";
    $j = 1;
    while ($j <= 5) {
        echo "Iteration $j<br>";
        $j++;
    }

    // do-while loop
    echo "Looping with do-while loop:<br>";
    $k = 1;
    do {
        echo "Iteration $k<br>";
        $k++;
    } while ($k <= 5);

    // foreach loop (Looping through an array )
    echo "Looping through an array:<br>";
    $fruits = array("Apple", "Banana", "Orange", "Grapes");
    foreach ($fruits as $fruit) {
        echo "$fruit<br>";
    }

    // foreach loop (Looping through an associative array)
    echo "Looping through an associative array:<br>";
    $person = array("name" => "Anas", "age" => 18, "city" => "Mumbai");
    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
</body>

</html>