<!-- On inclus notre fichier avec la méthode require et require_once pour l'appeler une seul fois -->
<?php
require_once('cnx.php');



$sql = "SELECT Nom_client, Prenom_client, Mail_client, Id_client FROM magasin ORDER BY Id_client DESC";
$rs_select = $cnx ->prepare($sql);
$rs_select->execute();




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style.css">
    <title>PHP & SQL</title>
</head>
<body>

<h1>Liste des clients</h1>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Actions</th>
</tr>
    </thead>
    <tbody>
<?php 
while( $donnees = $rs_select-> fetch(PDO::FETCH_ASSOC)){
?>
        <tr>
            <td><?= $donnees['Nom_client'] ?></td>
            <td><?= $donnees['Prenom_client'] ?></td>
            <td><?= $donnees['Mail_client'] ?></td>
           <td><a href="modify.php?id=<?php echo $donnees['Id_client']; ?>">Modifier le client</a>
           <a href="delete.php?id=<?php echo $donnees['Id_client']; ?>">Supprimer client</a>
</td> 
        </tr>
<?php } ?>

    </tbody>
</table>

<a href="create.php">Créer un nouveau client</a>

</body>
</html>


