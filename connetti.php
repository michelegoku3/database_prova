<?php

$servername = "localhost";
$username = "migo3";
$password = "";
$database = "my_migo3";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

echo "Connessione riuscita al database";

// Chiudi la connessione
$conn->close();

?>
