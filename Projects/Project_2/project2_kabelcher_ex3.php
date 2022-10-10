<?php
    $r = 1;
    $c = 1;
    $inner = 1;
    $outer = 1;
    $table = "<table border = 1>";

    
    while ($outer <= 15) {
        $table .= "<tr>";
        while ($inner <= 5) {
            $table .= "<td>Row ($r), Cell ($c)</td>";
            $c ++;
            $inner ++;
        }
        $r ++;
        $table .= "</tr>";
        $outer ++;
    }
    $table = "</table>";
       
?>
<!DOCTYPE html>
<html>
    <head>Table for Exercise 3</head>
    <body>
        <?php echo $table; ?>
    </body>
</html>