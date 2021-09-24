<?php
    session_start();
  include '../../config/konekcija.php';
  include "slikaPromena.php";
  if(isset($_POST['send'])){
    if(isset($_POST['pro'])){
    $id = $_POST['pro'];
    $item = "
    <h1 class='naslov'>Sadržaj korpe:</h1>
    <table class='tabelaKorpa' >
        <thead>
            <tr>
                <th>Redni broj</th>
                <th>Proizvod</th>
                <th>Naziv</th>
                <th>Cena</th>
                <th>Količina</th>
                <th>Ukloni iz korpe</th>
            </tr>
        </thead>
    <tbody>";
    foreach($id as $d){
      $idProiz = $d['id'];
      $kolicina = $d['quantity'];
      $upit = 'SELECT p.id as proId, p.tip as tip, k.nazivKategorije as proizvođač, p.model as model, p.ramMemorija as ram, p.procesor as procesor, p.grafika as grafika, p.ocena as ocena, p.cena as cena, s.malaSlika  as malaSlika, s.putanja as putanja, s.alt as alt, k.nazivKategorije as nazivKat, e.dijagonala as dijagonala, e. rezolucija as rez FROM proizvodi p INNER JOIN slike s ON p.slikaId = s.id INNER JOIN kategorije k ON p.kategorijaId = k.id INNER JOIN ekrani e ON p.ekranId = e.id WHERE p.id=:idProiz';

    $rezultat = $konekcija->prepare($upit);
    $rezultat->bindParam(':idProiz', $idProiz);
    $rezultat->execute();
    $proizvodi = $rezultat->fetchAll();
    $brojac = 0;
    foreach($proizvodi as $proizvod){
    $item.="
    <tr>
    <td>$proizvod->proId</td>
    <td>
        <img src='$proizvod->malaSlika' alt='$proizvod->alt' >
    </td>
    <td>$proizvod->proizvođač $proizvod->model</td>
    <td>$proizvod->cena din</td>
    <td>$kolicina</td>
    <td>
        <div class='ukloni'>
            <div class=''><button id='btnUkloni' onclick='UkloniIzKorpe($proizvod->proId)'>Ukloni</button> </div>
        </div>
    </td>
</tr>"
    ;

    /*$item.="
    <tr><td id='konacno' colspan='7'></td></tr>
    </body>
    </table>
    ";*/
};
  }
  $item.="</tbody></table>";
  echo $item;
}
}
?>