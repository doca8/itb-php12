<?php

/*Zadatak 1.
Ispisati brojeve od 1 do 20. */
for ($i=1; $i<=20; $i++) {
    echo "$i ";
}

echo "<hr>";


// Zadatak 2.
// Ispisati brojeve od 20 do 1
for ($i=20; $i>=1; $i--) {
    echo "$i ";
}
echo "<hr>";

/*Zadatak 3.
Ispisati parne brojeve od 1 do 20. */
for ($i = 2; $i <= 20; $i += 2) {
    echo "$i, ";
}
echo "<hr>";

/*Zadatak 4.
Ispisati dvostruku vrednost brojeva  od 5 do 15.*/
for ($i = 5; $i <= 15; $i++) {
    $pom = $i * 2;
    echo " $pom ";
    echo $i * 2 . " ";  /*Nacin kako mozes da zapises mada prvi je laksi samo sa $pom */
}
echo "<hr>";

/*Zadatak 5.
Odrediti sumu brojeva od 1 do 100. */
$suma = 0; /* da smo $suma stavili u for onda bi samo ispisalo suma je 100 jer samo to racuna */
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}
echo "Suma brojeva od 1 do 100 je $suma";
echo "<hr>";

/*Zadatak 6.
Odrediti sumu brojeva od 1 do $n. */
$suma = 0;
$n = 100;
for ($i = 1; $i <= $n; $i++ ) {
    $suma += $i;
}
echo "Suma brojeva od 1 do $n je $suma";
echo "<hr>";

/*Zadatak 7.
Odrediti sumu brojeva od $n do $m. */
$n = 1;
$m = 5;
$suma = 0;
for ($i = $n; $i <= $m; $i++) {
    $suma += $i;
}
echo "Suma brojeva od $n do $m je $suma";
echo "<hr>";

/*Zadatak 8.
Odrediti proizvod brojeva od $n do $m. */
$proizvod = 1;
$n = 1;
$m = 5;
for ($i = $n; $i <= $m; $i++) {
    $proizvod *= $i;
}
echo "Proizvod brojeva od $n do $m je $proizvod";
echo "<hr>";

/*Zadatak 9.
Odrediti sumu kvadrata brojeva od n do m  */
$sum = 0;
$n = 1;
$m = 5;
for ($i = $n; $i <= $m; $i++) {
    $sum += $i**2; /*$sum += $i * $i    //  $sum += $i**2*/
}
echo "Suma kvadrata od $n do $m je $sum";
echo "<hr>";

/*Zadatak 10.
Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3.
 For petljom prikazati naizmenično te tri slike $n puta (na ekranu treba biti ukupno $n sličica). */

 /*
 1 % 3 = 1 -> 1.jpg
 2 % 3 = 2 -> 2.jpg
 3 % 3 = 0 -> 3.jpg
 4 % 3 = 1 -> 1.jpg
 5 % 3 = 2 -> 2.jpg
 6 % 3 = 0 -> 3.jpg
 7 % 3 = 1 -> 3.jpg
 */

//  1 nacin:
 $n = 7;
 for ($i = 1; $i <= $n; $i++) {
    if ($i % 3 == 1) {
        echo "<img src='img/1.jpg'>";  
    }
    elseif ($i % 3 == 2) {
        echo "<img src='img/2.jpg'>";
    }
    else {
        echo "<img src='img/3.jpg'>";
    }
 }

echo "<hr>";

//  2 nacin:
$n = 7;
for ($i = 1; $i <= $n; $i++) {
    $ostatak = $i % 3;
    if ($ostatak == 0) {
        $ostatak = 3;
    }
    echo "<img src='img/$ostatak.jpg'>";
}
echo "<hr>";

// 3 nacin: 
// Probajte koriscenjem naredbe switch

// ZADATAK
// Da je zadatak glasio da treba n puta ispisati slike 1.jpg, 2.jpg i 3.jpg
$n = 4;
for ($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= 3; $j++) {
        echo "<img src='img/$j.jpg'>";
        // break; ( bila bi jedna slika) 
    }  
    echo "<br>";
    // ako bi bilo jos jedan break;
}
echo "<hr>";

/*
Zadatak za vikend 
Koristeci for petlju/petlje na ekranu ispisati sahovsku tablu. 
8x8 dimenzija, sa naizmenicnim crnim i belim poljima.
*/

/*Zadatak 11.
Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. */
$suma = 0;
$i = 1;
while ($i <= 30) {
    if ($i % 9 == 0) {
        $suma += $i;
    }
    $i++;
}
echo "$suma";
echo "<hr>";

/*Zadatak 12.
Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100.  */
$proizvod = 1;
$i = 20;
while ($i <= 100) {
    if ($i % 11 == 0) {
        $proizvod *= $i;
    }
    $i++;
}
echo "$proizvod";
echo "<hr>";

