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
                <input type="text" id="login">
                <br>
                <label for="pass">Hasło:</label>
                <input type="password" id="pass">
                <br>
                <label for="pass2">Powtórz hasło:</label>
                <input type="password" id="pass2">
                <button type="submit">Zapisz</button>
            </form>
        </div>
        <?php

            $dbname = "psy";
            $dbhost = "localhost";
            $dbuser = "admin";
            $dbpass = "zaq1@WSX";

            $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            $login = $_POST["login"];
            $pass1 = $_POST["pass"];
            $pass2 = $_POST["pass2"];
            $kw1 = 'SELECT login FROM uzytkownicy WHERE login = $login';
            $test = 'INSERT INTO uzytkownicy (login, haslo) VALUES ($login, $pass1)';



            echo $login;






            mysqli_close($con);
        ?>
        <div id="prawydolny">
            <h2>
                Zapraszamy wszystkich <?php echo $login ?>
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