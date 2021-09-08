<?php require_once "classes/Author.php";require_once "classes/Book.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP04-01</title>
</head>
<body>
     <?php
         $client[0] = new Client("Kuba", "barokár", "06.04.2004");
         $client[1] = new Client("Michal" , "Nepracuje", "12.03.2004");
         $client[2] = new Client("Karlos" , "Démon", "06.06.2003");
         $client[3] = new Client("Štěpán" , "Faleš", "09.01.2005");
         $client[4] = new Client("Šimon" , "Good", "24.11.2004");

         $category[0] = new Category("Počítače" , "computers stuff",);
         $category[1] = new Category("Auto-moto" , "motobike",);
         $category[2] = new Category("E-shop" , "you can buy things",);

         $website[0] = new Website("www.smartman.com", "24.07.2021", "very nice", $category[0], $client[0]);
         $website[1] = new Website("www.noworkbike.com", "25.10.2020", "not working", $category[1], $client[1]);
         $website[2] = new Website("www.demonshop.com", "19.09.2019", "666", $category[2], $client[2]);
         $website[3] = new Website("www.fales.com", "01.03.2017", "falešnej", $category[3], $client[3]);
         $website[4] = new Website("www.oopepe", "06.02.2021", "pepepe", $category[4], $client[4]);
     ?>

<h1>Výpis</h1>
</body>
</html>