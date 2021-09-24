<?php
include "models/admin/brojK.php";
    //session_start();
    //include "config/konekcija.php";
    //if(isset($_SESSION['korisnik'])){
		//if($_SESSION['korisnik']->ulogaId != 1){
		//	$code = 404; 
		//	http_response_code($status);
		//}
		//else if($_SESSION['korisnik']->ulogaId == 1){ 
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
                <div id="brKor">
                    <ul>
                        <li>Pocetna:<?=$pocetnaN?> %</li>
                        <li>Proizvodi:<?=$proizvodiN?> %</li>
                        <li>Kontakt:<?=$kontaktN?> %</li>
                        <li>Autor:<?=$autorN?> %</li>
                        <li>AdminPanel:<?=$adminN?> %</li>
                        <li>Korpa:<?=$korpaN?> %</li>
                        <li>Anketa:<?=$anketaN?> %</li>
                    </ul>
                </div>
                <?php
                    $upit="SELECT COUNT(*) AS brojUlogovanih FROM korisnik WHERE ulogovanDaNe=1";
                    $priprema=$konekcija->prepare($upit);
                    $priprema->execute();
                    $broj=$priprema->fetch();
                    include "models/admin/brojK.php";
                ?>
                <div id="broj">Broj korisnika koji su ulogovani: <?= $broj->brojUlogovanih ?></div>
    <div id="formaZaInsert">
                <form action="php/ubaciProizvod.php" name="formularInsert" method="POST" enctype="multipart/form-data">
                        <table id="tabelaDodajProizvod">
                                <tr>
                                    <th>Dodajte proizvod</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbTipPro" id="tipPro" placeholder="Tip proizvoda"/>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>
                                        <select name="tbKategorijaPro" id="kategorijaPro">
                                            <option value="Izaberite">Izaberite kategoriju</option>
                                            <?php
                                            include "php/dodajKat.php";
                                            ?>
                                        </select>
                                    </td>
                                </tr>  
                                <tr>  
                                    <td>
                                        <input type="text" name="tbModelPro" id="modelPro" placeholder="Model proizvoda"/>
                                    </td>
                                </tr>
                                <tr>  
                                    <td>
                                        <input type="file" name="tbSlikaPro" id="slikaPro"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="tbEkranPro" id="ekranPro">
                                        <option value="Izaberite">Izaberite ekran</option>
                                            <?php
                                            include "php/dodajEkran.php";
                                            ?>
                                        </select>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbRamPro" id="ramPro" placeholder="Ram memorija" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbProcesor" id="procesorPro" placeholder="Procesor" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbGrafika" id="grafikaPro" placeholder="Grafika" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbOcena" id="ocenaPro" placeholder="Ocena" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbCena" id="cenaPro" placeholder="Cena" />
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="submit" name="btnDodajPro" id="dodajPro" value="Dodajte proizvod"/>

                                    </td>
                                </tr>
                
                            </table>
                </form>
            </div>

            <div id = "tabelaPro">
                <table id="tabPro">
                    <tr>
                        <th>Slika</th>
                        <th>Marka</th>
                        <th>Tip</th>
                        <th>Ocena</th>
                        <th>Cena</th>
                        <th>Promeni</td>
                    </tr>
                    <?php
                        $upitTabela = "SELECT p.id as id, s.putanja as slika, k.nazivKategorije as kategorija, p.tip as tip, p.ocena as ocena, p.cena as cena FROM proizvodi p INNER JOIN slike s ON p.slikaId = s.id INNER JOIN kategorije k ON p.kategorijaId = k.id";
                        $priprema = $konekcija->query($upitTabela);
                        $proizvodi = $priprema->fetchAll();
                      
                        foreach($proizvodi as $pro): ?>
                            <tr>   
                                <td>
                                    <img src="<?php echo $pro->slika ?>" />
                                </td> 
                                <td>
                                    <?php echo $pro->kategorija ?>
                                </td>   
                                <td>
                                    <?php echo $pro->tip ?>
                                </td>
                                <td>
                                    <?php echo $pro->ocena ?>
                                </td>  
                                <td>
                                    <?php echo $pro->cena ?>
                                </td> 
                                <td>
                                    <input type="button" class="izmena" data-id=" <?php echo $pro->id ?> " value = "Izmeni"  />
                                    <input type="button" class="obrisi" data-id=" <?php echo $pro->id?> " value = "Obrisi" />
                                </td>
                            </tr>
                    <?php endforeach; ?>
                    
                </table>
            </div>

            <div id="formaZaUpdate">
                <form action="php/update.php" id="formaUpdate" name="formularUpdate" method="POST" enctype="multipart/form-data">
                        <table id="tabelaIzmena">
                                <tr>
                                    <th>Izmenite proizvod</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbTipIzm" id="tipIzm" placeholder="Tip proizvoda"/>
                                    </td>
                                </tr>
                                <tr>  
                                    <td>
                                        <input type="text" name="tbModelIzm" id="modelIzm" placeholder="Model proizvoda"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbRamIzm" id="ramIzm" placeholder="Ram memorija" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbProcesorIzm" id="procesorIzm" placeholder="Procesor" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbGrafikaIzm" id="grafikaIzm" placeholder="Grafika" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbOcenaIzm" id="ocenaIzm" placeholder="Ocena" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="tbCenaIzm" id="cenaIzm" placeholder="Cena" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type = "hidden" id = "sakriveno" name="sakriveno"/></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="btnIzmeniPro" id="izmeniPro" value="Izmenite proizvod"/>
                                    </td>
                                </tr>
                        </table>
                </form>
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

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>-->
    <!--<script type="text/javascript" src="assets/js/script.js"></script>-->
    <!--<script type="text/javascript" src="assets/js/navbar.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/objekat.js"></script>
    <script type="text/javascript" src="assets/js/kreiraj.js"></script>
    <script type="text/javascript" src="assets/js/prikaz.js"></script>
    <script type="text/javascript" src="assets/js/prod-modal.js"></script>
    <script type="text/javascript" src="assets/js/admin.js"></script>    
</body>
</html>-->
<?php //}}
//else{
//	$status = 404; 
//	http_response_code($status); 
//}
?>