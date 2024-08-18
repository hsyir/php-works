<!DOCTYPE html>
<html lang="en" style="background-color:lightblue;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=$_GET["name"];
        $b=$_GET["password"];
        if($a=="Mahziyar" and $b=="Maziking123"){
            echo "Hello $a";
        }else{
            echo "Credentials Incorrect";
        }
    ?>    
</body>
</html>