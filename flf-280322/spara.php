<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biltema Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="lista.php">Kundvagn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Lägg till</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="spara.php">Spara</a>
            </li>
        </ul>
        <h3>Spara i Kundvagn</h3>
        <?php
        // Ta emot data från formuläret

        $namn = filter_input(INPUT_POST, "namn");
        $pris = filter_input(INPUT_POST, "pris");
        $artnr = filter_input(INPUT_POST, "artnr");

        // Kolla att det funkar
        //var_dump($namn, $pris, $artnr);

        // Klockslag
        $klockslag = date('m.d.y H:i:s ');


        // Spara ned i en textfil som heter kundvagn.txt
        
        file_put_contents("kundvagn.txt", "$klockslag\t$namn\t$pris\t$artnr\n", FILE_APPEND);

        // Meddela användaren att vi lyckats spara i kundvagn
        
        echo "<p class=\"alert alert-success\">Sparat i kundvagnen: <strong>$namn</strong> med pris <strong>$pris:-</strong> och artikelnr <strong>$artnr</strong></p>";

        ?>
    </div>

</body>
</html>