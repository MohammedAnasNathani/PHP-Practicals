<html>

<head>
    <title>WAP to implement implode and explode</title>
</head>

<body>
    <?php
    $fruits = array('apple', 'banana', 'orange');
    $string = implode(', ', $fruits);
    echo "Implode Example:<br>";
    echo "Joined string: $string<br><br>";

    $string = "apple,banana,orange";
    $fruits = explode(',', $string);
    echo "Explode Example:<br>";
    echo "Array of fruits: ";
    print_r($fruits);
    ?>
</body>

</html>