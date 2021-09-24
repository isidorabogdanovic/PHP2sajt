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
                        <li><a href="models/odjava.php">Odjavite se</a></li>
                        
                </div>  <?php    
                }
            ?>
            <?php 
									if(isset($_SESSION['korisnik'])){ 
										if($_SESSION['korisnik']->ulogaId==1){
										?>
									<div id="divAdmin">
                                        <a id="admin" href="index.php?page=Admin"><h4>Admin panel</h4></a>
                                    </div>
									<?php } }
								?>
            <div id="registracija">
                <a id="reg" href="#"><h4>Registrujte se</h4></a>
            </div>
            <div id="korpa">
                <a href="index.php?page=Korpa"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
            </div>
            <div id="divAnketa">
                <a id="anketa" href="index.php?page=Anketa"><h4>Anketa</h4></a>
            </div>
        </div>
    </div>