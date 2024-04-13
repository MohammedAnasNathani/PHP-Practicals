<html>

<head>
    <title>WAP to implement Expressions & Operators</title>
</head>

<body>
    <?php
    // Arithmetic operators
    $num1 = 10;
    $num2 = 5;

    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num1 / $num2;
    $modulus = $num1 % $num2;

    echo "Arithmetic Operators:<br>";
    echo "Addition: $addition<br>";
    echo "Subtraction: $subtraction<br>";
    echo "Multiplication: $multiplication<br>";
    echo "Division: $division<br>";
    echo "Modulus: $modulus<br>";

    // Assignment operators
    $assign = 5;
    $assignAdd += 3;
    $assignDifference -= 3;
    $assignProduct *= 3;
    $assignDivision /= 3;

    echo "Assignment Operator: $assign<br><br>";

    // Comparison operators
    $num3 = 10;
    $num4 = 20;
    $equal = ($num3 == $num4); // false
    $notEqual = ($num3 != $num4); // true
    $greaterThan = ($num3 > $num4); // false
    $lessThan = ($num3 < $num4); // true
    $greaterThanEqualTo = ($num3 >= $num4); // false
    $lessThanEqualTo = ($num3 <= $num4); // true
    
    echo "Comparison Operators:<br>";
    echo "Equal: " . ($equal ? 'true' : 'false') . "<br>";
    echo "Not Equal: " . ($notEqual ? 'true' : 'false') . "<br>";
    echo "Greater Than: " . ($greaterThan ? 'true' : 'false') . "<br>";
    echo "Less Than: " . ($lessThan ? 'true' : 'false') . "<br>";
    echo "Greater Than Equal To : " . ($greaterThanEqualTo ? 'true' : 'false') . "<br>";
    echo "Less Than Equal To: " . ($lessThanEqualTo ? 'true' : 'false') . "<br><br>";

    // Logical operators
    $isTrue = true;
    $isFalse = false;

    $andResult = $isTrue && $isFalse; // false
    $orResult = $isTrue || $isFalse; // true
    $notResult = !$isTrue; // false
    
    echo "Logical Operators:<br>";
    echo "AND: " . ($andResult ? 'true' : 'false') . "<br>";
    echo "OR: " . ($orResult ? 'true' : 'false') . "<br>";
    echo "NOT: " . ($notResult ? 'true' : 'false') . "<br><br>";

    // Bitwise operators
    $num5 = 5;
    $num6 = 3;

    $bitwiseAnd = $num5 & $num6;
    $bitwiseOr = $num5 | $num6;
    $bitwiseNot = ~$num5;

    echo "Bitwise Operators:<br>";
    echo "Bitwise AND: $bitwiseAnd<br>";
    echo "Bitwise OR: $bitwiseOr<br>";
    echo "Bitwise NOT: $bitwiseNot<br><br>";

    // Concatenation operator
    $str1 = "Hello";
    $str2 = "World";
    $concatenated = $str1 . " " . $str2;
    echo "Concatenation Operator:<br>";
    echo "$concatenated<br><br>";

    // String operators
    echo "String Operators: <br>";
    $name = "Anas";
    $greeting = "Hello, " . $name . "!";
    echo $greeting . "<br><br>";

    // Spaceship operator
    $a = 30;
    $b = 30;
    $c = 20;
    echo "Spaceship Operators: <br>";
    echo $a <=> $b;
    echo "<br/>";
    echo $a <=> $c;
    echo "<br/>";
    echo $c <=> $b;
    echo "<br/>";
    ?>
</body>

</html>