<?php

$list = 1;
$sublist = 1;

Class list {
  for ($list=1; $list<=4; $list++){
    echo "$list<br>";
   }
}

Class sublist {
  for ($sublist=1; $sublist<=5; $sublist++){
    echo "$sublist<br>";
   }
}
 ?>  
<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <ul>
      <li><?php echo list(); ?>
          <ul>
            <li><?php echo sublist(); ?></li>
          </ul>
      </li>
    
    </ul>
</body>
</html>
