<html>

<head>
    <title>WAP to implement Introspection</title>
</head>

<body>
    <?php

    // Parent class
    class ParentClass
    {
        public function parentMethod()
        {
            echo "Parent Method<br>";
        }
    }

    // Child class extends the parent class
    class ChildClass extends ParentClass
    {
        public function childMethod()
        {
            echo "Child Method<br>";
        }
    }

    // class_exists()
    $classExists = class_exists('ChildClass');
    echo "Class 'ChildClass' exists: " . ($classExists ? 'true' : 'false') . "<br>";

    // get_class()
    if ($classExists) {
        $className = get_class(new ChildClass());
        echo "Class Name: $className<br>";
    }

    // get_parent_class()
    if ($classExists) {
        $parentClassName = get_parent_class('ChildClass');
        echo "Parent Class Name: $parentClassName<br>";
    }

    // is_subclass_of
    if ($classExists) {
        $isSubclass = is_subclass_of('ChildClass', 'ParentClass');
        echo "ChildClass is a subclass of ParentClass: " . ($isSubclass ? 'true' : 'false') . "<br>";
    }

    // get_class_methods
    if ($classExists) {
        $classMethods = get_class_methods('ChildClass');
        echo "Class Methods:<br>";
        print_r($classMethods);
    }

    ?>
</body>

</html>