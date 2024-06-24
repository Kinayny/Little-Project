<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../tailwind_Setup/dist/output.css">
    <title>Enregistrement des données</title>
</head>
<body>

    <?php

    $bddPDO = new PDO('mysql:host=localhost;dbname=webtoup','root',"root");

    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['sign-up'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $email = $_POST['email'];

        if (!empty($nom) && !empty($prenom) && !empty($age) && !empty($adresse) && !empty($ville) && !empty($email)) {

            $request = $bddPDO->prepare('INSERT INTO clients(nom, prenom, age, adresse, ville, email) VALUES (:nom, :prenom, :age, :adresse, :ville, :email)');
            $request->bindvalue(':nom', $nom);
            $request->bindvalue(':prenom', $prenom);
            $request->bindValue(':age', $age);
            $request->bindValue(':adresse', $adresse);
            $request->bindValue(':ville', $ville);
            $request->bindValue(':email', $email);

            $result = $request->execute();

            if ($result) {
                echo "<script type=\"text/javascript\">alert('Vous êtes bien enregistré. Votre identifiant est: " . $bddPDO->lastInsertId() . "');</script>";
            } else {
                echo "<p class='error-message'>Un problème est survenu, l'enregistrement n'a pas été effectué.</p>";
            }
        } else {
            echo "<p class='error-message'>Tous les champs sont requis.</p>";
        }
    }

    ?>
    <div class="flex w-1/2 bg-blue-300">
        <form action="insertion.php" method="post" class="justify-center bg-blue-3">
            <fieldset>
                <legend class="text-xl mb-4"><b>Vos coordonnées</b></legend>
                <div class="mb-4">
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom:</label>
                    <input type="text" id="nom" name="nom" maxlength="50" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prenom:</label>
                    <input type="text" id="prenom" name="prenom" maxlength="50" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="age" class="block text-sm font-medium text-gray-700">Age:</label>
                    <input type="number" id="age" name="age" maxlength="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse:</label>
                    <input type="text" id="adresse" name="adresse" maxlength="50" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="ville" class="block text-sm font-medium text-gray-700">Ville:</label>
                    <input type="text" id="ville" name="ville" maxlength="50" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail:</label>
                    <input type="email" id="email" name="email" maxlength="50" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="flex items-center justify-between">
                    <input type="reset" name="delete" value="Delete" class="bg-red-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-red-600">
                    <input type="submit" name="sign-up" value="Sign up" class="bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-600">
                </div>
            </fieldset>
        </form>
    </div>



</body>
</html>