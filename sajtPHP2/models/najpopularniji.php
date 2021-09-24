<?php
    include "../config/konekcija.php";
    header("Content-Type: application/json");                    
    $upit = ("SELECT p.id as proId, p.tip as tip, k.nazivKategorije as proizvođač, p.model as model, p.ramMemorija as ram, p.procesor as procesor, p.grafika as grafika, p.ocena as ocena, p.cena as cena, s.putanja as putanja, s.alt as alt, k.nazivKategorije as nazivKat, e.dijagonala as dijagonala, e. rezolucija as rez FROM proizvodi p INNER JOIN slike s ON p.slikaId = s.id INNER JOIN kategorije k ON p.kategorijaId = k.id INNER JOIN ekrani e ON p.ekranId = e.id ORDER BY ocena desc LIMIT 4");
    $rezultat = $konekcija->query($upit);
    $proizvodi = $rezultat->fetchAll();
    echo json_encode($proizvodi);
?>