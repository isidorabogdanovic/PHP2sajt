<?php
  include '../../config/konekcija.php';
    $upit = 'SELECT * FROM ekrani';
    $rezultat = $konekcija->prepare($upit);
    $rezultat->execute();

    $proizvodi = $rezultat->fetchAll();
    $ispis='';
    foreach($proizvodi as $pro){
      $ispis .= "<option value='$pro->id'>$pro->dijagonala $pro->rezolucija</option>;";
    } 
    $ispis.="</select>";
    echo $ispis;

?>