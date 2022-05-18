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
                <a class="nav-link active" aria-current="page" href="lista.php">Kundvagn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Lägg till</a>
            </li>
        </ul>
        <h3>Spara i Kundvagn</h3>
        <?php
        $varor = file_get_contents("kundvagn.txt");

        echo "<pre>$varor</pre>";
        ?>
    </div>

</body>
</html>