/*Zadatak 13.
Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150. */
$suma = 0;
$n = $i = 5;
$m = 150;
while ($i <= $m) {
    if ($i % 13 == 0) {
        $suma++;
    }
    $i++;
}
echo "Prebrojanih brojeva ima $suma";
echo "<hr>";


echo "<hr>";
/*14 zadatak.
Ispisati aritmeticku sredinu brojeva od $n do $m. */
$n = 5;
$m = 9;
$zbir= 0;
$brojBrojeva = 0;
for ($i = 5; $i <= 9; $i++) {
    $zbir += $i;  /* $zbir = $zbir + $i */
    $brojBrojeva++;  /*$brojBrojeva += 1; $brojBrojeva = $brojBrojeva + 1; */
}
echo "<p>Zbir brojeva od $n do $m je $zbir, dok je broj brojeva $br</p>";
$arsr = $zbir / $brojBrojeva;
echo "<p>Aritmeticka sredina je $arsr</p>";
echo "<hr>";

/*Zadatak 15.
Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno. */
$n = -10;
$m = 10;
$sumaPoz = 0;
$sumaNeg = 0;
while ($n <= $m) {
    if ($n >= 0) {
        $sumaPoz++;
    }
    else {
        $sumaNeg++;
    }
    $n++;
}
echo "<p>Suma pozitivnih $sumaPoz</p>";
echo "<p>Suma negativnih $sumaNeg</p>";
echo "<hr>";

/*Zadatak 16.
Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5. */
$suma = 0;
$i = 5;
while ($i <= 50) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $suma++;
    }
    $i++;
}
echo "$suma";
echo "<hr>";

/*Zadatak 17.
Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su. */
$brojac = 0;
$suma = 0;
$n = $i = 1;
$m = 24;
while ($i <= $m) {
    if ($i % 10 == 4 && $i % 2 == 0) {
        $brojac++;
        $suma += $i;
    }
    $i++;
}
echo "<p>Broj brojeva od n do m je $brojac</p>";
echo "<p>Suma brojeva od n do m $suma</p>";
echo "<hr>";

/*Zadatak 18.
Ispisati brojeve od $n do $m, koji su deljivi sa $a.
FOR NACIN: */
$n = 15;
$m = 32;
$a = 5;
for ($i = $n; $i <= $m; $i++) {
    if ($i % $a == 0) {
        echo "$i ";
    }
}
echo "<hr>";

// DRUGI NACIN
$start = ceil($n / $a) * $a; /*(14/5) * 5 = 3 * 5 = 15*/
$end = floor ($m / $a) * $a; /*(32/5) * 5 = 6 * 5 = 30   $end = $m - $m % $a; */
for ($i = $start; $i <= $end; $i+=$a) {
    echo "$i";
}


/*WHILE NACIN SAM*/
$n = $i = 15;
$m = 32;
$a = 5;
while ($i <= $m) {
    if ($i % $a == 0) {
        echo "$i ";
    }
    $i++;
}
echo "<hr>";


/*Zadatak 19.
Ispisati brojeve od $n do $m koji nisu deljivi sa $a. */
$n = $i = 1;
$m = 15;
$a = 2;
while ($i <= $m) {
    if ($i % $a != 0) {
        echo "$i ";
    }
    $i++;
}
echo "<hr>";

/*Zadatak 20.
Odrediti sumu brojeva od $n do $m koji nisu deljivi brojem $a. */
$suma = 0;
$n = $i = 1;
$m = 10;
$a = 2;
while ($i <= $m) {
    if ($i % $a != 0) {
        $suma += $i;
    }
    $i++;
}
echo "$suma";
echo "<hr>";

/*Zadatak 21.
Odrediti proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b. */
// 1. nacin
$n = 14;
$m = 32;
$a = 5;
$b = 10;
$proizvod = 1;
for ($i = $n; $i <= $m; $i++) {    
    if ($i % $a == 0 && $i % $b != 0) {  // if ($i % $a == 0 && !($i % $b == 0) <== stavili smo negaciju  // if ($i % $a == 0 && $i % $b > 0)
        $proizvod *= $i;
    }
}
echo "$proizvod";
echo "<hr>";

// 2. nacin
if ($a % $b == 0) {
    echo "<p>1</p>";
    echo "<hr>";
}
else {
    $start = ceil($n/$a) * $a;
    $end = floor($m/$a)  * $a;
    for ($i = $start; $i <= $end; $i+=$a) {
        if($i % $b == 0) {
            continue; // Kada dodje do ove linije ne izvrsava ono sto je unutar petlje, vec nastavlja na naredni korak u petlji
        }
        $p *= $i;
    }   
}
    echo "<p>1</p>";
    echo "<hr>";

/*WHILE*/
$n = $i = 14;
$m = 32;
$a = 5;
$b = 10;
$proizvod = 1;
while ($i <= $m) {
    if ($i % $a == 0 && $i % $b != 0) {
        $proizvod *= $i;
    }
    $i++;
}
echo "$proizvod";
echo "<hr>";

///////////////////////////////






?>