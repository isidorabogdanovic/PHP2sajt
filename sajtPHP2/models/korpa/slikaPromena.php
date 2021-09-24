<?php

$u = "SELECT * FROM slike";

$priprema = $konekcija->prepare($u);
$priprema->execute();
$slike = $priprema->fetchAll();
$putanja = 'images/products/';
    for($i=0; $i<count($slike); $i++){
        list($sirina, $visina) = getimagesize('../../'.$slike[$i]->putanja);
        $perc = 1;
        $newWidth = $sirina * $perc;
        $newHeight = $visina * $perc;
        $sl = imagecreatefromjpeg('../../'.$slike[$i]->putanja);

        $empty_image = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($empty_image, $sl, 1, 1, 1, 1, $newWidth, $newHeight, $sirina, $visina);
        $newImage = $empty_image;

        imagejpeg($newImage,$putanja. 'mala' .$slike[$i]->alt. 'jpg');
        $novoIme=$putanja. 'mala' .$slike[$i]->alt. 'jpg';
        $id = $slike[$i]->id;
        $u2 = "UPDATE slike SET malaSlika = $novoIme WHERE id = $id";
        $priprema = $konekcija->prepare($u);
        $rez = $priprema->execute();
$slike = $rez->fetchAll();
    }

    ?>