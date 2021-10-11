<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperaturomvandlare</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Omvandla text</h3>
        <?php
        $texten = filter_input(INPUT_POST, 'texten', FILTER_SANITIZE_STRING);
        $riktning = filter_input(INPUT_POST, 'riktning', FILTER_SANITIZE_STRING);

        echo "<p>Texten med $riktning bokstäver blir såhär</p>";

        // Om riktning är c->f 
        if ($riktning == "Stora") {
            echo strtoupper("<p>$texten</p>");
        } else {
            echo strtolower("<p>$texten</p>");
        }

        ?>
    </div>
</body>
</html>