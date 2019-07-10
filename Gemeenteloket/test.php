<?php $file = '../afspraak/afspraken.txt';
          $textbestand = fopen($file, "a");
          $gegevens = "
Naam: $naam_afspraak $tussenvoegsel_afspraak $achternaam_afspraak\n 
Datum : $datum_afspraak \n
Tijdstip: $tijdstip_afspraak \n
Onderwerp: $onderwerp_afspraak \n
Afdeling: $afdelings_naam_afspraak \n
Opmerking: $opmerking_afspraak \n \n \n ";


fwrite($textbestand, $gegevens);
fclose($textbestand);
}
?>