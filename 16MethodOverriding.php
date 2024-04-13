<html>

<head>
    <title>WAP to implement Method Overriding</title>
</head>

<body>
    <?php
    class ParentClass
    {

        function display()
        {
            echo "Parent Class";
        }
    }

    class ChildClass extends ParentClass
    {

        function display()
        {
            echo "<br>Child Class";
        }
    }

    $p = new ParentClass;
    $c = new ChildClass;

    $p->display();
    $c->display();
    ?>
</body>

</html>