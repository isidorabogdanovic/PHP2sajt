$(document).ready(function(){
    $("#posaljiAnketu").click(slanjeAnkete);

    function slanjeAnkete(){
        var marka = document.getElementsByName("rb");
        var cekiran = false;
        var selektovanPrvi="";
        var selektovanDrugi="";
        for(var i=0; i<marka.length;i++){
            if(marka[i].checked){
                cekiran=true;
                selektovanPrvi=marka[i].value;
                break;
            }
        }
        if(cekran==false){
            document.getElementById("upozorenje").innerHTML = "Molimo Vas da popunite podatke!";
        }
        else{
            document.getElementById("upozorenje").innerHTML = "";
        }

        for(var i=0; i<marka.length;i++){
            if(marka[i].checked){
                cekiran=true;
                selektovanDrugi=marka[i].value;
                break;
            }
        }
        if(cekran==false){
            document.getElementById("upozorenje").innerHTML = "Molimo Vas da popunite podatke!";
        }
        else{
            document.getElementById("upozorenje").innerHTML = "";
        }

        $.ajax({
            url:'php/slanjeAnkete.php',
            method:'post',
            data:{
                selektovanPrvi:selektovanPrvi,
                selektovanDrugi:selektovanDrugi
            },
            success:function(data){

            },
            error:function(xhr, error, status){
                var poruka = "Doslo je do greske";
                switch(xhr.status){
                    case 402: 
                    poruka = "Nije u redu upit."; 
                    break
                    case 404:
                    poruka = "Stranica nije pronadjena";
                    break;
                    case 422:
                    poruka = "Podaci nisu validni";
                    console.log(xhr.responseText);
                    break;
                    case 500:
                    poruka = "Greska";
                    break;
                }
                console.log(poruka);
            }
        })
    }
})