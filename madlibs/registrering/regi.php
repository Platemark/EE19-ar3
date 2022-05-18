<?php
include "konfigdb.php";
session_start();

if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($_SESSION['inloggad'] == true) {
        echo "<p class\"alert alert-success\">Du är inloggad</p>";
    } else {
        echo "<p class\"alert alert-warning\">Du är utloggad</p>";
    }
    ?>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav nav-tabs">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Registrera</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logga ut</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <main>
            <form action="regi.php" method="POST">
                <div class="row mb-3">
                    <label for="inputNamn" class="col-sm-2 col-form-label">Namn</label>
                    <div class="col-sm-10">
                        <input name="namn" type="text" class="form-control" id="inputNamn">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputLösen" class="col-sm-2 col-form-label">Lösenord</label>
                    <div class="col-sm-10">
                        <input name="lösen" type="password" class="form-control" id="inputLösen">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Registrera</button>
            </form>

            <?php

            // Ta emot data från formuläret
            $namn = filter_input(INPUT_POST, "namn");
            $email = filter_input(INPUT_POST, "email");
            $lösen = filter_input(INPUT_POST, "lösen");

            // Testa att det fungerar
            //var_dump($namn, $email, $lösen);

            // Kolla så att det INTE är "null"
            if ($namn && $email && $lösen) {


                // Kolla at användarnamnet eller email inte redan använts
                $sql = "SELECT * FROM register WHERE namn='$namn' OR epost='$email'";

                // 2. Kör SQL kommandot
                $resultat = $conn->query($sql);

                if ($resultat->num_rows > 0) {
                    echo "<p class=\"alert alert-warning\">Användaren eller email används redan. Vg försök igen!</p>";
                } else {
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
                }
            }

            ?>
        </main>
    </div>
</body>

</html>