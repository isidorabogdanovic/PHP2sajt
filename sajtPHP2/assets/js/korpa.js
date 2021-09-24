

$(document).ready(function(){
    let proizvodi = proizvodiUKorpi();

    if(!proizvodi.length)
    prikaziPraznuKorpu();
    
    else
    prikaziSadrzajKorpe();


});


function prikaziSadrzajKorpe(){
    let proizvodi = proizvodiUKorpi();
        $.ajax({
            url:"models/korpa/korpa.php",
            method:"POST",
            data:{
                pro : proizvodi,
                send: true
            },
            success:function(data){
                $("#omotKorpa").html(data);
                
                /*KonacnoCena(data);*/
            }        
        });
    }

/*function napraviTabelu(proizvodi){
    let ispis = `
    <h1 class="naslov">Sadržaj korpe:</h1>
    <table class="tabelaKorpa" >
        <head>
            <tr>
                <th>Redni broj</th>
                <th>Proizvod</th>
                <th>Naziv</th>
                <th>Cena</th>
                <th>Količina</th>
                <th>Ukupna cena</th>
                <th>Ukloni iz korpe</th>
            </tr>
        </head>
    <body>
    `;
        for(let pro of proizvodi) {
            ispis += napraviRed(pro);
    }
    ispis +=`</body>
    </table>`;

    $("#omot").html(ispis);

    function napraviRed(pro){
        return `
        <tr>
            <td>${pro.id}</td>
            <td>
                <img src="${pro.slika.src}" alt="${pro.slika.alt}" >
            </td>
            <td>${pro.proizvodjac}${pro.model}</td>
            <td>$${pro.cena}</td>
            <td>${pro.quantity}</td>
            <td>$${pro.cena * pro.quantity}</td>
            <td>
                <div class="ukloni">
                    <div class=""><button id="btnUkloni" onclick='UkloniIzKorpe(${pro.id})'>Ukloni</button> </div>
                </div>
            </td>
        </tr>
        `;
    }
}

function KonacnoCena(pro){
    let pr = 0;
    pro.forEach(p => {
        pr += p.cena * p.quantity;
    });
    document.getElementById('konacno').innerHTML = "Konačno: "+ pr +"din";
}*/

function prikaziPraznuKorpu(){
    $("#omot").html("<h1 class='prazna'>Korpa je prazna!</h1>");
}

function proizvodiUKorpi(){
    return JSON.parse(localStorage.getItem("proizvodi"));
}

function UkloniIzKorpe(id) {
    let proizvodi = proizvodiUKorpi();
    let filtrirano = proizvodi.filter(pro => pro.id != id);

    localStorage.setItem("proizvodi", JSON.stringify(filtrirano));

    prikaziSadrzajKorpe();
}



