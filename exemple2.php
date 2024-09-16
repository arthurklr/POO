<?php

require "maitre.php";

$tintin = new Maitre("Tintin", "journaliste", "Belgique", "Milou", "fox-terrier");
$asterix = new Maitre("Asterix", "guerrier", "Gaules", "", "");

/*$luckyLuke = new Maitre("Lucky Luke", "cowboy", "Amérique");
echo $luckyLuke->details();
$luckyLuke->affecter("Rantanplan", "toutou");
echo $luckyLuke->details();*/

echo $tintin->details();
echo $asterix->details();
