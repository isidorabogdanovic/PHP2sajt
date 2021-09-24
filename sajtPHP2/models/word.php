<?php

    $word = new COM("Word.Application");
    $word->Visible = true;
    
    $word->Documents->Add();
    $word->Selection->TypeText("Zdravo, zovem se Isidora Bogdanović student sam druge godine Visoke ICT škole, smer Web programiranje.

    Na osnovu do sada stečenog znanja iz ove oblasti, izradila sam ovaj sajt, posebno obrativši pažnju na pogodnosti koje nudi Javascript-a kao vodeći front-end programski jezik.
    
    Izradom ovog sajta sam se motivisala da nastavim dalje da učim i da jos vise proširujem znanja iz oblasti programiranja.
    
    S poštovanjem, Isidora Bogdanović 47/17");
    //$word->Documents[1]->SaveAs("dokument.doc");
   // header("Location: " . $_SERVER['HTTP_REFERER']);


?>