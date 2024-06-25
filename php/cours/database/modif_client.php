<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modification client</title>
</head>
<body>
    <?php

    if(empty($_POST['id_client'])){

        header("Location: form_modif_clients.php");
    }

    $bddPDO = new PDO('mysql:host=localhost;dbname=webtoup', 'root', 'root');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(!isset($_POST['modif'])){



    $id_client = $_POST['id_client'];
    $request = "SELECT * FROM clients WHERE id_client = '$id_client'";

    $result = $bddPDO->query($request);

    $data = $result->fetch(PDO::FETCH_ASSOC);

    ?>
    <form action="modif_client.php" method="post">

        <fieldset>
            <legend><b>Modifier vos coordonées</b></legend>
        <table style="text-align: left">
            <tr><td>Nom: <input type="text" name="nom" value="<?=$data['nom']?>"></td></tr>
            <tr><td>Prenom: <input type="text" name="prenom" value="<?=$data['prenom']?>"></td></tr>
            <tr><td>Age: <input type="text" name="age" value="<?=$data['age']?>"></td></tr>
            <tr><td>Adresse: <input type="text" name="adress" value="<?=$data['adresse']?>"></td></tr>
            <tr><td>Ville: <input type="text" name="ville" value="<?=$data['ville']?>"></td></tr>
            <tr><td>E-mail: <input type="text" name="email" value="<?=$data['email']?>"></td></tr>

            <tr><td><input type="reset" value="DELETE"></td>
                <td><input type="submit" name="modif" value="Save"></td>
            </tr>
        </table>
        </fieldset>

    </form>
    <?php

        $result->closeCursor();
    }else{
        echo'probleme';
    }

        ?>

</body>
</html>
