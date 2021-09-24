<?php
  include '../../config/konekcija.php';
    $upit = 'SELECT * FROM kategorije';
    $rezultat = $konekcija->prepare($upit);
    $rezultat->execute();

    $proizvodi = $rezultat->fetchAll();
    $ispis='';
    foreach($proizvodi as $pro){
      $ispis .= "<option value='$pro->id'>$pro->nazivKategorije</option>;";
    } 
    $ispis.="</select>";
    echo $ispis;

?>