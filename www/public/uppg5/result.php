<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $points = 0;
     $ansOne = $_POST['qOne'];
     $ansTwo = $_POST['qTwo'];
     $ansThree = $_POST['qThree'];
     $ansFour = $_POST['qFour'];
 
    if($ansOne == 'As')
        $points++;
    if($ansTwo == '15')
        $points++;
    if($ansThree == '10')
        $points++;
    if($ansFour == 'unm')
        $points++;

     echo '<strong>Du fick '.$points.' av 4 möjliga</strong>';
 ?>

</body>
</html>