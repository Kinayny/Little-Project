<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Majeu ou Mineur?</h1>

    <form method="POST">

        <label for="age">Entrez votre age</label>
        <input type="text" id="age" name="age">

    </form>

    <?php 

        if(isset($_POST['age'])){
            $age = $_POST['age'];


            if($age >= 18) {
                echo 'Vous etes majeur';
            } else{
                echo 'Vous etes mineur';
            };
        }

?>


</body>
</html>