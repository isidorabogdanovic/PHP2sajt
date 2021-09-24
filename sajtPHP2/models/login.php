<?php
    session_start();
    include "../config/konekcija.php";
    $status = 404;
    $pod = null;
    if(isset($_POST['send'])){
        $greske = [];

        $email = $_POST['email'];
        $reEmail = "/^([a-z0-9\.]+)([@]{1}[a-z]{3,}[\.]{1}(edu[\.])?(com|rs|org|net))$/";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $greske[] = "Polje za email mora biti popunjeno";
        }


        $lozinka = $_POST['lozinka'];
        $reLozinka = "/^(?=.*\d)(?=.*[a-zšžđćč])(?=.*[A-ZŠŽĐĆČ])[0-9a-zšžđćčA-ZŠŽĐĆČ]{8,}$/";
        if(!preg_match($reLozinka,$lozinka) || $lozinka == ""){
            $greske[] = "Polje za lozinku mora biti popunjeno";
        }
        if(count($greske)>0) {
            $status = 422;
            $pod = $greske;
            echo "Greske";
            zabeleziGreske($pod);
        }
        else {
            $upit = "SELECT * FROM korisnik WHERE email=:email AND lozinka=:lozinka";
            $priprema = $konekcija->prepare($upit);  
            $priprema->bindParam(':email', $email); 
            $priprema->bindParam(':lozinka', $lozinka); 
            $rezultat = $priprema->execute();
            echo "upit";

            if($rezultat){
                echo "ulogovandane";
                if($priprema->rowCount()==1){
                    $status = 201;
                    $korisnik = $priprema->fetch();
                    $_SESSION['korisnik'] = $korisnik;
                    $korId=$_SESSION['korisnik']->id;
                    $upit="UPDATE korisnik SET ulogovanDaNe=true WHERE id=:id";
                    $priprema=$konekcija->prepare($upit);
                    $priprema->bindParam(":id",$korId);
                    $priprema->execute();
                    if($_SESSION['korisnik']->ulogaId==1){
                        $pod = 'admin';
                    }
                    else{
                        $status = 200;
                        $pod = 'korisnik';
                        header("location:../proizvodi.php");

                    }
                }
                else{
                    if($priprema->rowCount()==0){
                        $pod = "Niste registrovani";
                        include "posaljiMejl.php";
                        $status = 403;
                    }
                }
            }
            else{
                $status=402;
            }
        }
        http_response_code($status);
        echo $pod;
    } 
?>

