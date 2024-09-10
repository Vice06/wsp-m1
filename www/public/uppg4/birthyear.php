<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $birthYear = $_POST['birthYear'];

    $age = 2024 - $birthYear;
    
    echo "<p>$name är $age år gammal</p>";
    
    ?>
</body>
</html>