<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Quiz</h1>
<form action="result.php" method="post">
    <label>Var ligger Kina?<br>    
        <input type="radio" name="qOne" value="Eu">Europa<br>
        <input type="radio" name="qOne" value="As">Asien<br>
        <input type="radio" name="qOne" value="Na">Nordamerika<br><br>
    </label>
    <label>Hur gammal är Eric Klener<br>  
        <input type="radio" name="qTwo" value="16">16<br>
        <input type="radio" name="qTwo" value="15">15<br>
        <input type="radio" name="qTwo" value="17">17<br><br>
    </label>
    <label>Hur snygg är Ture? (1-10)<br>  
        <input type="radio" name="qThree" value="10">10<br>
        <input type="radio" name="qThree" value="2">2<br>
        <input type="radio" name="qThre" value="8">8<br><br>
    </label>
    <label>Hur stor är Emil Skoglunds panna?<br>  
        <input type="radio" name="qFour" value="landning">3 landningsbanor<br>
        <input type="radio" name="qFour" value="finger">4 fingrar<br>
        <input type="radio" name="qFour" value="unm">Omåttlig<br><br>
    </label>
    <input type="submit" value="Skicka" />
</form>
</body>
</html>