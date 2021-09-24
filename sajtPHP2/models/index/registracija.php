<?php
    include "../../config/konekcija.php";
    header("Content-type:application/json");
    $status = 404;
    $pod = null;
    if(isset($_POST['send'])){
        $greske = [];

        $ime = $_POST['ime'];
        $reIme = "/^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})*$/";
        if(!preg_match($reIme, $ime) || $ime == ""){
            $greske[] = "Polje za ime mora biti popunjeno";
        }

        $prezime = $_POST['prezime'];
        $rePrezime = "/^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})*$/";
        if(!preg_match($rePrezime, $prezime) || $prezime == ""){
            $greske[] = "Polje za prezime mora biti popunjeno";
        }

        $lozinka = $_POST['lozinka'];
        $reLozinka = "/^([a-zA-Z0-9@*#]{8,15})$/";
        if(!preg_match($reLozinka, $lozinka) || $lozinka == ""){
            $greske[] = "Polje za lozinku mora biti popunjeno";
        }

        $email = $_POST['email'];
        $reEmail = "/^\w+([\._-]?\w+)*@\w+([\._-]?\w+)*(\.\w{2,4})+$/";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $greske[] = "Polje za email mora biti popunjeno";
        }

        if(count($greske)>0){
            $status = 422;
            $pod = $greske;
        }
        else{
            $upit = "INSERT INTO korisnik (ime, prezime, email, lozinka, ulogaId) VALUES(:ime, :prezime, :email, :lozinka, 2)";
            $priprema = $konekcija->prepare($upit); 
            $priprema->bindParam(':ime', $ime); 
            $priprema->bindParam(':prezime', $prezime); 
            $priprema->bindParam(':email', $email); 
            $priprema->bindParam(':lozinka', $lozinka); 
            try{ 
                $status = $priprema->execute() ? 201 : 500; 
                
            } 
            catch(PDOException $e){ 
                $status = 409; 
            }
        }
        http_response_code($status); 
        echo json_encode($pod);
        
    }
?>