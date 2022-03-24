<?php
include "konfigdb.php";
session_start();
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
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="regi.php">Registrera</a>
                </li>
                <?php
                if ($_SESSION['inloggad'] == false) {                
                
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logga in</a>
                </li>
                <?php
                }
                ?>
                <?php
                if ($_SESSION['inloggad'] == true) {                
                
                ?>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Logga ut</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <main>
            <form action="login.php" method="POST">
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

                <button type="submit" class="btn btn-primary">Logga in</button>
            </form>

            <?php
            $_SESSION['inloggad'] = false;
            ?>
        </main>
    </div>
</body>

</html>