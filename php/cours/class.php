<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class Ville
{
    public string $nom;
    public int $departement;
    public string $region;
    public int $population;


    public function info_ville()
    {

        echo "la ville " . $this->nom . " est dans le departement " . $this->departement . " de la region " . $this->region . " 
        avec une population de " . $this->population . "<br>";
    }

}

$ville1 = new Ville();
$ville1->nom = "Villeneuve le roi";
$ville1->departement = 94;
$ville1->region = "Ile de france";
$ville1->population = 94000;

$ville1->info_ville();
?>
</body>
</html>