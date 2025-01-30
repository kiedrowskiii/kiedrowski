
<!DOCTYPE html>
<html lang="pl"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodaj</title>
</head>
<body>
    <h1>dodaj nowego ucznia</h1>
    <form action="skrypt.php" method="POST">
        <label for="imie">Imię:</label><br>
        <input type="text" id="imie" name="imie" required><br><br>

        <label for="nazwisko">Nazwisko:</label><br>
        <input type="text" id="nazwisko" name="nazwisko" required><br><br>

        <label for="wiek">Wiek:</label><br>
        <input type="number" id="wiek" name="wiek" min="6" max="20" required><br><br>

        <label for="ocena_roczna">ocena roczna:</label><br>
        <input type="number" step="0.01" id="ocena_roczna" name="ocena_roczna" min="1" max="6" required><br><br>

        <button type="submit">Dodaj ucznia</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $host = 'localhost';     
        $username = 'root';      
        $pass = '';          
        $dbname = 'uczniowie 2c'; 

       
        $conn = new mysqli($host, $username, $pass, $dbname);

        if ($conn->connect_error) {
            die("Błąd połączenia: " . $conn->connect_error);
        }

        $imie = $conn->real_escape_string($_POST['imie']);
        $nazwisko = $conn->real_escape_string($_POST['nazwisko']);
        $wiek = (int)$_POST['wiek'];
        $ocena_srednia = (float)$_POST['ocena_srednia'];

        $sql = "INSERT INTO uczniowie_2c (imie, nazwisko, wiek, ocena_srednia) 
                VALUES ('$imie', '$nazwisko', $wiek, $ocena_srednia)";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Uczeń został pomyślnie dodany!</p>";
        } else {
            echo "<p style='color: red;'>Błąd: " . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
