<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        
<?php

  $isEasy = true;
  if ( $isEasy == true ) {
    echo 'c\'est facile!!';
  } else {
    echo 'c\'est difficile!!';
  }

 ?>
        
        <p><br /></p>
        
 <?php

 $isEasy = true;
 switch ($isEasy) {
   case true:
    echo 'c\'est facile!!';
     break;

   default:
       echo 'c\'est difficile!!';
     break;
 }

  ?>
        
        <p><br /></p>
        
   <?php
   $isEasy = false;
   echo ($isEasy == true) ? 'c\'est facile!!' : 'c\'est difficile!!';
      ?>
        
        
    </body>
</html>
