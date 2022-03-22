<?php
// Slå på felrapportering
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Uppgifter för databasen, användare, lösenord...
$användare = "bloggen_db";
$lösenord = "3x!Rdx4AepfQ0482";
$databas = "bloggen_db";
$host = "localhost";

// Logga in
$conn = new mysqli($host, $användare, $lösenord, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die("Någonting blev fel!" . $conn->connect_error);
} else {
    //echo "<p>Hurra! Det gick bra att ansluta till databasen!</p>";
};

?>