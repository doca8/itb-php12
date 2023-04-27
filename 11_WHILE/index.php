<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>


<?php

// WHILE PETLJA
/* 
    1. Postavite pocetnu vrednost - inicijalizacija
    2. while(uslov)
       2.a. TRUE - Blok naredbi koji se odvija ukoliko je uslov u while petlji ispunjen
       2.b. FALSE - Ne izvrsava se blok naredbi unutar while petlje vec se prelazi na kod ispod bloka
*/

// Zadatak 1.
// pod a
$i = 1;
while ($i <= 20) {
    // echo "$i "; pod a
    echo "<p>$i</p>";  /*pod b, moze i <br>, <div></div>*/
    $i++;  /*da nema ovog koraka bila bi BESKONACNA PETLJA i vrv bi komp zablokirao */
}
echo "<i>$i</i>";
// $i ima vrednost 21 nakon izvrsenja ove while petlje


// EKVIVALENTNI IZRAZI(isti) za povecavanje za 1 su:
// $i++;   
// $i += 1;
// $i = $i + 1;

// EKVIVALENTNI IZRAZI za smanjivanje za 1 su:

// $i--;
// $i -= 1;
// $i = $i - 1;

// Zadatak 2.
// Ispisati brojeve od 20 do 1.
$i = 20;
while ($i >= 1){
    echo "$i ";
    $i--;
}
echo "<i>$i</i>";
// $i ima vrednost 0 nakon izvrsenja ove while petlje

// Zadatak 4.
// Kreirati n  paragrafa sa proizvoljnim tekstom 
// i naizmenicno ih obojiti u tri razlicite boje
$n = 5;
$i = 1;
while ($i <= $n){
    if ($i % 3 == 0){
        echo "<p style='color:red;'>Hello $i</p>";
    }
    elseif ($i % 3 == 1){
        echo "<p style='color:blue;'>Hello $i</p>";
    }
    else{
        echo "<p style='color:orange;'>Hello $i</p>";
    }   
    $i++;
}

// Drugi nacin
$n = 5;
$i = 1;
while ($i <= $n){
    if ($i % 3 == 0){
        $boja = "purple";
        
    }
    elseif ($i % 3 == 1){
        $boja = "lime";
        
    }
    else{
        $boja = "magenta";
       
    }   
    echo "<p style='color:$boja;'>Hello $i</p>";
    $i++;
}

// Treci nacin
$n = 5;
$i = 1;
while ($i <= $n){
    $boja = "magenta";
    if ($i % 3 == 0){
        $boja = "purple";
        
    }
    elseif ($i % 3 == 1){
        $boja = "lime";
        
    } 
    echo "<p style='color:$boja;'>Hello $i</p>";
    $i++;
}

// Zadatak 3.  ima i drugi nacin ($i +=)
$i = 1;

while ($i <= 20){
    if ($i % 2 == 0) {
        echo "$i ";
    }
    $i++;
}

// Zadatak 5.
$n = 5;
$i = 1;
while ($i <= $n)
 {
    $okvir = " 'border: 5px solid blue';";
    $okvir2 = " 'border: 5px solid yellow';";
    if ($i % 2 == 0)
    {
        echo ' <img style = ' . $okvir . ' src="img/puppies.jpg">';
    }
    else 
    {
        echo ' <img style = ' . $okvir2 . ' src="img/puppies.jpg">'; 
    }
    $i++;
}

// 2 Nacin sa style css ( imas u github kodu)

//////////////////////////////////////

// Zadatak 6.
// Odrediti sumu brojeva od 1 do 100
// Na intervjuu moze biti pitanje npr ( NAJBOLJE KROZ TABLICU)
$i = 1;
$suma = 0;
while ($i <= 100) {
    $suma += $i;
    $i++;
}
echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";

// Zadatak 7.
$i = 1;
$n = 5;
$suma = 0;
while ($i <= $n) {
    $suma += $i;
    $i++;
}
echo "<p>Suma brojeva od 1 do $n je: $suma</p>";

// Zadatak 8.
$n = $i = 5;
$m = 10;
$suma = 0;

while ($i <= $m) {
    $suma += $i;
    $i++;
}
echo "<p>Suma brojeva od $n do $m je: $suma</p>";

