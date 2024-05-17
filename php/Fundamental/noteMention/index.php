<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css"
</head>

<body>

    <h1>Note Mention</h1>


    <form method="post">

        <label for="note">Entrez votre note entre 0 et 20: </label>
        <input type="number" name="note" id="note" min="0" max="20" required>
    </form>

    <?php

    if (isset($_POST['note'])) {
        $note = $_POST['note'];

        if ($note >= 16) {
            echo 'Votre note: ' . $note . 'vous donne la mention A';
        } elseif ($note >= 14 && $note < 16){
            echo 'Votre note: ' . $note . 'vous donne la mention B';
        } elseif ($note >= 12 && $note < 14) {
            echo 'Votre note: ' . $note . 'vous donne la mention C';
        } elseif ($note >= 10 && $note < 12) {
            echo 'Votre note: ' . $note . 'vous donne la mention D';
        } elseif ($note < 10) {
            echo 'Votre note: ' . $note . 'vous donne la mention E';
        } else {
            echo 'veuillez entrer une note entre 0 et 20.';
        };
    }



    ?>

</body>

</html>