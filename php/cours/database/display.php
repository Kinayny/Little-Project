<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data recovery</title>
</head>
<body>
    <?php
    //objet pdo pour une connexion a la base de donnée
    $bddPDO = new PDO('mysql:host=localhost;dbname=webtoup','root','root',);
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $request = "SELECT * FROM clients ORDER BY id_client ASC ";
    $result = $bddPDO->query($request);

    if (!$result){
        echo "La recuperation des donées a échoué!";
    }else{
        $nbre_clients = $result->rowCount();
    ?>
    <h3>Tous nos clients</h3>
    <h4>Il y a <?=$nbre_clients?> clients</h4>
    <table border="1">
    <tr>
        <th>Numéro de client</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Adresse</th>
        <th>ville</th>
        <th>E-Mail</th>
    </tr>
        <?php
        while($ligne =$result->fetch(PDO::FETCH_NUM)){
            echo "<tr>";
            foreach ($ligne as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
    <?php
        $result->closeCursor();
    }
    ?>


</body>
</html>