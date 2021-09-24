<?php
include "../config/konekcija.php";
    session_start();
    $korId=$_SESSION['korisnik']->id;
                    $upit="UPDATE korisnik SET ulogovanDaNe=false WHERE id=:id";
                    $priprema=$konekcija->prepare($upit);
                    $priprema->bindParam(":id",$korId);
                    $priprema->execute();
    unset($_SESSION['korisnik']);
    header("Location:../index.php");
?>