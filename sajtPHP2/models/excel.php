<?php

require_once "../config/konekcija.php";
$upit = "SELECT p.id as proId, p.tip as tip, k.nazivKategorije as proizvođač, p.model as model, p.ramMemorija as ram, p.procesor as procesor, p.grafika as grafika, p.ocena as ocena, p.cena as cena, s.putanja as putanja, s.alt as alt, k.nazivKategorije as nazivKat, e.dijagonala as dijagonala, e. rezolucija as rez FROM proizvodi p INNER JOIN slike s ON p.slikaId = s.id INNER JOIN kategorije k ON p.kategorijaId = k.id INNER JOIN ekrani e ON p.ekranId = e.id";
    
$priprema = $konekcija->query($upit);
$pro = $priprema->fetchAll();

// Pokretanje Excel aplikacije
$excel = new COM("Excel.Application");

// Da bi se fizički videlo otvaranje fajla
$excel->Visible = 1;

// recommend to set to 0, disables alerts like "Do you want MS Word to be the default .. etc"
$excel->DisplayAlerts = 1;

// Otvaranje Excel fajla
$workbook = $excel->Workbooks->Open("http://localhost/SAJTPHP22/sajtPHP2/Pro.xlsx") or die('Nemoguce otvoriti fajl');

// Otvaranje Sheet
$sheet = $workbook->Worksheets('Sheet1');
$sheet->activate;

$br = 1;
foreach($pro as $p){
    // U A kolonu upisujemo ID
    $polje = $sheet->Range("A{$br}");
    $polje->activate;
    $polje->value = $p->proId;

    // U B kolonu upisujemo TITLE
    $polje = $sheet->Range("B{$br}");
    $polje->activate;
    $polje->value = $p->proizvođač;

    // U C kolonu upisujemo DESCRIPTION
    $polje = $sheet->Range("C{$br}");
    $polje->activate;
    $polje->value = $p->model;

    // U D kolonu upisujemo TRAILER
    $polje = $sheet->Range("D{$br}");
    $polje->activate;
    $polje->value = $p->cena;

    $br++;
}

// U E kolonu upisujemo BROJ UNETIH REDOVA
$polje = $sheet->Range("E{$br}");
$polje->activate;
$polje->value = count($pro);

// Cuvanje promena u fajla
$workbook->_SaveAs("http://localhost/SAJTPHP22/sajtPHP2/Pro.xlsx", -4143);
$workbook->Save();

// Zatvaranje Excel fajla
$workbook->Saved=true;
$workbook->Close;

$excel->Workbooks->Close();
$excel->Quit();

unset($sheet);
unset($workbook);
unset($excel);