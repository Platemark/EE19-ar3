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
        <h1 class="display-4">Madlibs</h1>
        <?php
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $enman = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
        $bostad = filter_input(INPUT_POST, "bostad", FILTER_SANITIZE_STRING);
        $langd = filter_input(INPUT_POST, "langd", FILTER_SANITIZE_STRING);
        $skor = filter_input(INPUT_POST, "skor", FILTER_SANITIZE_STRING);

        echo "Den gamle mannen, vars namn var $namn $enamn. Har bor just nu i $bostad med sina barn. Han är $längd lång och har stora fötter. Hans skostorlek är $skor."
        ?>
    </div>
</body>
</html>