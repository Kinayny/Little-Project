<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
</head>
<body>

    <h1 style="text-align: center;">Hello</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <!-- *******  PHP ***** -->
    <?php 

    $arme1 = "Hache";
    $arme2 = "Epee";
    $degatHache = 70;
    $degatEpee = 30;

    $arme = "Haches";
        // for ($i=1; $i <= 7 ; $i++) { 
    //     echo "<h$i>Ceci est un titre h$i<h$i/>";
    // }

        // function afficher_nombres(...$nombres){
        //     foreach ($nombres as $choix_nombre) {
        //         echo $choix_nombre;
        //         echo '<br>';
        //     }
        // }

        // $valeurs = afficher_nombres(1,2,3,4,5,6,7,8,9,10);
    //     <?php 
    //     <h1 style="text-align: center;">hello</h1>
    //     <br>
    //     <br>
    //     <br>
    
    //    <form action="traitementForm.php" method="post" style="display:flex; justify-content: center;">
    //     <fieldset style="width: 300px; text-align: center;justify-content:center;" >
    //         <legend>
    //             <b>Traitement du formulaire</b>
    //         </legend>
    //         <p>
    //             <label for="nom">Nom:</label>
    //             <input id="nom" type="text" name="nom" placeholder="Entrez votre nom">
    //         </p>
    //         <label for="email">E-mail</label>
    //         <input id="email" type="email" name="email">
    //         <p>
    //             <label for="profession:">Profession</label>
    //             <select id="profession" name="profession">
    //                 <option value="Enseignant">Enseignant</option>
    //                 <option value="dev">dev</option>
    //                 <option value="policier">policer</option>
    //             </select>
    //         </p>
    //         <p>
    //             <input type="submit" style="border-radius: 40px; padding: 6px;background:none;cursor:pointer;">
    //             <input type="reset" style="border-radius: 40px; padding: 6px;background:none;cursor:pointer;">
    //         </p>
    //             </fieldset>
    //    </form>
    //     ?>
    

        function somme_nombre(...$valeurs){
            return array_sum($valeurs);
        }

        $total = somme_nombre(10,20,30,40,50);
        echo "le total est: ".$total;

        function display_names($prenom, $nom = "Mercier"){
            if($nom != "Mercier"){
                echo "Votre nom est $nom et votre prenom est $prenom";
                echo'<br>';
            }else {
                echo "Votre prenom est $prenom";
            }
        }
    
        display_names("Kinai","Mercider");

    if($arme === $arme1){
            echo "Vous avez recus un coup de Hache de: ";
        } elseif ($arme === $arme2){
            echo "vous avez recus un petit coup d'epee";
        } else {
            echo "Vous devez equippé une arme";
        }

          // $alphabet = "k";


    // $result = match ($alphabet) {
    //     1 => "a",
    //     2 => "b",
    //     3 => "c",

    //     default => throw new Exception("la lettre n'est pas bonne"),
    //     };

    //     echo $result;



                // switch
    // $dep = 302;

    // switch ($dep) {
    //     case '94':
    //         echo "val de marne";
    //         break;
    //     case '75':
    //         echo "paris";
    //         break;
    //     case '30':
    //         echo "gard";
    //         break;
    //     case '74':
    //         echo 'haute savoie';
    //         break;
        
    //     default:
    //         echo 'departement non reconnu';
    //         break;
    // }
    ?>
</body>
</html>
    
</body>
</html>