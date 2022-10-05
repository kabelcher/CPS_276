<?php

$list = 5;
$i = 1;
$sublist = 5;
$j = 1;
$buildList = "<ul>";

  while ($i <= $list){
    $buildList .= "<li>";
    echo "$i<br>";
    while ($j <= $sublist){
      $buildList .= "<li>";
      echo "$sublist<br>";
      $buildList .= "</li>";
      $sublist ++;
    }
    $buildList .= "</li>";
    $list ++;
  }
  
$buildlist = "</ul>";
  
    

?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
   <?php echo "$buildList<br>"; ?>
</ul>
        

</body>
</html>
