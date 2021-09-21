<?php

// Tar emot data från formuläret
$namn = $_POST["namn"];
$adress = $_POST["adress"];
$mobil = $_POST["mobil"];

// Om namnt är Olle

if ($namn == "Olle") {
    echo "<p>Hej vad trevligt att du är tillbaka</p>";
} else {
    echo "<p>Hej, du är ny här</p>";
}

?>