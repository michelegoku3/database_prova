<?php
$servername = "localhost";
$username = "migo3";
$password = "";
$dbname = "my_migo3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$materia = $_GET['materia'];

$sql = "SELECT nome, cognome, $materia FROM TRACK_Studente";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = array();

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    echo json_encode($rows);
} else {
    echo "Nessun risultato";
}

$conn->close();
?>
