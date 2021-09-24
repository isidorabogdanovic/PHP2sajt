<?php
    //include "config/konekcija.php";
    $upit = "SELECT * FROM meni";
    $priprema=$konekcija->prepare($upit);
    $priprema->execute();
    $linkovi=$priprema->fetchAll();

    $niz=["fa fa-home", "fa fa-desktop", "fa fa-phone", "fa fa-user"];
    $ispis="<ul>";
    foreach($linkovi as $link){
        for($i=0;$i<count($niz);$i++){
            if($i+1 == $link->idMeni)
                $ispis .="<li><a href='index.php?page=$link->naslov'><i class='$niz[$i]'></i>$link->naslov</a></li>";
        }
    }
    $ispis.="</ul>";
    echo $ispis;

?>