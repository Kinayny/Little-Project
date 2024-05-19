
<?php 
    require_once("cnx.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <h1>Liste de clients</h1>

    <table>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            <tr>
                <td>Veigar</td>
                <td>Uchiha</td>
                <td>uchi.ll@msn.com</td>
            </tr>
            <tr>
                <td>Naruto</td>
                <td>Uzumaki</td>
                <td>Naruto.nnll@msn.com</td>
            </tr>
        </tbody>
    </table>

    <a href="create.php">Ajouter un nouveau client</a>
    
</body>
</html>