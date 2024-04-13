<html>

<head>
    <title>WAP to implement Serialization</title>
</head>

<body>
    <?php
    // Defining an array
    $data = array(
        'name' => 'Anas',
        'age' => 18,
        'city' => 'Downtown Dubai'
    );

    // Serialize the array
    $serializedData = serialize($data);

    // Display serialized data
    echo "Serialized Data:<br>";
    echo $serializedData . "<br>";

    // Unserialize the data
    $unserializedData = unserialize($serializedData);

    // Display deserialized data
    echo "Deserialized Data:<br>";
    print_r($unserializedData);
    ?>
</body>

</html>