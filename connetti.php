<?php

$host = "cornelius.db.elephantsql.com";
$database = "zagqivcf";
$user = "zagqivcf";
$password = "sx9lkNk3ezNKm9fFsl2Koao70CJX0RR-";

// Prova a stabilire una connessione
$conn = pg_connect("host=$host dbname=$database user=$user password=$password");

if (!$conn) {
    die("Connessione fallita: " . pg_last_error());
}

echo "Connessione riuscita al database";

// Chiudi la connessione
pg_close($conn);

?>
