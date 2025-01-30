<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oceny</title>
</head>
<body>
    <h1>Wstaw ocenę uczniowi</h1>
    <form action="wstaw_ocene.php" method="POST">
        <label for="id">ID ucznia:</label><br>
        <input type="number" id="id" name="id" required><br><br>

        <label for="ocena">Nowa ocena:</label><br>
        <input type="number" id="ocena" name="ocena" step="0.01" min="1" max="6" required><br><br>

        <button type="submit">Wstaw ocenę</button>
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
        $ocena = (float)$_POST['ocena'];

        $check_sql = "SELECT id FROM uczniowie_2c WHERE id = $uczen_id";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $sql = "UPDATE uczniowie_2c SET ocena_srednia = $ocena WHERE id = $uczen_id";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Ocena została pomyślnie zaktualizowana!</p>";
            } else {
                echo "<p style='color: red;'>Błąd: " . $conn->error . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Uczeń o podanym ID nie istnieje.</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
