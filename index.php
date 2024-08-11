<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        function fac($a){
            $n = 1;
            for($m = 1; $m <= $a; $m++) {
                $n *= $m;
            }
            return $n;
        }
        $a = 23;
        echo fac($a);
    ?>    
</body>
</html>