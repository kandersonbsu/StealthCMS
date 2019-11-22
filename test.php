<html>
<head>
    <title>
        Call Center Management Simulator
    </title>
</head>
<body>
<?php
    $name = $_POST["UserName"];
    echo "Hello, ".$name;

    $people = array("Mike", "Mikey", "Butt");
    foreach($people as $person)
    {
        echo $person." ";
    }
?>
</body>

</html>