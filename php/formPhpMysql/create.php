<?php

require_once("./cnx.php");
$message = "";

if(isset($_POST["ajouter"])){
    
    if((empty($_POST['Nom_client'])) || (empty($_POST['Prenom_client'])) || (empty($_POST['Mail_client']))){
        $message = '<p class="info">Veuillez remplir les champs </p>';
    } else{
        $sql="INSERT INTO `magasin`(`Nom_client`,`Prenom_client`,`Mail_client`) VALUES (?,?,?)";

        $rs_insert = $cnx -> prepare($sql);

        $var_nom = $POST['Nom_client'];
        $var_prenom = $POST['Prenom_client'];
        $var_mail = $POST['Mail_client'];

        $rs_insert->birdValue(1, $var_nom, PDO::PARAM_STR);
        $rs_insert->birdValue(1, $var_prenom, PDO::PARAM_STR);
        $rs_insert->birdValue(1, $var_mail, PDO::PARAM_STR);

        $rs_insert->execute();

        $message = '<p class="green">Success</p>';
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Creez un nouveau client</h1>

<form action="" method="POST">
    <input type="text" name="Nom_client" placeholder="Nom">
    <br><br>
    <input type="text" name="Prenom_client" placeholder="Prenom">
    <br><br>
    <input type="email" name="Mail_client" placeholder="E-mail">
    <br><br>
    <?= $message; ?>
    <br>
    <input type="submit" value="Ajouter" name="ajouter">
</form>
    <a href="index.php">Retour a l'accueil</a>
</body>
</html>