// Zadatak 9.
// Odrediti proizvod brojeva od n do m
$p = 1;
$n = $i = 5;
$m = 7;
while ($i <= $m) {
    $p *= $i;
    $i++;
}
echo "<p>Proizvod brojeva od $n do $m je $p</p>";


// Zadatak 10.
// Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m 
$n = $i = 1;
$m = 10;
$sumaParni = 0;
$sumaNeparni = 0;
while ($i <= $m) {
    if ($i % 2 == 0) {
        $sumaParni += $i * $i; /* $i**2  to znaci $i na kvadrat */
        // moze i $sumaParni = ($i * $i) + $sumaParni;
    }
    else {
        $sumaNeparni += $i * $i * $i;  /* $i**3 to znaci $i na kubni */
    }
    $i++;
}
echo "<p>Suma kvadrata parnih brojeva od $n do $m je $sumaParni</p>";
echo "<p>Suma kubova neparnih brojeva od $n do $m je $sumaNeparni</p>";
echo "<hr>";

// Zadatak 11.
// Odrediti sa koliko brojeva je deljiv uneti broj k
// Trebace nam brojac jer zadatak kaze sa koliko brojeva.
$br = 0;
$k = 15;
$i = 1;
while ($i<=$k) {
    if ($k % $i == 0) {
        $br++;
    }
    $i++;
}
echo "<p>Broj $k ima $br delilaca</p>";
echo "<hr>";

/*Zadatak 12.
Odrediti da li je dati prirodan broj n prost. 
Broj je prost ako je deljiv samo sa jedan i sa samim sobom. 1 se ne ubraja u proste brojeve.
Broj mora da bude pozitivan celi broj koji je veci od jedinice.*/

// 1. nacin - 11 zadatak
$br = 0; /* sa koliko brojeva je deljiv uneti broj $k */
$k = 13;  /* uneti broj */
$i = 1;  /* iterator koji pokusava da deli uneti broj $k */
while ($i<=$k) {
    if ($k % $i == 0) {
        $br++;
    }
    $i++;
}
if ($br == 2) {
    echo "<p>Broj $k je prost</p>";
}
else {
    echo "<p>Broj $k nije prost</p>";
}
// kad bi IF stojalo u while petlji ispisalo bi 11 puta da $k nije prost a 2 puta je prost.

// Mozemo da idemo do kvadratnog korena nekog broja i da tako verujemo da ako nema deljenje onda je to prost broj dole pise sqrt
// while ($i <= sqrt($k)) 

//  2. nacin 
$k = 7;
$i = 2;  /* brojac i da krene od 2 jer svaki broj je deljiv sa 1 */
$prost = true; /* predpostavljam da je broj prost */
while ($i < $k) {
    if($k % $i == 0) {
        $prost = false;
        break; /* kad si doso do break prekini while petlju i izadji iz nje. Deluje na onu while petlju u kojoj se nalazi. */
    }
    $i++;
}
if ($prost) {    /*Nema potrebe da pitamo da li je $prost == true  */
    echo "<p>Broj $k jeste prost</p>";
}
else {
    echo "<p>Broj $k nije prost</p>";
}

/*Zadatak 13.
 Množiti sve brojeve od 20 ka 1, sve dok proizvod ne predje 10.000. 
 Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom. */
 $proizvod = 1;
 $i = 21;

 while ($proizvod <= 10000 && $i >= 1) {
    $i--;
    $proizvod *= $i;
    
 }

 if ($proizvod > 10000) {
    echo '<p style="color:red">' . $proizvod . '</p>';
 }
echo '<p style="color:green">' . ($i++) . '</p>';

// DRUGI NACIN
$i = 20;
$pro = 1;
while ($i >= 1) {
    $pro = $pro * $i;
    if($pro > 10000) {
        break;
    }
     $i--;
}
echo "<p>Poslednji broj koji je ucestvovao je $i</p>";
echo "<p>Proizvod je $pro</p>";

/*Zadatak 14.
Uneti 2 broja. Ukoliko je prvi broj manji od drugog broja, množiti prvi broj samim sobom, 
sve dok rezultat ne bude veći od drugog unetog broja.
 U suprotnom na ekranu ispisati “GREŠKA”. */





?>

