<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
    <!-- <meta http-equiv="refresh" content="1"> -->
</head>

<body>
    <div>
        <div id="banner">
            <h1>
                Forum wielbicieli psów
            </h1>
        </div>
        <div id="lewy">
            <img src="obraz.jpg" alt="foksterier">
        </div>
        <div id="prawygorny">
            <h2>
                Zapisz się
            </h2>
            <form method="POST" action="">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login">
                <br>
                <label for="pass">Hasło:</label>
                <input type="password" id="pass" name="pass">
                <br>
                <label for="pass2">Powtórz hasło:</label>
                <input type="password" id="pass2" name="pass2">
                <button type="submit">Zapisz</button>
            </form>

            <?php
            $database = "psy";
            $servername = "localhost";
            $username = "root";
            $password = "";

            $pieki1337 = "";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: "
                    . $conn->connect_error);
            }

            if (isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
                $login = $_POST['login'];
                $pass1 = $_POST['pass'];
                $pass2 = $_POST['pass2'];
                if (!$login || !$pass1 || !$pass2) {
                    $pieki1337 = "wypełnij wszystkie pola";
                } else {
                    $sql = "SELECT login FROM uzytkownicy where login = '$login'";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($query);
                    if (!$row) {
                        if ($pass1 != $pass2) {
                            $pieki1337 = "hasła nie są takie same, konto nie zostało dodane";
                        } else {
                            $spass = sha1($pass1);
                            $sqjd = "INSERT INTO uzytkownicy (login, haslo) VALUES ('$login', '$spass'); ";
                            mysqli_query($conn, $sqjd);
                            $pieki1337 = "Konto zostało dodane";
                        }
                    } else {
                        $pieki1337 = "login występuje w bazie danych, konto nie zostało dodane";
                    }
                }
            }

            echo "<p>$pieki1337</p>";

            mysqli_close($conn);
            ?>
        </div>
        <div id="prawydolny">
            <h2>
                Zapraszamy wszystkich
            </h2>
            <ol>
                <li>
                    właścicieli psów
                </li>
                <li>
                    weterynarzy
                </li>
                <li>
                    tych, co chcą kupić psa
                </li>
                <li>
                    tych, co lubią psy
                </li>
            </ol>
            <a href="regulamin.html">Przeczytaj regulamin Forum</a>
        </div>
    </div>
    <footer>
        Stronę wykonał: Siwek
    </footer>

</body>

</html>