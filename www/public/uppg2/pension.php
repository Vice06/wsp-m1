<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $age = $_POST['age'];
    $name = $_POST['namn'];

    $age = 65 - $age;
    
    echo "<p>$name har $age år till pension</p>";
?>

</body>
</html>