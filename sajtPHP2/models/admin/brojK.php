<?php
    $file = file("data/log.txt"); 
    for($i = 0; $i < count($file); $i++){
            $log = explode("\t", $file[$i]);
            $str[] = trim($log[count($log)-1]);
    }

    $pocetna=0;
    $proizvodi=0;
    $kontakt=0;
    $autor=0;
    $admin=0;
    $korpa=0;
    $anketa=0;
    $svi=count($str);
    
    for($j=0; $j<count($str);$j++){
        if($str[$j]=="Početna"){
            $pocetna++;
        }
        if($str[$j]=="Proizvodi"){
            $proizvodi++;
        }
        if($str[$j]=="Anketa"){
            $anketa++;
        }
        if($str[$j]=="Kontakt"){
            $kontakt++;
        }
        if($str[$j]=="Admin"){
            $admin++;
        }
        if($str[$j]=="Korpa"){
            $korpa++;
        }
        if($str[$j]=="Autor"){
            $autor++;
        }
        
    }
    
    if($pocetna==0){
        $pocetnaN=0;
    }
    else{
        $pocetnaN = round($pocetna/$svi*100);
    }
    if($proizvodi==0){
        $proizvodiN=0;
    }
    else{
        $proizvodiN = round($proizvodi/$svi*100);
    }
    if($anketa==0){
        $anketaN=0;
    }
    else{
        $anketaN = round($anketa/$svi*100);
    }
    if($kontakt==0){
        $kontaktN=0;
    }
    else{
        $kontaktN = round($kontakt/$svi*100);
    }
    if($admin==0){
        $adminN=0;
    }
    else{
        $adminN = round($admin/$svi*100);
    }
    if($korpa==0){
        $korpnaN=0;
    }
    else{
        $korpaN = round($korpa/$svi*100);
    }
    if($autor==0){
        $autorN=0;
    }
    else{
        $autorN = round($autor/$svi*100);
    }


?>