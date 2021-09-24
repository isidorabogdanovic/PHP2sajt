<?php
    require_once "config/konekcija.php";
    require '../PHPMailer/src/PHPMailer.php'; 
	require '../PHPMailer/src/SMTP.php'; 
    require '../PHPMailer/src/Exception.php'; 
    
	use PHPMailer\PHPMailer\PHPMailer; 
	use PHPMailer\PHPMailer\Exception; 
	$mail = new PHPMailer(true);

    include "views/fixed/head.php";
    if(!isset($_GET['page'])){
        echo '<meta name="keywords" content="Techno, shop, Praznične, cene"/>
            <title>Techno shop</title>
            ';}
      else {
        zabeleziPristupStranici($_GET['page']);
        switch($_GET['page']){
          case 'Početna':
            echo '<meta name="keywords" content="Techno, shop, Praznične, cene"/>
            <title>Techno shop</title>
            ';
            break;
          case 'Proizvodi':
              echo '<meta name="keywords" content="Techno, shop, Proizvodi"/>
              <title>Techno shop | Proizvodi</title>
              ';
              break;
          case 'Kontakt':
            echo '<meta name="keywords" content="Techno, shop, Kontakt"/>
            <title>Techno shop | Kontakt</title>
            ';
            break;
            case 'Autor':
            echo '<meta name="keywords" content="Techno, shop, Autor"/>
            <title>Techno shop | Autor</title>
            ';
            break;
            case 'Anketa':
            echo '<meta name="keywords" content="Techno, shop, Proizvodi"/>
            <title>Techno shop | Proizvodi</title>
            ';
            break;
            case 'Admin':
            echo '<meta name="keywords" content="Techno, shop, Proizvodi"/>
            <title>Techno shop | Proizvodi</title>
            ';
            break;
            case 'Korpa':
            echo '<meta name="keywords" content="Techno, shop, Proizvodi"/>
            <title>Techno shop | Korpa</title>
            ';
            break;
          default: 
          echo '<meta name="keywords" content="Techno, shop, Praznične, cene"/>
          <title>Techno shop</title>
          ';
            break;
        }
      }
    include "views/fixed/header.php";
    include "views/fixed/nav.php";
  
    if(!isset($_GET['page'])){
      include "views/pages/pocetna.php";
    }
    else {
      switch($_GET['page']){
        case 'Početna':
          include "views/pages/pocetna.php";
          break;
        case 'Proizvodi':
            include "views/pages/proizvodi.php";
            break;
        case 'Kontakt':
          include "views/pages/kontakt.php";
          break;
          case 'Autor':
          include "views/pages/autor.php";
          break;
          case 'Anketa':
          include "views/pages/anketa.php";
          break;
          case 'Admin':
          include "views/pages/admin.php";
          break;
          case 'Korpa':
          include "views/pages/korpa.php";
          break;
        default: 
          include "views/pocetna.php";
          break;
      }
    }
  
    include "views/fixed/futer.php";

    if(!isset($_GET['page'])){
        echo '
        <script type="text/javascript" src="assets/js/regular.js"></script>
        <script type="text/javascript" src="assets/js/loadRegulars.js"></script>
        <script type="text/javascript" src="assets/js/objekat.js"></script>
        <script type="text/javascript" src="assets/js/carousele.js"></script>
        <!--<script type="text/javascript" src="assets/js/prikazi.js"></script>-->
        <script type="text/javascript" src="assets/js/prod-modal.js"></script>
        <script type="text/javascript" src="assets/js/pocetna.js"></script>
        </body>
</html>
        ';
      }
      else {
        switch($_GET['page']){
          case 'Početna':
          echo '
          <script type="text/javascript" src="assets/js/regular.js"></script>
          <script type="text/javascript" src="assets/js/loadRegulars.js"></script>
          <script type="text/javascript" src="assets/js/objekat.js"></script>
          <script type="text/javascript" src="assets/js/carousele.js"></script>
          <!--<script type="text/javascript" src="assets/js/prikazi.js"></script>-->
          <script type="text/javascript" src="assets/js/prod-modal.js"></script>
          <script type="text/javascript" src="assets/js/pocetna.js"></script>
          </body>
          </html>
          ';
            break;
          case 'Proizvodi':
          echo '
          <script type="text/javascript" src="assets/js/script.js"></script>
          <script type="text/javascript" src="assets/js/objekat.js"></script>
          <script type="text/javascript" src="assets/js/kreiraj.js"></script>
          <script type="text/javascript" src="assets/js/prikaz.js"></script>
          <script type="text/javascript" src="assets/js/prod-modal.js"></script>
          </body>
          </html>';    
        
              break;
          case 'Kontakt':
            echo '
            
    <script type="text/javascript" src="assets/js/regular.js"></script>
    <script type="text/javascript" src="assets/js/loadRegular2.js"></script>
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>
    </body>
    </html>
            ';
            break;
            case 'Autor':
    
            break;
            case 'Anketa':
            echo '
            <!--<script type="text/javascript" src="assets/js/script.js"></script>-->
            <script type="text/javascript" src="assets/js/objekat.js"></script>
            <script type="text/javascript" src="assets/js/kreiraj.js"></script>
            <script type="text/javascript" src="assets/js/prikaz.js"></script>
            <script type="text/javascript" src="assets/js/prod-modal.js"></script>   
            <script type="text/javascript" src="assets/js/anketa.js"></script>
            </body>
            </html>
            ';
            break;
            case 'Admin':
            echo '
            <!--<script type="text/javascript" src="assets/js/script.js"></script>-->
            <script type="text/javascript" src="assets/js/objekat.js"></script>
            <script type="text/javascript" src="assets/js/kreiraj.js"></script>
            <script type="text/javascript" src="assets/js/prikaz.js"></script>
            <script type="text/javascript" src="assets/js/prod-modal.js"></script>
            <script type="text/javascript" src="assets/js/admin.js"></script>
            </body>
            </html>
            ';
            break;
            case 'Korpa':
            echo '
            <!--<script type="text/javascript" src="assets/js/script.js"></script>-->
            <!--<script type="text/javascript" src="assets/js/objekat.js"></script>-->
            <!--<script type="text/javascript" src="assets/js/kreiraj.js"></script>-->
            <!--<script type="text/javascript" src="assets/js/prikaz.js"></script>-->
            <!--<script type="text/javascript" src="assets/js/prod-modal.js"></script>-->    
            <script type="text/javascript" src="assets/js/korpa.js"></script>  
            </body>
            </html>  
            ';
            break;
          default: 
          echo '
          <script type="text/javascript" src="assets/js/regular.js"></script>
          <script type="text/javascript" src="assets/js/loadRegulars.js"></script>
          <script type="text/javascript" src="assets/js/objekat.js"></script>
          <script type="text/javascript" src="assets/js/carousele.js"></script>
          <!--<script type="text/javascript" src="assets/js/prikazi.js"></script>-->
          <script type="text/javascript" src="assets/js/prod-modal.js"></script>
          <script type="text/javascript" src="assets/js/pocetna.js"></script>
          </body>
          </html>
          ';
            break;
        }
      }

?>

<?php /*
    session_start();
    include "php/konekcija.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="author" content="Isidora Bogdanovic"/>
    <meta name="keywords" content="Techno, shop, Praznične, cene"/>
    <meta name="description" content="Techno shop najava prazničnih cena i još mnogo kakvih popusta tokom cele godine! Posetite nas."/>
    <link rel="icon" href="images/index/Icon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
    <title>Techno shop</title>
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
                                <input type="password" name="tbLozinka2" id="lozinka2" placeholder="Lozinka" />
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="2">
                                <input type="button" name="btnKreiraj" id="kreiraj" value="Kreirajte nalog"/>
                                <input type="button" name="btnZatvori" id="zatvori" value="Zatvori"/>
                            </td>
                        </tr>
                        <h3 id="uspesno"></h3>
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
        <!--<ul>
            <li><a href="index.php"><i class="fa fa-home"></i> Početna</a></li>
            <li><a href="proizvodi.php"><i class="fa fa-desktop"></i> Proizvodi</a></li>
            <li><a href="kontakt.php"><i class="fa fa-phone"></i> Kontakt</a></li>
            <li><a href="autor.php"><i class="fa fa-user"></i> Autor</a></li>
        </ul>-->
        <?php
            include "php/meni.php";
        ?>
    </nav>

    <div id="omot">
        <div class="content">
            <div class="flexed">
                <header id="header">
                    <div class="inner-header">
                        <div class="header-content">
                            <img src="images/carousele/1.jpeg" class="carousele-img" alt="Carousele image">
                            <div class="header-content-text">
                                <h2>Techno shop</h2>
                                <p>"The future depends on technology, it's the same as we depend on water."</p>
                            </div>
                        </div>
                        <div class="header-content">
                            <img src="images/carousele/2.jpeg" class="carousele-img" alt="Carousele image 2">
                            <div class="header-content-text">
                                <h2>Praznične cene</h2>
                                <p>Posetite nas za praznike i izaberite mnoštvo novih artikala po sniženoj ceni!</p>
                            </div>
                        </div>
                        <div class="header-content">
                            <img src="images/carousele/3.jpeg" class="carousele-img" alt="Carousele image 3">
                            <div class="header-content-text">
                                <h2>Od nas trud, za Vas mir</h2>
                                <p>Za vaš mir tokom rada, mi ćemo se pobrinuti da uzmete samo najbolje!</p>
                            </div>
                        </div>
                    </div>
                    <span class="arrow arrow-left"><i class="fa fa-angle-left"></i></span>
                    <span class="arrow arrow-right"><i class="fa fa-angle-right"></i></span>
                </header>
                <aside id="side-form">
                    <h2>Prijavite se:</h2>
                    <p id="SubmitMessage"></p>
                    <form class="form">
                        <div class="form-wrap">
                            <label for="loginField">Email</label>
                            <input type="email" id="loginField" placeholder="peraperic@email.com" class="input-field">
                            <small id="emailMessage"></small>
                        </div>
                        <div class="form-wrap">
                            <label for="passwordField">Lozinka</label>
                            <input type="password" id="passwordField" placeholder="Lozinka" class="input-field">
                            <small id="passwordMessage">Lozinka mora da ima bar 1 veliko, 1 malo slovo, 1 broj i sve ukupno 8 karaktera</small>
                        </div>
                        <div class="form-wrap">
                            <button type="button" id="loginButton" class="button primary">Potvrdi</button>
                            
                        </div>
                    </form>
                </aside>
            </div>
            <section id="najpopularniji">
                <h2>Najpopularniji proizvodi:</h2>
                <div class="karte" id="najpopularnijiPro">
                    <?php
                        $upit = ("SELECT p.id as proId, p.tip as tip, k.nazivKategorije as proizvođač, p.model as model, p.ramMemorija as ram, p.procesor as procesor, p.grafika as grafika, p.ocena as ocena, p.cena as cena, s.putanja as putanja, s.alt as alt, k.nazivKategorije as nazivKat, e.dijagonala as dijagonala, e. rezolucija as rez FROM proizvodi p INNER JOIN slike s ON p.slikaId = s.id INNER JOIN kategorije k ON p.kategorijaId = k.id INNER JOIN ekrani e ON p.ekranId = e.id ORDER BY ocena desc LIMIT 4");

                        $rezultat = $konekcija->query($upit);
                        $proizvodi = $rezultat->fetchAll();
                        foreach($proizvodi as $proizvod):
                    ?>

<div class="karta">
    <input type="hidden" class="hidden-input" value="<?= $proizvod->proId?>"/>
        <div class="karta-image">
            <img src="<?= $proizvod->putanja?>" alt="<?= $proizvod->alt?>"/>
        </div>
        <div class="karta-text">
            <h4 class="karta-title"><?= $proizvod->proizvođač?> <?= $proizvod->model?></h4>
                <small>
                    <span>Tip:</span> <?= $proizvod->tip?>
                </small>
                <small>
                    <span>Proizvođač:</span> <?= $proizvod->proizvođač?>
                </small>
                <small>
                    <span>Model:</span> <?= $proizvod->model?>
                </small>
                  

                <small>
                    <span> Dijagonala:<?= $proizvod->dijagonala?>"</span>
                </small>

                <small>
                    <span>Rezolucija:<?= $proizvod->rez?></span>
                </small>
                            
                <small>
                    <span>RAM memorija:<?= $proizvod->ram?>GB</span>
                </small>
                            
                <small>
                    <span>Procesor:<?= $proizvod->procesor?></span>
                </small>
                            
                <small>
                    <span>Grafika:<?= $proizvod->grafika?></span>
                </small>
                        
            <small class="ocena">
                <span>Ocena:</span>
                <span> <?= $proizvod->ocena?> <span></span> </span>
                    </small>
                <input type="button" class="Dodaj" id="btnDodaj" data-id="<?= $proizvod->proId?>" value="Dodaj u korpu"/>
				<p class="cena">
            <span><?= $proizvod->cena?>din</span> 
        </p>
    </div>
</div>

                    <?php
                        endforeach;
                    ?>
                </div>
            </section>
            <section id="budzetKupovina">
                <h2>Kupovina za budžet:</h2>
                <div class="karte" id="budzetPro">
                <?php
                        $upit = ("SELECT p.id as proId, p.tip as tip, k.nazivKategorije as proizvođač, p.model as model, p.ramMemorija as ram, p.procesor as procesor, p.grafika as grafika, p.ocena as ocena, p.cena as cena, s.putanja as putanja, s.alt as alt, k.nazivKategorije as nazivKat, e.dijagonala as dijagonala, e. rezolucija as rez FROM proizvodi p INNER JOIN slike s ON p.slikaId = s.id INNER JOIN kategorije k ON p.kategorijaId = k.id INNER JOIN ekrani e ON p.ekranId = e.id ORDER BY cena ASC LIMIT 4");

                        $rezultat = $konekcija->query($upit);
                        $proizvodi = $rezultat->fetchAll();
                        foreach($proizvodi as $proizvod):
                    ?>

<div class="karta">
    <input type="hidden" class="hidden-input" value="<?= $proizvod->proId?>"/>
        <div class="karta-image">
            <img src="<?= $proizvod->putanja?>" alt="<?= $proizvod->alt?>"/>
        </div>
        <div class="karta-text">
            <h4 class="karta-title"><?= $proizvod->proizvođač?> <?= $proizvod->model?></h4>
                <small>
                    <span>Tip:</span> <?= $proizvod->tip?>
                </small>
                <small>
                    <span>Proizvođač:</span> <?= $proizvod->proizvođač?>
                </small>
                <small>
                    <span>Model:</span> <?= $proizvod->model?>
                </small>
                  

                <small>
                    <span> Dijagonala:<?= $proizvod->dijagonala?>"</span>
                </small>

                <small>
                    <span>Rezolucija:<?= $proizvod->rez?></span>
                </small>
                            
                <small>
                    <span>RAM memorija:<?= $proizvod->ram?>GB</span>
                </small>
                            
                <small>
                    <span>Procesor:<?= $proizvod->procesor?></span>
                </small>
                            
                <small>
                    <span>Grafika:<?= $proizvod->grafika?></span>
                </small>
                        
            <small class="ocena">
                <span>Ocena:</span>
                <span> <?= $proizvod->ocena?> <span></span> </span>
                    </small>
                <input type="button" class="Dodaj" id="btnDodaj" data-id="<?= $proizvod->proId?>" value="Dodaj u korpu"/>
				<p class="cena">
            <span><?= $proizvod->cena?>din</span> 
        </p>
    </div>
</div>

                    <?php
                        endforeach;
                    ?>
                </div>
            </section>
        </div>

            <div id="paginacija">
                <ul>
                    <?php
                    $upit = "SELECT COUNT(*) as brojProizvoda FROM proizvodi";
                    $rezultat = $konekcija->query($upit)->fetch();  
 				    $brojProizvoda = $rezultat->brojProizvoda; 
  				    $linkovi = ceil($brojProizvoda / 3);  
 				    for($i=1; $i <= $linkovi; $i++){ 
					 $id = "$i"; 
					 
				    ?> 
				    <li> 
					    <a data-page="<?=$id?>" class = "linkPaginacija" href="#"> <?= $i ?> </a> 
                    </li> 
                     <?php } ?>
                </ul>
            </div>

        <footer id="footer">
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
    <script type="text/javascript" src="assets/js/regular.js"></script>
    <script type="text/javascript" src="assets/js/loadRegulars.js"></script>
    <script type="text/javascript" src="assets/js/objekat.js"></script>
    <script type="text/javascript" src="assets/js/carousele.js"></script>
    <!--<script type="text/javascript" src="assets/js/prikazi.js"></script>-->
    <script type="text/javascript" src="assets/js/prod-modal.js"></script>
    <script type="text/javascript" src="assets/js/pocetna.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> */