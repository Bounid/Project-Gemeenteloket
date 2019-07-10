<!DOCTYPE html>
<html lang="nl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="Stylesheet" type="text/css" href="css/index2.css"  >
  <title>Gemeente Zoetermeer</title>

</head>

<body>



       <!-- Top van de pagina -->
        <div class="header">
                <h1 class="titel">Gemeente Zoetermeer</h1>
            </div>

        <!-- Menu aan de linkerkant van de pagina-->
        <div class="sidebar">
                <a class="active" href="index.html">Home</a>
                <a  href="paspoort.html">Paspoort</a>
                <a  href="register.html">Bevolkings registers</a>
                <a  href="vergunning.html">Vergunning</a>
                <a  href="toerisme.html">Toerisme</a>
                <a class="active" href="afspraak.php">Afspraak maken</a>
            </div>

        <!-- Text vak -->
        <section class="grid">
                <div class="welkom">
                <h2>Afspraak maken</h2>
                <p>Vul austublieft de formulier in om een afspraak te kunnen maken.</p>
                </div>
            </section>
            
       
            <form class="form" method="POST">

                Afspraak:<br/>
                <input type="text" name="afspraak">

                Voornaam:<br/><input type="text" name="vnaam">

                Achternaam:<br/><input type="text" name="anaam">

                Leeftijd:<br/><input type="text" name="ltijd">

                Adres:<br/><input type="text" name="adres">

                Postcode:<br/><input type="text" name="postcode">

                Plaats:<br/><input type="text" name="plaats">

                Email:<input type="text" name="email">

                Tijdstip:<input type="text" name="tijdstip">

                Extra:<input type="text" name="extra"><br/>

                <input type="submit" name="submit">

                </form>
            
        <!-- Onderaan de pagina -->
        <div class="footer">
                <p class="copyright">Copyright</p>
            </div>
<?php




if(isset($_POST['submit']))

{

    $afspraak = $_POST['afspraak'];

    $vnaam = $_POST['vnaam'];

    $anaam = $_POST['anaam'];

    $ltijd = $_POST['ltijd'];

    $adres = $_POST['adres'];

    $postcode = $_POST['postcode'];

    $plaats = $_POST['plaats'];

    $email = $_POST['email'];

    $tijdstip = $_POST['tijdstip'];

    $extra = $_POST['extra'];










    $file = fopen("afspraken.txt","a");


    $s = "

    Afspraak: $afspraak \n

    Naam: $vnaam $anaam \n

    Leeftijd: $ltijd \n

    Adres: $adres \n

    Postcode: $postcode \n

    Plaats: $plaats \n

    Email: $email \n

    Tijdstip $tijdstip \n

    Toevoeging: $extra \r\n";

    fwrite($file,$s); 

    fclose($file);

}

?>

</body>

</html>