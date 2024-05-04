<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>

<body>


<form action="registration.php" method="POST">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name">
    <br>
    <br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email">
    <br>
    <br>
    <input type="submit" value="send">
</form>




    <?php
    $name = 'Ekko';
    $firstname = 'Xin';
    $note1 = 10;
    $note2 = 20;
    $moyenne = (($note1 + $note2) / 2);

    echo "<br> <br> <br> <br>Bonjour " . $name . ' ' . $firstname . " vous avez eu " . (($note1 + $note2) / 2);

    echo "<br> Bonjour $name $firstname, vous avez eu $moyenne de moyenne. <br> <br>";

    // $message = "Bonjour, {$name}! Tu as {$note2} de moyenne.";
    $message = "Bonjour, $name! Tu as $note2 de moyennesss.<br> <br> <br> <br>";

    echo $message;


    ?>





</body>

</html>