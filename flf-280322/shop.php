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
                <a class="nav-link active" href="shop.php">Lägg till</a>
            </li>
        </ul>
        <form class="form-control" action="shop.php" method="post">
            <h3>Kundvagn</h3>

            <label class="form-label">Namn på vara</label>
            <input class="form-control" type="text" name="namn">

            <label class="form-label">Pris</label>
            <input class="form-control" type="text" name="pris">

            <label class="form-label">Art. nr</label>
            <input class="form-control" type="text" name="artnr">

            <button class="btn btn-outline-success">Lägg till vara</button>
        </form>
        <?php
        // Ta emot data från formuläret

        $namn = filter_input(INPUT_POST, "namn");
        $pris = filter_input(INPUT_POST, "pris");
        $artnr = filter_input(INPUT_POST, "artnr");

        
        // Får vi data från formuläet isåfall spara ned
        if ($namn && $pris && $artnr) {
            # code...
            // Kolla att det funkar
            //var_dump($namn, $pris, $artnr);
    
            // Klockslag
            $klockslag = date('m.d.y H:i:s ');
    
    
            // Spara ned i en textfil som heter kundvagn.txt
            
            file_put_contents("kundvagn.txt", "$klockslag\t$namn\t$pris\t$artnr\n", FILE_APPEND);
    
            // Meddela användaren att vi lyckats spara i kundvagn
            
            echo "<p class=\"alert alert-success\">Sparat i kundvagnen: <strong>$namn</strong> med pris <strong>$pris:-</strong> och artikelnr <strong>$artnr</strong></p>";
        }


        ?>
    </div>

</body>
</html>