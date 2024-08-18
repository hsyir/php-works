<!DOCTYPE html>
<html lang="en" style="background-color:lightgreen;">
<head>
</head>
<body style="text-align:center;" style="font-size:500%;">
    <p>
        <?php
            function fac($a){
                $n = 1;
                for($m = 1; $m <= $a; $m++) {
                    $n *= $m;
                }
                return $n;
            }
            $a = $_GET["Factorial"];
            echo "the factorial of $a is " . fac($a);
            echo "<hr>";
        ?>
    </p>        
    <a href="index.php">Back</a>
</body>
</html>