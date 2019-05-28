<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>

        <?php
        $isEasy = true; // création d'une variable qui prends le booléen TRUE
        if ($isEasy == true) { // si la variable est strictement égal à True
            echo 'c\'est facile!!'; // alors c'est facile
        } else { // sinon 
            echo 'c\'est difficile!!'; // c'est difficile
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
        $isEasy = false; // je créer une variable qui vaut FALSE
        echo ($isEasy == true) ? 'c\'est facile!!' : 'c\'est difficile!!'; // je créer une ternaire, si la variable est strictement égale à TRUE alors c'est facile, sinon c'est difficile
        ?>

        <p><a href="http://phpexercice/partie2/exo1/">Partie 2 exerice 1</a></p>
        <p><a href="http://phpexercice/partie2/exo2/">Partie 2 exerice 2</a></p>
        <p><a href="http://phpexercice/partie2/exo3/">Partie 2 exerice 3</a></p>
        <p><a href="http://phpexercice/partie2/exo4/">Partie 2 exerice 4</a></p>
        <p><a href="http://phpexercice/partie2/exo5/">Partie 2 exerice 5</a></p>
        <p><a href="http://phpexercice/partie2/exo6/">Partie 2 exerice 6</a></p>
        <p><a href="http://phpexercice/partie2/exo7/">Partie 2 exerice 7</a></p>
        <p><a href="http://phpexercice/partie2/exo8/">Partie 2 exerice 8</a></p>


    </body>
</html>
