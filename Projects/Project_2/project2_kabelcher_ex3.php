<?php
    $rows = 1;
    $columns = 1;
    $table;

    
    while ($rows = 1, $rows <= 15, $rows ++) {
        $table = <tr>;
        while ($columns = 1, $columns <= 5, $columns ++) {
            $table .= “<td>Row ($i), Cell ($j)</td>”;
        }
    }
       
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body><?php echo $table; ?></body>
</html>