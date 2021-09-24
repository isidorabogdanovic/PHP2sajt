<?php
    include "../../config/konekcija.php";
    if(isset($_POST['id'])){
        $idPro = $_POST['id'];
        try{
            $upit = "DELETE FROM proizvodi WHERE id=:id";
            $priprema=$konekcija->prepare($upit);
            $priprema->bindParam(":id", $idPro);
            $priprema->execute();   
        }    
        catch(PDOException $e){
            echo $e;
        }
    }
?>