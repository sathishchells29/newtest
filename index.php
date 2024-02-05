<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
    <label>firstname</label>    
    <input type="text" name="firstname">
    <label>lastname</label>    
    <input type="text" name="lastname">
    <input type="submit" name="submit" value="log in">
    </form>
</body>
</html>
<?php 
foreach($_SERVER as $key => $val)
{
    echo "{$key}={$val}<br>";
}
?>