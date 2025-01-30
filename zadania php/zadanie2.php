<?php
$host = 'localhost';     
$username = 'root';      
$pass = '';          
$dbname = 'uczniowie 2c';  


$conn = new mysqli($host, $username, $pass, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "SELECT id, imie, nazwisko, wiek, ocena_roczna FROM uczniowie_2c";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<div style='border: 2px dotted red; margin: 10px; padding: 10px;'>";
        echo "<strong>ID:</strong> " . $row['id'] . "<br>";
        echo "<strong>Imię:</strong> " . $row['imie'] . "<br>";
        echo "<strong>Nazwisko:</strong> " . $row['nazwisko'] . "<br>";
        echo "<strong>Wiek:</strong> " . $row['wiek'] . "<br>";
        echo "<strong>ocena_roczna:</strong> " . $row['ocena_roczna'] . "<br>";
        echo "</div>";
    }
} else {
    echo "Brak wyników."
}
$conn->close();
?>