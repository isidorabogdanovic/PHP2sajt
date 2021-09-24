<?php

include "config.php";

/*$serverBaze = "localhost";
$username = "root";
$password = "";
$bazaPodataka = "prodavnica"; */


try{
    $konekcija = new PDO("mysql:host=".SERVER.";dbname=".DATABASE.";charset=utf8", USERNAME, PASSWORD);    
    $konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(PDOException $e){
    echo "Greska: ".$e->getMessage();
}

function zabeleziPristupStranici($strana){
    $otvori = fopen(LOG_FILE, "a");
    if($otvori){
        $datum = date('d-m-Y H:i:s');
        fwrite($otvori, "{$_SERVER['PHP_SELF']}\t{$datum}\t{$_SERVER['REMOTE_ADDR']}\t{$strana}\n");
        fclose($otvori);
    }
}

function zabeleziGreske($greska){
    $otvori = fopen(GRESKE_FILE, "a");
    $sadrzaj="";
    for($i=0; $i<count($greska); $i++){
        $sadrzaj.="{$greska[$i]}\n";
    }
    if($otvori){
        fwrite($otvori, $sadrzaj);
        fclose($otvori);
    }
}

?>