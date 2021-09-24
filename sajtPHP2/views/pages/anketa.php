<?php
    //include "config/konekcija.php";
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="author" content="Isidora Bogdanovic"/>
    <meta name="keywords" content="Techno, shop, Proizvodi"/>
    <meta name="description" content="Techno shop najava prazničnih cena i još mnogo kakvih popusta tokom cele godine! Posetite nas."/>
    <link rel="icon" href="images/index/Icon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
    <title>Techno shop | Proizvodi</title>
</head>
<body>
    <div id="formaReg">
        <form action="#" name="formular" method="POST">
            <table>
                <tr>
                    <th colspan="2">KREIRAJTE NALOG</th>
                </tr>   
                <tr>
                    <td>
                        <input type="text" name="tbIme2" id="ime2" placeholder="Ime"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="tbPrezime2" id="prezime2" placeholder="Prezime"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="tbEmail2" id="email2" placeholder="Email"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="password" name="tbPassword2" id="password2" placeholder="Lozinka" />
                    </td>
                </tr>
                <tr>
                    <td  colspan="2">
                        <input type="button" name="btnKreiraj" id="kreiraj" value="Kreirajte nalog"/>
                        <input type="button" name="btnZatvori" id="zatvori" value="Zatvori"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="prozor">
        <div id="obavestenje">
            <p>Proizvod je dodat u korpu!</p>
        </div>
    </div>
    <div class="product-modal">
        <div class="modal-window">

        </div>
    </div>

    <div id="topbar">
        <div class="content">
            <button id="prikazi">
                <div></div>
                <div></div>
                <div></div>
            </button>
            <div id="logo">
                <a href="index.php"><h1>Techno shop</h1></a>
            </div>
            <?php
                if(isset($_SESSION['korisnik'])){
            ?>  
                <div id="odjava">
                    <ul>
                        <li id="imeprezime">
                            <?php
                                echo $_SESSION['korisnik']->ime 
                            ?>
                            <?php
                                echo $_SESSION['korisnik']->prezime 
                            ?>

                        </li>
                        <li><a href="php/odjava.php">Odjavite se</a></li>
                        
                </div>  <?php    
                }
            ?>
            <?php 
									if(isset($_SESSION['korisnik'])){ 
										if($_SESSION['korisnik']->ulogaId==1){
										?>
									<div id="divAdmin">
                                        <a id="admin" href="admin.php"><h4>Admin panel</h4></a>
                                    </div>
									<?php } }
								?>
            <div id="registracija">
                <a id="reg" href="#"><h4>Registrujte se</h4></a>
            </div>
            <div id="korpa">
                <a href="korpa.php"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
            </div>
            <div id="divAnketa">
                <a id="anketa" href="anketa.php"><h4>Anketa</h4></a>
            </div>
        </div>
    </div>
    <nav id="navbar">
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i> Početna</a></li>
            <li><a href="proizvodi.php"><i class="fa fa-desktop"></i> Proizvodi</a></li>
            <li><a href="kontakt.php"><i class="fa fa-phone"></i> Kontakt</a></li>
            <li><a href="autor.php"><i class="fa fa-user"></i> Autor</a></li>
        </ul>
    </nav> -->

    <div id="omot">
        <?php
            if(isset($_SESSION['korisnik'])){
                $id=$_SESSION['korisnik']->id;
                $upit='SELECT *FROM korisnikAnketa WHERE idKorisnik=:id';
                $priprema=$konekcija->prepare($upit);
                $priprema->bindParam(":id", $id);
                $rezultat=$priprema->execute();
                $redovi=$priprema->rowCount();
                if($redovi==0){
            
        ?>
        <form method="POST" action="#" name="formaAnketa">
            <table id="tabelaAnketa">
                <th>Popunite anketu:</th>
            <tr>
                <td colspan="10">Omiljena marka racunara?<br><br>
            
            
                
                    <input type="radio" name="rb" class="rbMarka">Apple<br>
                    <input type="radio" name="rb" class="rbMarka">HP<br>
                    <input type="radio" name="rb" class="rbMarka">Dell<br>
                    <input type="radio" name="rb" class="rbMarka">Lenovo<br>
                    <input type="radio" name="rb" class="rbMarka">Acer
                </td>
            </tr>
            <tr>
                <td>Da li ste na nasem sajtu nasli sve potrebne informacije vezane za trazeni proizvod?<br><br>
                    <input type="radio" name="rb2" class="rbMarkaDa">Da<br>
                    <input type="radio" name="rb2" class="rbMarkaNe">Ne
                </td>
            </tr>
            <tr id="poslednji">
                <td><input type="submit" value="Pošalji" id="posaljiAnketu"/></td>
                <p id="upozorenje"></p>
            </tr>
            </table>
        </form>
                <?php } else{
                    $upit= "SELECT *FROM anketa";
                    $priprema=$konekcija->prepare($upit);
                    $priprema->execute();
                    $brA=$priprema->rowCount();
                    ?>
                    <table>
                        <tr>
                            <th>Koja vam je omiljena marka laptopa?</th>
                        </tr>
                        <tr>
                            <td>
									<?php
										$laptopovi = array("Apple", "HP", "Dell", "Lenovo", "Acer"); 
										foreach($laptopovi as $alaptop){
											$upit = "SELECT * FROM anketa WHERE marka=:laptopovi"; 
											$priprema=$konekcija->prepare($upit);    
											$priprema->bindParam(':laptopovi', $laptop);                               
											$priprema->execute();  
											$konacnoRedovi = $priprema->rowCount(); 
											$procenat = round($konacnoRedovi/$brA*100);
									?>
											<p>
												<?php echo $laptop ?>
												<?php echo $procenat."%" ?>
											</p>
										<?php }
									?>
								</td>
                        </tr>
                        <tr>
                            <th>Da li ste zadovoljni informacijama koje ste dobili na ovom sajtu?</th>
                        </tr>
                        <tr>
                        <td>
									<?php
										$odgovori = array("Da", "Ne"); 
										foreach($odgovori as $odgovor){
											$upit2 = "SELECT * FROM anketa WHERE sajt=:odgovori"; 
											$priprema=$konekcija->prepare($upit);    
											$priprema->bindParam(':odgovori', $odgovor);                               
											$priprema->execute();  
											$konacnoRedovi = $priprema->rowCount(); 
											$procenat = round($konacnoRedovi/$brA*100);
									?>
											<p>
												<?php echo $odgovor ?>
												<?php echo $procenat."%" ?>
											</p>
										<?php }
									?>
								</td>
                        </tr>
                    </table>
                <?php } ?>
        <?php } 
        else{ ?>
            <h1 id="morateSeLogovati">Morate se prvo ulogovati!</h1>
        <?php } ?>



        <!--<footer id="footer">
            <div id="social">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Početna</a></li>
                <li><a href="proizvodi.php"><i class="fa fa-desktop"></i> Proizvodi</a></li>
                <li><a href="kontakt.php"><i class="fa fa-phone"></i> Kontakt</a></li>
                <li><a href="autor.php"><i class="fa fa-user"></i> Autor</a></li>
                <li><a href="sitemap.xml"><i class="fa fa-map"></i> Sitemap</a></li>
                <li><a href="dokumentacija.pdf"><i class="fa fa-docs"></i> Dokumentacija</a></li>
            </ul>
            <p>
                Isidora Bogdanović 47/17
            </p>
        </footer>
    </div>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    
    <script type="text/javascript" src="assets/js/navbar.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/objekat.js"></script>
    <script type="text/javascript" src="assets/js/kreiraj.js"></script>
    <script type="text/javascript" src="assets/js/prikaz.js"></script>
    <script type="text/javascript" src="assets/js/prod-modal.js"></script>   
    <script type="text/javascript" src="assets/js/anketa.js"></script>  
</body>
</html> -->