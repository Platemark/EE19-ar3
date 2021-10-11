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
        <form action="./backend.php" method="post">
            <div class="mb-3">
                <label for="texten" class="form-label">Mata in en text</label>
                <textarea class="form-control" name="texten" id="texten" cols="30" rows="10"></textarea>
            </div>
            <div class="kol2">
                <p>Versaler eller Gemena</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="Stora" checked name="riktning" value="Stora">
                    <label class="form-check-label" for="Stora">Till stora bokstäver</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="Små" name="riktning" value="Små">
                    <label class="form-check-label" for="Små">Till små bokstäver</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Omvandla</button>
        </form>
    </div>
    <script src="./switch.js"></script>
</body>
</html>