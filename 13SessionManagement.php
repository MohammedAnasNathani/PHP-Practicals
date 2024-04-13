<html>

<head>
    <title>WAP to implement Session Management</title>
</head>

<body>
    <?php
    // Start the session
    session_start();

    // Set session variables
    $_SESSION["username"] = "John";
    $_SESSION["email"] = "john@example.com";

    // Access session variables
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";

    // Modify session variable
    $_SESSION["username"] = "Jane";

    // Display modified session variable
    echo "Modified Username: " . $_SESSION["username"] . "<br>";

    // Check if the session variable is already set
    if (isset($_SESSION["visited"])) {
        echo "Welcome back! You have visited this page before.<br>";
        echo "Session ID: " . session_id();
    } else {
        echo "Welcome! This is your first visit to this page.<br>";
        echo "Session ID: " . session_id();
    }
    // Set session variable to mark the visit
    $_SESSION["visited"] = true;

    // Unset session variable
    unset($_SESSION["email"]);

    // Destroy the session
    session_destroy();
    ?>
</body>

</html>