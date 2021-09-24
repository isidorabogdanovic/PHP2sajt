<?php
  //session_start();
?>  

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="author" content="Isidora Bogdanovic"/>
    <meta name="keywords" content="Techno, shop, Autor"/>
    <meta name="description" content="Techno shop najava prazničnih cena i još mnogo kakvih popusta tokom cele godine! Posetite nas."/>
    <link rel="icon" href="images/index/Icon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
    <title>Techno shop | Autor</title>
    <style>
      .content{
        padding: 100px 0px 0px 0px;
      }
      #levo, #desno{
        padding: 20px;
      }
      #levo{
        flex-basis: 40%;
        text-align: center;
      }
      #desno h3{
        padding: 0px 0px 20px 0px;
      }
      #desno p{
        padding: 20px 0px 20px 0px;
        letter-spacing: 1px;
      }
      .bordered{
          padding: 4px;
          border: 2px solid #ccc;
          border-radius: 4px;
      }
    </style>
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
              <a href="korpa.html"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
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
    </nav>-->

    <div id="omot">
        <div class="content" style="min-height: 700px">
            <div class="flexed">
              <div id="levo">
                <img class="bordered" src="images/autor/rsz_autor.jpg" alt="Autor sajta"/>
              </div>
              <div id="desno">
                <h3>Isidora Bogdanović 47/17</h3>
                
                <!-- Ovde ispisati tekst -->
                <p>Zdravo, zovem se Isidora Bogdanović student sam druge godine Visoke ICT škole, smer Web programiranje.</p>
                <p>Na osnovu do sada stečenog znanja iz ove oblasti, izradila sam ovaj sajt, posebno obrativši pažnju na pogodnosti koje nudi Javascript-a kao vodeći front-end programski jezik.</p>
                <p>Izradom ovog sajta sam se motivisala da nastavim dalje da učim i da jos vise proširujem znanja iz oblasti programiranja.</p>
                <p>S poštovanjem, <strong>Isidora Bogdanović 47/17</strong></p>
                <p></p>
              </div>
              <a href="models/word.php">Word</a>
            </div>
        </div>
                                            
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

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/navbar.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>-->