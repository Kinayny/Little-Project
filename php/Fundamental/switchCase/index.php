<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="input" placeholder="Entrer une couleur">
        <button type="submit">Envoyer</button>
    </form>

    <?php

if (isset($_POST["input"])) {
    $input = $_POST["input"];
    
    switch ($input) {
        case 'bleu':
            echo 'La couleur est bleu';
            break;
        case 'vert':
            echo 'La couleur est vert';
            break;
        case 'rouge':
            echo 'La couleur est rouge';
            break;
        case '':
            echo 'Vous devez entrer une couleur';
            break;
        default:
            echo 'Nous n\'avons pas cette couleur';
    }
}
?>
</body>
</html>

