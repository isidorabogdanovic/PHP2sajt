<?php
    include "../../config/konekcija.php";
    

        if(isset($_POST['btnIzmeniPro'])){
        $idPro = $_POST['sakriveno'];

        $tipProizvoda = $_POST['tbTipIzm'];
        $modelProizvoda = $_POST['tbModelIzm'];
        $ramProizvoda = $_POST['tbRamIzm'];
        $procProizvoda = $_POST['tbProcesorIzm'];
        $grafikaProizvoda = $_POST['tbGrafikaIzm'];
        $ocenaProizvoda = $_POST['tbOcenaIzm'];
        $cenaProizvoda = $_POST['tbCenaIzm'];


            try{
                if($tipProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET tip=:tipProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":tipProizvoda", $tipProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

                

                if($modelProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET model=:modelProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":modelProizvoda", $modelProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

               

                if($ramProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET ramMemorija=:ramProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":ramProizvoda", $ramProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

                if($procProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET procesor=:procProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":procProizvoda", $procProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

                if($grafikaProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET grafika=:grafikaProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":grafikaProizvoda", $grafikaProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

                if($ocenaProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET ocena=:ocenaProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":ocenaProizvoda", $ocenaProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

                if($cenaProizvoda!=""){
                    $upitIzm = "UPDATE proizvodi SET cena=:cenaProizvoda WHERE id=:id";
                    $priprema=$konekcija->prepare($upitIzm);
                    $priprema->bindParam(":cenaProizvoda", $cenaProizvoda);
                    $priprema->bindParam(":id", $idPro);
                    $priprema->execute();
                }

                
            }
            catch(PDOException $e){
                echo $e;
            }
        }
    
?>