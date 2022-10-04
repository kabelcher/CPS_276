<?php
    $rows = 1;
    $columns = 1;

    function buildTable(){
        for ($rows = 1, $rows <= 15, $rows ++) {
         return "Row $rows";
        }
        for ($columns = 1, $columns <= 5, $columns ++) {
            return "Cell $columns";
           }
    }
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
            <td>row 1 cell 1</td>
            <td>row 1 cell 2</td>
            <td>row 1 cell 3</td>
            </tr>
            <tr>
            <td>row 2 cell 1</td>
            <td>row 2 cell 2</td>
            <td>row 2 cell 3</td>
            </tr>
    </body>
</html>