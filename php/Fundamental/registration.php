<?php 

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if(isset($_POST['nom']) && ($_POST['prenom'])){

        echo 'Bonjour '.$nom . ' ' .$prenom;
    };