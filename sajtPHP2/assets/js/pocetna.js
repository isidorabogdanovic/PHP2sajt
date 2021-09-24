$(document).ready(function() {

    $.ajax({
        url: 'models/najpopularniji.php',
        method: 'post',
        success:function(proizvodi){
            ispisNajpopularniji(proizvodi);
            //console.log(proizvodi);
        },
        error:function(xhr,status,error){
            console.log(error);
        }
    });

function ispisNajpopularniji(proizvodi){
    let ispis='';
    proizvodi.forEach(pro=>{
        ispis+=`
        <div class="karta">
        <input type="hidden" class="hidden-input" value="${pro.proId}"/>
        <div class="karta-image">
            <img src="${pro.putanja}" alt="${pro.alt}"/>
        </div>
        <div class="karta-text">
            <h4 class="karta-title">${pro.proizvođač} ${pro.model}</h4>
                <small>
                    <span>Tip:</span> ${pro.tip}
                </small>
                <small>
                    <span>Proizvođač:</span> ${pro.proizvođač}
                </small>
                <small>
                    <span>Model:</span> ${pro.model}>
                </small>
                  

                <small>
                    <span> Dijagonala: ${pro.dijagonala}"</span>
                </small>

                <small>
                    <span>Rezolucija:${pro.rez}</span>
                </small>
                            
                <small>
                    <span>RAM memorija:${pro.ram}GB</span>
                </small>
                            
                <small>
                    <span>Procesor:${pro.procesor}</span>
                </small>
                            
                <small>
                    <span>Grafika:${pro.grafika}</span>
                </small>
                        
            <small class="ocena">
                <span>Ocena:</span>
                <span> ${pro.ocena} <span></span> </span>
                    </small>
                <input type="button" class="Dodaj" id="btnDodaj" data-id="${pro.proId}" value="Dodaj u korpu"/>
				<p class="cena">
            <span>${pro.cena}din</span> 
        </p>
        </div>
        </div>`;
    })
    $("#najpopularnijiPro").html(ispis);
    Korpa();
}

$.ajax({
    url: 'models/budzet.php',
    method: 'post',
    success:function(proizv){
        //let pro = JSON.parse(proizv);
        ispisBudzet(proizv);
        console.log(proizv);
    },
    error:function(xhr,status,error){
        console.log(error);
    }
});

function ispisBudzet(proizv){
let ispis='';
proizv.forEach(pr=>{
    ispis+=`
    <div class="karta">
    <input type="hidden" class="hidden-input" value="${pr.proId}"/>
    <div class="karta-image">
        <img src="${pr.putanja}" alt="${pr.alt}"/>
    </div>
    <div class="karta-text">
        <h4 class="karta-title">${pr.proizvođač} ${pr.model}</h4>
            <small>
                <span>Tip:</span> ${pr.tip}
            </small>
            <small>
                <span>Proizvođač:</span> ${pr.proizvođač}
            </small>
            <small>
                <span>Model:</span> ${pr.model}>
            </small>
              

            <small>
                <span> Dijagonala: ${pr.dijagonala}"</span>
            </small>

            <small>
                <span>Rezolucija:${pr.rez}</span>
            </small>
                        
            <small>
                <span>RAM memorija:${pr.ram}GB</span>
            </small>
                        
            <small>
                <span>Procesor:${pr.procesor}</span>
            </small>
                        
            <small>
                <span>Grafika:${pr.grafika}</span>
            </small>
                    
        <small class="ocena">
            <span>Ocena:</span>
            <span> ${pr.ocena} <span></span> </span>
                </small>
            <input type="button" class="Dodaj" id="btnDodaj" data-id="${pr.proId}" value="Dodaj u korpu"/>
            <p class="cena">
        <span>${pr.cena}din</span> 
    </p>
    </div>
    </div>`;
})
$("#budzetPro").html(ispis);
Korpa();
}

    function Korpa(){
        $(".Dodaj").click(DodajUKorpu);
    }
    
    function proizvodiUKorpi(){
        return JSON.parse(localStorage.getItem("proizvodi"));
    }
    
    function DodajUKorpu(){
        let id = $(this).data("id");
        var proizvodi = proizvodiUKorpi();
        console.log("klik");
    
        if(proizvodi){
            if(ProizvodJeVecUKorpi())
            azurirajKolicinu();
            else{
                DodajULocalStorage();
            }
        }
        else{
            dodajPrviProizvodULocalStorage();
        }
        $("#prozor").fadeIn();
        $("#prozor").delay(250).fadeOut();
        
    
    
    function azurirajKolicinu(){
        let proizvodi = proizvodiUKorpi();
        for(let i in proizvodi){
            if(proizvodi[i].id==id){
                proizvodi[i].quantity++;
                break;
            }
            
        }
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi))
    }
    
    function ProizvodJeVecUKorpi(){
        return proizvodi.filter(p => p.id == id).length;
    }
    
    function DodajULocalStorage(){
        let proizvodi = proizvodiUKorpi();
    
        proizvodi.push({
            id : id,
            quantity :  1
        });
        localStorage.setItem("proizvodi", JSON.stringify(proizvodi));
    }
    
    function dodajPrviProizvodULocalStorage(){
        let proizvodi = [];
        proizvodi[0] = {
            id : id,
            quantity : 1
        }
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi));
    }
    }
    
    function IsprazniKorpu(){
        localStorage.removeItem("proizvodi");
    }
    


});