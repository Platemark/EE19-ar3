<?php
include "konfigdb.php"
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="kontainer">

        <?php

        // Ta emot data från formuläret
        $namn = filter_input(INPUT_POST, "namn");
        $email = filter_input(INPUT_POST, "email");
        $lösen = filter_input(INPUT_POST, "lösen");

        // Testa att det fungerar
        /* var_dump($namn, $email, $lösen); */

        // Kolla så att det INTE är "null"
        if ($namn && $email && $lösen) {

            // Räkna fram ett hash på lösenordet
            $hash = password_hash($lösenord, PASSWORD_DEFAULT);

            // Lagra i databasen
            // 1. SQL kommandot
            $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$namn', '$email', '$hash')";

            // 2. Kör SQL kommandot
            $resultat = $conn->query($sql);

            // 3. Fungerar det?
            if (!$resultat) {
                die("<p class=\"alert-success\">Någonting blev fel!</p>");
            } else {
                echo "<p class=\"alert-success\">Användaren $namn är registrerad</p>";
            }
        };

        ?>
    </div>
</body>

</html>