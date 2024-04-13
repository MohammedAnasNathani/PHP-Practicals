<html>

<head>
    <title>WAP to implement Decision Making Statements</title>
</head>

<body>
    <?php
    $grade = 95;
    if ($grade >= 90) {
        echo "Excellent! Grade A.";
    } else if ($grade >= 80) {
        echo "Great job! Grade B.";
    } else if ($grade >= 70) {
        echo "Good work! Grade C.";
    } else {
        echo "You need to study more.";
    }
    echo "<br>";

    $day = "Sunday";
    switch ($day) {
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday.";
            break;
        case "Wednesday":
            echo "Today is Wednesday.";
            break;
        case "Thursday":
            echo "Today is Thursday.";
            break;
        case "Friday":
            echo "Today is Friday.";
            break;
        case "Saturday":
            echo "Today is Saturday.";
            break;
        case "Sunday":
            echo "Today is Sunday.";
            break;
        default:
            echo "Invalid day.";
    }
    ?>
</body>

</html>