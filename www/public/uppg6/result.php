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
     $ansFive = $_POST['qFive'];
     $ansSix = $_POST['qSix'];
 
    if($ansOne == 'As')
        $points++;
    if($ansTwo == '15')
        $points++;
    if($ansThree == '10')
        $points++;
    if($ansFour == 'unm')
        $points++;
    if($ansFive == 'riskorn')
        $points++;
    if($ansSix == 'cutest')
        $points++;

    if($points < 3)
     echo '<strong>Öva mer bitch. Du fick '.$points.' av 6 möjliga</strong>';
    elseif($points < 5)
     echo '<strong>Mid. Du fick '.$points.' av 6 möjliga</strong>';
    else
     echo '<strong>Duktig vovve. Du fick '.$points.' av 6 möjliga</strong>';
 ?>

</body>
</html>