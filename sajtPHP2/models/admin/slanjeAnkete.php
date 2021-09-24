<?php
    session_start();
    if(isset($_POST['korisnik'])){
        $id=$_SESSION['korisnik']->id;
    }
    else{
        header("Location: " .$_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['marka'])){
        $marka = $_POST['marka'];
    }
    if(isset($_POST['sajt'])){
        $sajt = $_POST['sajt'];
    }

    $upit1 = "INSERT INTO anketa(marka,sajt) VALUES(:marka, :sajt)";
    $priprema=$konekcija->prepare($upit1);
    $priprema->bindParam(":marka", $marka);
    $priprema->bindParam(":sajt", $sajt);
    $status = $priprema->execute() ? 201 : 500;
    $idAnketa = $konekcija->lastInsertId();

    $upit2 = "INSERT INTO korisnikAnketa(idKorisnik, idAnketa) VALUES(:korisnik, :anketa)";
    $priprema=$konekcija->prepare($upit2);
    $priprema->bindParam(":korisnik", $id);
    $priprema->bindParam(":anketa", $idAnketa);
    $status = $priprema-> execute() ? 201 : 500;
    
    
    http_response_code($status);
?>