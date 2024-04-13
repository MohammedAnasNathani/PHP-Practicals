<html>

<head>
    <title>WAP to set cookies & read it</title>
</head>

<body>
    <?php
    // Set a cookie with name "user" and value "John Doe"
    setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
    
    // Check if the cookie is set
    if (isset($_COOKIE["user"])) {
        echo "Cookie 'user' is set!<br>";
        echo "Value is: " . $_COOKIE["user"];
    } else {
        echo "Cookie 'user' is not set!";
    }
    ?>
</body>

</html>