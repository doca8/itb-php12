<?php

    $pol = 'm';
    $godine = 17;

    if ($pol == 'm')
    {
        if ($godine >= 18)
        {
            echo "<p>Musko, punoletno</p>";
        }
        else 
        {
            echo "<p>Musko, maloletno</p>";
        }
    }
    else
    {
        if ($godine >= 18)
        echo "<p>Zensko, punoletno</p>";
   
        else 
        {
            echo "<p>Zensko, maloletno</p>"; 
        }
    }
    // Mozemo koliko hocemo da dodamo npr ( ALI IZBEGAVAMO )
    /* if($zaposlen == true)
    {

    }
    else
    {

    }
    */
       // Koristi se kada nemamo ELSE granu nego vise IF-ova onda ima smisla, ovako ne.

    $pol = 'z';
    $godine = 24;

    if ($pol == 'm' && $godine >= 18)  /* false || true = true */
    {
        echo "<p>Musko, punoletno</p>";
    }
    elseif ($pol == 'm' && $godine < 18)
    {
        echo "<p>Musko, maloletno</p>";
    }
    elseif ($pol == 'z' && $godine >= 18)
    {
        echo "<p>Zensko, punoletno</p>";
    }
    else
    {
        echo "<p>Zensko, maloletno</p>"; 
    }



    // firma radi od 9 do 17h.
    $sati = date("H");
    if ($sati < 9 || $sati >= 17)
    {
        echo "<p>Firma ne radi</p>";
    }
    else
    {
        echo "<p>Firma radi</p>";
    }

    // Alternativa

    $sati = date("H");
    if ($sati >= 9 && $sati <17)
    {
        echo "<p>Firma radi</p>";
    }
    else
    {
        echo "<p>Firma ne radi</p>";
    }
   
    
    // Zadatak 13.
    $n = 14;
    if (!($n %2 == 0))
    {
        echo "<p>$n je neparan</p>";
    }
    else
    {
        echo "<p>$n je paran</p>";
    }



 

?>