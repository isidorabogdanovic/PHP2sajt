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



                   
                </div>
            </section>
            <section id="budzetKupovina">
                <h2>Kupovina za budžet:</h2>
                <div class="karte" id="budzetPro">
                


                </div>

                
            </section>
        </div>

            <!--<div id="paginacija">
                <ul>
                    <?php
                    /*$upit = "SELECT COUNT(*) as brojProizvoda FROM proizvodi";
                    $rezultat = $konekcija->query($upit)->fetch();  
 				    $brojProizvoda = $rezultat->brojProizvoda; 
  				    $linkovi = ceil($brojProizvoda / 3);  
 				    for($i=1; $i <= $linkovi; $i++){ 
					 $id = "$i"; */
					 
				    ?> 
				    <li> 
					    <a data-page="<?//=$id?>" class = "linkPaginacija" href="#"> <?//= $i ?> </a> 
                    </li> 
                     <?php //} ?>
                </ul>
            </div>-->