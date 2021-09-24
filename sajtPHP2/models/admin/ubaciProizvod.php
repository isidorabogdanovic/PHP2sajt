<?php
    include "../../config/konekcija.php";
    define("FILE_SIZE",2000000);
    $tipSlike = ['image/jpg', 'image/png', 'image/gif'];

    if(isset($_POST['btnDodajPro'])){
        $datoteka = $_FILES['tbSlikaPro'];
        $tmp = $datoteka['tmp_name'];
        $imeDat = $datoteka['name'];
        $velicina = $datoteka['size'];
        $tip = $datoteka['type'];

        $novoIme = time()."_".$imeDat;
        $putanja = "../../images/products/".$novoIme;

        $greske =true;

        if(!in_array($tip,$tipSlike)){
            $greske = false;
        }

        if($velicina > FILE_SIZE){
            $greske = false;
        }

        $datAp = move_uploaded_file($tmp,$putanja);

        $tipP = $_POST['tbTipPro'];
        $katP = $_POST['tbKategorijaPro'];
        $modelP = $_POST['tbModelPro'];
        $ekranP = $_POST['tbEkranPro'];
        $ramP = $_POST['tbRamPro'];
        $procesorP = $_POST['tbProcesor'];
        $grafikaP = $_POST['tbGrafika'];
        $ocenaP = $_POST['tbOcena'];
        $cenaP = $_POST['tbCena'];

        if(empty($tipP)){
            $greske = false;
        }

        if(empty($katP)){
            $greske = false;
        }

        if(empty($modelP)){
            $greske = false;
        }

        if(empty($ekranP)){
            $greske = false;
        }

        if(empty($ramP)){
            $greske = false;
        }

        if(empty($procesorP)){
            $greske = false;
        }

        if(empty($grafikaP)){
            $greske = false;
        } 

        if(empty($ocenaP)){
            $greske = false;
        }

        if(empty($cenaP)){
            $greske = false;
        }

        if(!$datAp){
            $greske = false;
        }

        if(count($greske1)<1){
            $upitSlike = "INSERT INTO slike(putanja, alt) VALUES (:putanja, :alt)";
            $priprema=$konekcija->prepare($upitSlike);
            $priprema->bindParam(":putanja", $novoIme);
            $priprema->bindParam(":alt", $katP);

            try{
                $priprema->execute();
                $idSlika =$konekcija->lastInsertId();

                $upitPro = "INSERT INTO proizvodi(slikaId, tip, model, ekranId, ramMemorija, procesor, grafika, ocena, cena, kategorijaId) VALUES(:slikaId, :tip, :model, :ekranId, :ramMemorija, :procesor, :grafika, :ocena, :cena, :kategorijaId)";
                $priprema=$konekcija->prepare($upitPro);
                $priprema->bindParam(":slikaId", $idSlika);
                $priprema->bindParam(":tip", $tipP);
                $priprema->bindParam(":model", $modelP);
                $priprema->bindParam(":ekranId", $ekranP);
                $priprema->bindParam(":ramMemorija", $ramP);
                $priprema->bindParam(":procesor", $procesorP);
                $priprema->bindParam(":grafika", $grafikaP);
                $priprema->bindParam(":ocena", $ocenaP);
                $priprema->bindParam(":cena", $cenaP);
                $priprema->bindParam(":kategorijaId", $katP);

                $priprema->execute();
            }
            catch(PDOException $e){
                echo "Greska".$e;
            }
        }
        else{
             echo "Greska!";
        }
    }
?>