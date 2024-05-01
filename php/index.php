<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Hey Local</h1>

    <?php
    $age = 25; // déclaration d'une variable "age" avec la valeur "25"
    $prenom = "Jean"; // déclaration d'une variable "prenom" avec la valeur "Jean"
    $solde = 120.50; // déclaration d'une variable "solde" avec la valeur "120.50"
    $message = "Bonjour, " . $prenom . "!"; // création d'une chaîne avec la concaténation de variables
    echo $message; // affichage de la chaîne

    $name = 'Ekko';
    $firstname = 'Xin';
    $note1 = 10;
    $note2 = 20;
    $moyenne = (($note1 + $note2) / 2);

    echo "Bonjour " . $name . ' ' . $firstname . " vous avez eu " . (($note1 + $note2) / 2);

    echo "<br> Bonjour $name $firstname, vous avez eu $moyenne de moyenne.";
    ?>



</body>

</html>