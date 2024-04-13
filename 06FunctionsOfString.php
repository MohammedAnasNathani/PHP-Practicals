<html>

<head>
    <title>WAP to implement Functions of String</title>
</head>

<body>
    <?php
    // Define a sample string
    $string = "Hello, world!";

    // strlen()
    $length = strlen($string);
    echo "String Length: $length<br>";

    // strtoupper()
    $uppercase = strtoupper($string);
    echo "Uppercase String: $uppercase<br>";

    // strtolower()
    $lowercase = strtolower($string);
    echo "Lowercase String: $lowercase<br>";

    // substr()
    $substring = substr($string, 7); // Starting from index 7 to the end
    echo "Substring: $substring<br>";

    // str_replace
    $replaced = str_replace("world", "everyone", $string);
    echo "Replaced String: $replaced<br>";

    // strpos()
    $position = strpos($string, "world");
    echo "Position of 'world': $position<br>";

    // trim()
    $whitespaceString = "   Trim Test   ";
    $trimmed = trim($whitespaceString);
    echo "Trimmed String: $trimmed<br>";

    // str_word_count()
    $wordCount = str_word_count($string);
    echo "Word Count: $wordCount<br>";
    ?>

</body>

</html>