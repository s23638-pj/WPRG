<!DOCTYPE html>
<html>
<body>
    
    <h1>Rezerwacja pokoju</h1>

    <form method="post">
        <h4>
            Liczba osób<br>
            <label>
                <input name="guest_quantity" type="number" value="1" min="1" max="4">
            </label><br>
        </h4>
        
            Data pobytu <br>
            od: <input name="date_from" type="date" required>
            do: <input name="date_to" type="date" required>
        
                <h4>
            Dodatkowe udogodnienia <br>
            <h5>Łóżeczko dla dziecka:
                <input name="baby_bed" type="checkbox"><br></h5>
            <h5>Klimatyzacja:
                <input name="air" type="checkbox"><br></h5>
            <h5>Przyjazny palaczom:
                <input name="smoke" type="checkbox"><br></h5>

        </h4>
        
        <h4>
            Dane rezerwującego<br>
            <input name="name" type="text" placeholder="Imię" required><br>
            <input name="surname" type="text" placeholder="Nazwisko" required><br>
        </h4>
        <h4>
            Adres rezerwującego <br>
            <input name="street" type="text" placeholder="Ulica" required>
            <br><input name="street_num" type="number" placeholder="Nr domu" required><input name="apt_num" type="number" placeholder="Nr mieszkania">
            <br><input name="town" type="text" placeholder="Miejscowość" required>
            <br><input name="post_code" placeholder="Kod pocztowy" required>
        </h4>
        <h4>

            <input name="mail" type="email" placeholder="Adres e-mail" required>
        </h4>

        
        <h4>
            Dane karty płatniczej <br>
            <input name="card_number" type="number"  minlength="16" maxlength="16" placeholder="16-cyfrowy numer karty" required><br>
            <input name="date_card" type="text" placeholder="data ważności karty" required><br>
            <input name="CVV" type="number" minlength="3" maxlength="3" placeholder="Numer cvv" size="1" required>
        </h4>

            <input type="submit" value="Dalej" name="save">

    </form>

    <form method="post"><input type="submit" value="Odczytaj dane" name="view"></form>

    <?php
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

$gquantity = $_POST['guest_quantity'];
$d_from = $_POST['date_from'];
$d_to = $_POST['date_to'];
$bbed = $_POST['baby_bed'];
$air = $_POST['air'];    
$smk = $_POST['smoke']; 
$na = $_POST['name'];
$sn = $_POST['surname'];
$street = $_POST['street'];
$snum = $_POST['street_num'];
$anum = $_POST['apt_num'];
$town = $_POST['town'];
$pcode = $_POST['post_code'];
$mail = $_POST['mail'];
$cnum = $_POST['card_number'];
$dcar = $_POST['date_card'];
$cvv = $_POST['CVV'];



if(isset($_POST['save'])){
    if ($plik = fopen("file.csv","a+")) {
        $dane = $gquantity.";".$d_from.";".$d_to.";".$bbed.";".$air.";".$smk.";".$na.";".$sn.";".$street.";".$snum.";".$anum.";".$town.";".$pcode.";".$mail.";".$cnum.";".$dcar.";".$cvv."\n";
        fwrite($plik,$dane);
        fclose($plik);
    } else echo "Błąd zapisu";
}

$line = 1;
if (isset($_POST['view']))
{
    if ($plik = fopen("file.csv", "r")) {
        while (($data = fgetcsv($plik,1000,";"))!== FALSE) {
            $atributs = count($data);
            $line++;
            for ($i = 0; $i <$atributs ; $i++){
                echo $data[$i]. " ";
            }
            echo "<br>";
        }
        fclose($plik);
    } else echo "Błąd odczytu";
}



?>
</body>
</html>