<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Inloggning</h1>
        <?php
        // Ta emot data som skickas
        $rubrik = filter_input(INPUT_POST, "rubrik", FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, "meddelande", FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);

        if ($rubrik && $meddelande && $namn) {
            $filnamn = "gastbok.txt";

            $texten = "$rubrik\n .
            $meddelande\n
            $namn";

            file_put_contents($filnamn, $texten);

            // Bekräftelse

            echo "<p class=\"alert alert-success\">Meddelandet har sparats</p>";
        } else {
            echo "<p class=\"alert alert-warning\">inget</p>";

        }

        ?>
    </div>
</body>
</html>