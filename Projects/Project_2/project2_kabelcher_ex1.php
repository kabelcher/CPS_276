<?php

$list = 1;
$sublist = 1;

function List(){
  for ($list=1; $list<=4; $list++){
    echo "$list<br>";
   }
}

function Sublist(){
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
      <li><?php echo List(); ?>
          <ul>
            <li><?php echo Sublist(); ?></li>
          </ul>
      </li>
    
    </ul>
</body>
</html>
