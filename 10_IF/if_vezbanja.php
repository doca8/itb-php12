<?php

// Zadatak 1.

    $a = 19.35;
    $b = -3.14;

    if ($a > $b)
    {
        echo "<p>Veci je broj $a</p>";
    }
    else 
    {
        echo "<p>Veci je broj $b</p>";
    }

    // Alternativno:

    echo "<p>Veci je broj " . (($a > $b) ? $a : $b) . "</p>";


    // Zadatak 4.

    $dobaDana = date("a"); 
    if ($dobaDana == "am")
    {
        echo "<p>Pre podne</p>";
    }
    else
    {
        echo "<p>Popodne</p>";
    }

    // Alternativno

    if($dobaDana == "pm")
    {
        echo "<p>Popodne</p>";
    }
    else
    {
        echo "<p>Pre podne</p>";
    }

    // Zadatak 3.

    $pol = "M";
    if ($pol == "M")
    {
        echo "<p> <img src='images/m.png' alt='muski pol'> </p>";
    }
    else
    {
        echo "<p> <img src='images/f.png' alt='zenski pol'> </p>";
    }


    // Zadatak 2.

    $t = 5;
    if ($t >= 0)
    {
        echo"<p>Temperatura je u plusu </p>";
    }
    else {
        echo "<p>Temperatura je u minusu</p>";
    }

    // Zadatak 5.


    $godinaR = date("Y");  /*godina racunara na dokumentaciji pogledaj!*/
    $godinaRodjenja = 1994;
    $punoletan = $godinaR - $godinaRodjenja;
    if ($punoletan >= 18)
    {
        echo "<p>Osoba je punoletna</p>";
    }
    else {
        echo "<p>Osoba nije punoletna</p>";
    }

    // Zadatak 6.

    $a = 9;
    $b = -9;
    $c = 6;
    if ($a > $b)
    {
       $pom = $a;
       $a = $b;
       $b = $pom;
    }
    //  Nakon ovog if-a u $a je sigurno manja vrednost nego u $b

    if ($a > $c)
    {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
// Nakon ovog if-a u $a je sigurno najmanja vrednost od zadate tri

    if ($b > $c)
    {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    // // Nakon ovog if-a vazi $a <= $b <= $c

    echo "<p>$a <= $b <= $c</p>";







?>