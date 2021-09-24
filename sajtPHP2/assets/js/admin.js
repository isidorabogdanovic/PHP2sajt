$(document).ready(function(){
    $("#formaUpdate").hide();
    $(".izmena").click(Prikaz);
    function Prikaz(){
        $("#formaUpdate").show();
    }
    $(".izmena").click(Izmeni);
    function Izmeni(){
        var idPro = $(this).data('id');
        $("#sakriveno").val(idPro);
        console.log(idPro);
    }

    $(".obrisi").click(ObrisiPro);

    function ObrisiPro(){
        var idPro = $(this).data('id');
        console.log(idPro);
            $.ajax({
                url:"php/obrisi.php",
            method:"post",
            data:{
                id:idPro
            },
            success:function(data){
                setTimeout(function (){
                    location.reload();
                }, 100);
            },
            error(xhr, error, status){
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