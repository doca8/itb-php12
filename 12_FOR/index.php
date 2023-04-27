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




?>