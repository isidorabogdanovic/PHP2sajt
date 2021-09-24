window.onload = function(){ var button = document.querySelector('#prikazi');button.addEventListener('click', toggleNav);

/*$("#formaReg").hide();*/
$("#reg").click(function(){
    $("#formaReg").fadeIn();
})
$("#zatvori").click(function(){
    $("#formaReg").fadeOut();
})



document.getElementById("kreiraj").addEventListener("click", function(){
    var ime = $("#ime2").val();
    var reIme = /^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})*$/;
    var prezime = $("#prezime2").val();
    var rePrezime = /^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})*$/;
    var pass = $("#lozinka2").val();
    var rePass=/^([a-zA-Z0-9@*#]{8,15})$/;
    var email = $("#email2").val();
    var reEmail =/^\w+([\._-]?\w+)*@\w+([\._-]?\w+)*(\.\w{2,4})+$/;
    var ok = true;

    if(!reIme.test(ime)){
        $("#ime2").css("border-color", "red");
        ok = false;
    }
    else{
        $("#ime2").css("border-color", "black");
    }

    if(!rePrezime.test(prezime)){
        $("#prezime2").css("border-color", "red");
        ok = false;
    }
    else{
        $("#prezime2").css("border-color", "black");
    }

    if(!rePass.test(pass)){
        $("#lozinka2").css("border-color", "red");
        ok = false;
    }
    else{
        $("#lozinka2").css("border-color", "black");
    }

    if(!reEmail.test(email)){
        $("#email2").css("border-color", "red");
        ok = false;
    }
    else{
        $("#email2").css("border-color", "black");
    }

    if(ok == true){
    $.ajax({
        url:"php/registracija.php",
        type:"POST",
        data:{
            ime:ime,
            prezime:prezime,
            email:email,
            lozinka:pass,
            send:true
        },
        success:function(data,xhr){
            console.log(data);
            console.log("ok");
        },
        error:function(xhr,status,error){
            var poruka = "Doslo je do greske";
                switch(xhr.status){
                    case 402:
                    poruka = "Greska 402";
                    break;
                    case 404:
                    poruka = "Stranica nije pronadjena";
                    break;
                    case 409:
                    poruka = "Username ili email vec postoji";
                    break;
                    case 422:
                    poruka = "Podaci nisu validni";
                    //console.log(xhr.responseText);
                    break;
                    case 500:
                    poruka = "Greska";
                    break;
                }
                console.log(poruka);
        }
    })
    //$("#odlicno").html = "Kreirali ste nalog!";
}
})
}