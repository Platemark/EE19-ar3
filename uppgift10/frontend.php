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
        <h3>Hur varmt är det?</h3>
        <form action="./backend.php" method="post">
            <div class="mb-3">
                <label for="temp" class="form-label">Ange temperatur</label>
                <input type="text" class="form-control" id="temp" name="temp">
            </div>
            <div class="kol2">
                <p>Ange riktning</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cf" checked name="riktning" value="cf">
                    <label class="form-check-label" for="cf">C&deg; till F&deg;</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="fc" name="riktning" value="fc">
                    <label class="form-check-label" for="fc">F&deg; till C&deg;</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="./switch.js"></script>
</body>
</html>