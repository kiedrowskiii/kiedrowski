<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuwanie</title>
</head>
<body>
    <h1>usun ucznie z szkoly </h1>
    <form action="skrpyt.php" method="POST">
        <label for="id">ID ucznia:</label><br>
        <input type="number" id="id" name="id" required><br><br>

        <button type="submit">Usuń ucznia</button>
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

        $uczen_id = (int)$_POST['uczen_id'];

        $check_sql = "SELECT id FROM uczniowie_2c WHERE id = $uczen_id";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $sql = "DELETE FROM uczniowie_2c WHERE id = $uczen_id";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Uczeń został pomyślnie usunięty!</p>";
            } else {
                echo "<p style='color: red;'>Błąd podczas usuwania: " . $conn->error . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Uczeń o podanym ID nie istnieje.</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
