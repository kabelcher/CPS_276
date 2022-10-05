<?php
    $rows = 1;
    $columns = 1;
    $table = "<table border = 1>";

    
    while ($rows <= 15) {
        $table .= "<tr>";
        while ($columns <= 5) {
            $table .= "<td>Row ($rows), Cell ($columns)</td>";
            $columns ++;
        }
        $rows ++;
        $table .= "</tr>";
    }
    $table = "</table>";
       
?>
<!DOCTYPE html>
<html>
    <head>Table for Exercise 3</head>
    <body>
        <?php echo "$table<br>"; ?>
    </body>
</html>