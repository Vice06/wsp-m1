<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nr1 = $_POST['n1'];
    $nr2 = $_POST['n2'];

    $sum = $nr1 + $nr2;

    echo "<p>Summan är $sum</p>"

    ?>
</body>
</html>