<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modification client</title>
</head>
<body>
<?php

if(empty($_POST['id_client'])){

    header("Location: form_supp_client.php");
}

$bddPDO = new PDO('mysql:host=localhost;dbname=webtoup', 'root', 'root');
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!isset($_POST['supprimer'])){



    $id_client = $_POST['id_client'];
    $request = "SELECT * FROM clients WHERE id_client = '$id_client'";

    $result = $bddPDO->query($request);

    $data = $result->fetch(PDO::FETCH_ASSOC);

    ?>
    <form action="delete_clients.php" method="post">

        <fieldset>
            <legend><b>Supprimer vos coordonées</b></legend>
            <table style="text-align: left">
                <tr><td>Nom:</td> <td><?=$data['nom']?></td></tr>
                <tr><td>Prenom:</td><td> <?=$data['prenom']?></td></tr>
                <tr><td>Age:</td><td><?=$data['age']?></td></tr>
                <tr><td>Adresse:</td><td><?=$data['adresse']?></td></tr>
                <tr><td>Ville:</td><td><?=$data['ville']?></td></tr>
                <tr><td>E-mail:<?=$data['email']?></td></tr>

                <tr><td><input type="reset" value="DELETE"></td>
                    <td><input type="submit" name="supprimer" value="Supprimer"></td>
                </tr>
            </table>
        </fieldset>
        <input type="hidden" name="id_client" value="<?=$id_client?>">
    </form>
    <?php

    $result->closeCursor();
}else {
    $id_client = $_POST['id_client'];

    $requete = "DELETE FROM clients WHERE id_client = '$id_client'";
    $result = $bddPDO->exec($requete);
    if (!$result) {
        echo "Un probleme est survenue, supression echec";
    } else {
        echo "Delete Success";
    }
}



?>

</body>
</html>
