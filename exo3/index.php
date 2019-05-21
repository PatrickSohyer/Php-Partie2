<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    
    <body>
        
<?php

  $age = 26;
  $gender = 'homme';

  if ( $age >= 18 AND $gender == 'homme' ) {
    echo 'Vous êtes un homme et vous êtes majeur';
  } elseif ( $age < 18 AND $gender == 'homme' ) {
    echo 'Vous êtes un homme et vous êtes mineur';
  } elseif ( $age >= 18 AND $gender == 'femme' ) {
    echo 'Vous êtes une femme et vous êtes majeur';
  } elseif ( $age < 18 AND $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes mineur';
  }

 ?>
        
    </body>
    
</html>
