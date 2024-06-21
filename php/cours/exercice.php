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
        for ($i=1; $i <= 7 ; $i++) { 
        echo "<h$i>Ceci est un titre h$i<h$i/>";
    }

        function afficher_nombres(...$nombres){
            foreach ($nombres as $choix_nombre) {
                echo $choix_nombre;
                echo '<br>';
            }
        }

        $valeurs = afficher_nombres(1,2,3,4,5,6,7,8,9,10);
    

        
    //     <h1 style="text-align: center;">hello</h1>
    //     <br>
    //     <br>
    //     <br>
    //     ?>
    
    // //    <form action="traitementForm.php" method="post" style="display:flex; justify-content: center;">
    // //     <fieldset style="width: 300px; text-align: center;justify-content:center;" >
    // //         <legend>
    // //             <b>Traitement du formulaire</b>
    // //         </legend>
    // //         <p>
    // //             <label for="nom">Nom:</label>
    // //             <input id="nom" type="text" name="nom" placeholder="Entrez votre nom">
    // //         </p>
    // //         <label for="email">E-mail</label>
    // //         <input id="email" type="email" name="email">
    // //         <p>
    // //             <label for="profession:">Profession</label>
    // //             <select id="profession" name="profession">
    // //                 <option value="Enseignant">Enseignant</option>
    // //                 <option value="dev">dev</option>
    // //                 <option value="policier">policer</option>
    // //             </select>
    // //         </p>
    // //         <p>
    // //             <input type="submit" style="border-radius: 40px; padding: 6px;background:none;cursor:pointer;">
    // //             <input type="reset" style="border-radius: 40px; padding: 6px;background:none;cursor:pointer;">
    // //         </p>
    // //             </fieldset>
    // //    </form>
    <!-- // //     ?> -->
    <?php

    class Car{
        public $mark;
        public $model;
        public $year;
        public $price;

        public function __construct($mark, $model, $year, $price){
            $this->mark = $mark;
            $this->model = $model;
            $this->year = $year;
            $this->price = $price;
        }
        /**
   =                            Getter
         */
        public function getMark(){
            return $this->mark;
        }
        public function getModel(){
            return $this->model;
        }
        public function getYear(){
            return $this->year;
        }
        public function getPrice(){
            return $this->price;
        }

        //        SETTER

        public function setMark($mark){
            $this->mark = $mark;
        }
        public function setModel($model){
            $this->model = $model;
        }
        public function setYear($year){
            $this->year = $year;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function display(){
            echo "Mark: ".$this->getMark()."<br>";
            echo "Model: ".$this->getModel()."<br>";
            echo "Year: ".$this->getYear()."<br>";
            echo "Price: ".$this->getPrice()."<br>";
        }
    }
    $ferrari = new Car("ferrari","sport",90,200);

    $ferrari->display();

?>

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




    if (isset($_POST['envoyer'])) {

if(empty($_POST['nom'])){
    echo "veuillez saisir votre nom!";
}elseif(empty($_POST["email"]) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "veuillez saisir votre e-mail!";
}elseif(empty($_POST['profession'])){
    echo "Veuillez selectionner une professions !";
}else{

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    echo "le nom est :$nom et sa profession est : $profession sont email est : $email";
}
}else{
echo "Veuillez valider votre formulaire.";
}


if (isset($_POST['envoyer'])) {

if(empty($_POST['nom'])){
    echo "veuillez saisir votre nom!";
}elseif(empty($_POST["email"]) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "veuillez saisir votre e-mail!";
}elseif(empty($_POST['profession'])){
    echo "Veuillez selectionner une professions !";
}else{

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    echo "le nom est :$nom et sa profession est : $profession sont email est : $email";
}
}else{
echo "Veuillez valider votre formulaire.";
}


<?php

    if (isset($_POST['envoyer'])) {

        if(empty($_POST['nom'])){
            echo "veuillez saisir votre nom!";
        }elseif(empty($_POST["email"]) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo "veuillez saisir votre e-mail!";
        }elseif(empty($_POST['profession'])){
            echo "Veuillez selectionner une professions !";
        }else{

            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $profession = $_POST['profession'];
            echo "le nom est :$nom et sa profession est : $profession sont email est : $email";
        }
    }else{
        echo "Veuillez valider votre formulaire.";
    }

//     <form action="index.php" method="post" enctype="multipart/form-data" style="display:flex; justify-content: center;">
//     <fieldset style="width: 300px; text-align: center;justify-content:center;" >
//         <legend>
//             <b>Transfert de fichier</b>
//         </legend>
//         <p>
//             <input type="hidden" name="MAX_FILE_SIZE" value="1">
//             <label for="fichier">Transfert de fichier:</label>
//             <input id="fichier" type="file" name="fichier">
//         </p>
        
//         <p>
//             <input type="submit" name="fichier_transmis" style="border-radius: 40px; padding: 6px;background:none;cursor:pointer;">
//             <input type="reset" style="border-radius: 40px; padding: 6px;background:none;cursor:pointer;">
//         </p>
//             </fieldset>
//    </form>

    
    if(isset($_POST['fichier_transmis'])){

        $path = 'C:\Users\yacin\Documents\Projects\test\downloadExer\ ';
        move_uploaded_file($_FILES["fichier"] ['tmp_name'], $path.$_FILES['fichier'] ['name']);
    }


    // require "Utilisateurs.php";
    
    // $membre1 = new Utilisateurs();
    class Utilisateurs {
        public $nom;
        public $prenom;
        public $age;
        public $email;
    
        public function seConnecter(){
            echo "Je suis inscrit sur votre site web, je peux donc me connecter";
        }
    
        public function seDeconnecter(){
            echo "je me deconnecte";
        }
    }
  


class Utilisateyurs {
    private string $nom;
    private string $prenom;
    private int $age;
    private string $email;

    private function seConnecter(){
        echo "Je suis inscrit sur votre site web, je peux donc me connecter";
    }

    public function seDeconnecter(){
        echo "je me deconnecte";
    }

    public function initialiserNom($nom){
        $this->nom = $nom;
    }

    public function recupererNom(){
        echo "Nom: ".$this->nom;
    }

    public function initialiser($nom, $prenom, $age, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->email = $email;

    }
    public function toutrecuperer(){
       return "$this->nom, $this->prenom, $this->age, $this->email";
    }
}
    // $utilisateurs1 = new Utilisateurs();
    // $utilisateurs1->nom='Ekxecut';
    // $utilisateurs1->prenom="Kinai";
    
    // echo "le prenom de l'utilisateur 1 est: ".$utilisateurs1->nom;
    // echo "<br> <br>";
    // echo "le nom de l'utilisateur 1 est: ".$utilisateurs1->prenom;
    

    $membre1->prenom = "yass";
    $membre1->nom = "kinai";
    
    echo "le prenom de l'utilisateur 1 est: ".$membre1->nom;
    echo "<br> <br>";
    echo "le nom de l'utilisateur 1 est: ".$membre1->prenom;
    
    ?>
</body>
</html>
    
</body>
</html>