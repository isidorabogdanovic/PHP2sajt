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
    <meta name="keywords" content="Techno, shop, Kontakt"/>
    <meta name="description" content="Techno shop najava prazničnih cena i još mnogo kakvih popusta tokom cele godine! Posetite nas."/>
    <link rel="icon" href="images/index/Icon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
    <style>
      form.form{
        flex: 1;
        padding: 100px 20px;
      }
      #myChart{
        flex: 0.5;
        max-width: 50%;
        max-height: 50%;
      }
    </style>
    <title>Techno shop | Kontakt</title>
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
    </nav>-->

    <div id="omot">
        <div class="content" style="min-height: 700px">
            <div class="flexed">
              <form action="" class="form">
                <h2>Pošaljite primedbu/pitanje</h2>
                <p id="SubmitMessage"></p>
                <div class="form-wrap">
                    <label for="loginField">Email</label>
                    <input type="email" id="loginField" placeholder="peraperic@email.com" class="input-field"/>
                    <small id="emailMessage"></small>
                </div>
                <div class="form-wrap">
                    <label for="naslov">Naslov</label>
                    <input type="text" id="naslov" placeholder="Naslov" class="input-field"/>
                    <small id="naslovMessage"></small>
                </div>
                <div class="form-wrap">
                    <label for="opis">Opis</label>
                    <textarea name="opis" id="opis" cols="30" rows="10" class="input-field"></textarea>
                    <small id="opisMessage">Maksimalno 300 reči.</small>
                </div>
                <div class="form-wrap">
                    <button type="button" id="loginButton" class="button primary">Potvrdi</button>
                </div>
              </form>
              <canvas id="myChart" width="200" height="200"></canvas>
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
    <script type="text/javascript" src="assets/js/regular.js"></script>
    <script type="text/javascript" src="assets/js/loadRegular2.js"></script>
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script>
      var ctx = document.getElementById("myChart").getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ["Januar", "Februar", "Mart", "April", "Maj", "Jun", "Jul", "Avgust", "Septembar", "Oktobar", "Novembar", "Decembar"],
              datasets: [{
                  label: 'Broj prodatih proizvoda po mesecima u godini',
                  data: [1233, 988, 1323, 905, 1112, 1323, 1412, 1619, 1343, 1115, 1442, 1763],
                  backgroundColor: [
                      'rgba(19,145,107, 0.6)'
                  ],
                  borderColor: [
                      'rgba(19,145,107, 1)'
                  ],
                  borderWidth: 1.5
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:false
                      }
                  }]
              },
              elements: {
                  line: {
                      tension: 0.2
                  }
              }
          }
      });
    </script>
</body>
</html>-->