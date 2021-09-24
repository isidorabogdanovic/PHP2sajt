<?php
        session_start();
        $userMail = $_SESSION['korisnik']->email;

            $mail = new PHPMailer(true);
            $subject = "Login Error";
            $message = "Login unsuccessful";
            try{
                $mail->SMTPDebug = 0;  
                $mail->isSMTP();  
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;  
                $mail->Username = 'technoshop@gmail.com';  
                $mail->Password = 'lozinka123';  
                $mail->SMTPSecure = 'tls';  
                $mail->Port = 587;  
                $mail->setFrom('technoshop@gmail.com'); 
                $mail->addAddress($userMail); 
                $mail->isHTML(true);  
                $mail->Subject= $subject; 
                $mail->Body = $message; 
                $mail->send();
            }
            catch(Exception $e){                                         
                echo $e->getMessage();                                     
            }
    
    
?>