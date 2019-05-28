<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>

    <body>

        <?php
        $age = 26; // je créer une variable age
        $gender = 'homme'; // je créer une variable genre

        if ($age >= 18 AND $gender == 'homme') { // si l'age est supérieur ou égale à 18 et que le genre est strictement égale à homme 
            echo 'Vous êtes un homme et vous êtes majeur'; // alors vous êtes un homme et majeur
        } elseif ($age < 18 AND $gender == 'homme') { // sinon si l'age est inférieur à 18 et le genre strictement égale à homme
            echo 'Vous êtes un homme et vous êtes mineur'; // alors vous etes un homme et mineur
        } elseif ($age >= 18 AND $gender != 'homme') { // sinon si l'age est supérieur ou égale à 18 que le genre est différent de homme
            echo 'Vous êtes une femme et vous êtes majeur'; // alors vous êtes une femme et majeur
        } elseif ($age < 18 AND $gender != 'homme') { // sinon si l'age est inférieurà que le genre est différent de homme
            echo 'Vous êtes une femme et vous êtes mineur'; // alors vous êtes une femme et mineure
        }
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
