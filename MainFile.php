<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="vote.php" method="get" target='_blank'>
<input type="Hidden" name="id" value="1">
<p><b>Ваш любимый язык программирования:</b></p>
<input type="Radio" name="vote" value="1" checked>C++<br>
<input type="Radio" name="vote" value="2">PHP<br>
<input type="Radio" name="vote" value="3">Java<br>
<input type="Radio" name="vote" value="4">C#<br>
<input type="Radio" name="vote" value="5">Python<br>
<input type="Submit" value=" Голосовать" style="margin-top:10px;">
</form>

<p><a href='vote.php?id=1' target='_blank'><button>Результаты</button></a></p>

</body>
</html>