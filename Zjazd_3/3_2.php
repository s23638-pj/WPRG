<html>
<body>
    <form method="post">
        Imię:
        <br>
        <label>
            <input type="text" name="imie" required>
        </label>
        <br>
        <br>
        Nazwisko:
        <br>
        <label>
            <input type="text" name="nazwisko" required>
        </label>
        <br>
        <br>
        E-mail:
        <br>
        <label>
            <input type="email" name="mail" required>
        </label>
        <br>
        <br>
        <input type="submit" value="Zapisz">
    </form>

    <?php
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
    
    
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $mail = $_POST["mail"];

    if(!$plik = fopen("studenci.txt", "a+")) {
        echo "Coś poszło nie tak";
    } else {
        $rekord = $imie." ".$nazwisko." ".$mail."\n";
        fwrite($plik, $rekord);
        fclose($plik);
        echo "Zapisano";
    }
    ?>
</body>
</html>