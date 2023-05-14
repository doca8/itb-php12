<?php

    // Bez nizova
    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    // Sa nizovima
    $cars = array("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
    // Elementi ovog nizu su: "BMW", "Volvo", "Toyota"
    // Indeksi elemenata ovog niza su: 0, 1, 2
    // Broj elemenata u ovom nizu je 3

    // Najdetaljnije ispisuje podatake
    var_dump($cars);
    var_dump($car1);
    echo "<hr>";

    // Najmanje detaljno ispisuje
    echo "$car1";
    echo "$cars";
    echo "<hr>";

    print_r($cars);
    echo "<hr>";

    // Pristupanje elementima
    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];

    echo "$prviElement, $drugiElement, $treciElement";
    echo "<p>Prvi element u nizu je: $cars[0]</p>";
    echo "<p>Osmi element u nizu je: $cars[7]</p>"; // Undifined arrey key

    // Izmena elemenata se vrši ukoliko pod tim indeksom u nizu već postoji neki element
    $cars[1] = "Peugeot";
    print_r($cars);

    // Dodavanje elementa će se vršiti ukoliko pod navedenim indeksom ne postoji već element u nizu
    $cars[30] = "Audi";
    print_r($cars);

    //////////////////////////////////////

    // 1. ZADATAK
    // Ispisati sve elemente niza od 5 stringova.
    $polaznici = array(); // $polaznici = [];
    $polaznici[] = "Aleksandar";
    $polaznici[] = "Uroš";
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    print_r($polaznici);

    $duzina = count($polaznici); // Prebrojava koliko polaznika ima tj. koliko ima elemenata u nizu
    echo "<p>U nizu ima $duzina polaznika.</p>";

    for($i=0; $i<$duzina; $i++) {
        echo "<p>$polaznici[$i]</p>";
    }

    /////////////////////////

    // 2. ZADATAK
    // Odrediti zbir elemenata celobrojnog niza.

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        $suma += $brojevi[$i];
    }
    echo "<p>Suma elemenata je: $suma</p>";

    // Ugrađena funkcija 
    $zbir = array_sum($brojevi);
    echo "<p>Zbir elemenata niza je: $zbir</p>";

    /////////////////////////

    // 3. ZADATAK
    // Odrediti srednju vrednost elemenata celobrojnog niza.

    $brElemenata = count($brojevi);
    $arsr = $zbir / $brElemenata; // $arsr = array_sum($brojevi) / count($brojevi);
    echo "<p>Aritmetička sredina je: $arsr</p>";

    $brojevi = [];
    $brElemenata = count($brojevi);
    // Dopuna - 1. način
    if($brElemenata == 0) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 2. način
    if(empty($brojevi)) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 3. način
    if($brojevi == []) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 4. način
    if($brojevi == array()) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }

    // Dopuna - 5. način
    if(!$brojevi) {
        echo "<p>Prazan niz - aritmetička sredina je 0</p>";
    }
    else {
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmetička sredina je: $arsr</p>";
    }
    echo "<hr>";

    /////////////////////////

    // 4. ZADATAK
    // Odrediti maksimalnu vrednost u celobrojnom nizu.
    // Koji je najveći broj u celobrojnom nizu.

    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $maks = $brojevi[0]; 
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i]; // dokle smo stigli sa pregledavanjem niza
        if($trenutniElement > $maks) {    
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najveći element ovog niza je $maks</p>";
    echo "<hr>";

    /////////////////////////

    // 5. ZADATAK
    // Odrediti minimalnu vrednost u celobrojnom nizu.
    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $min = $brojevi[0];
    for ($i = 0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement < $min) {
            $min = $trenutniElement;
        }
    }
    echo "<p>Najmanji element ovog niza je $min</p>";
    echo "<hr>";
    

    ///////////////////////// 

    // 6. ZADATAK
    // Odrediti indeks najvećeg elementa celobrojnog niza.
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6

    // 6.1. indeks prvog pojevljivanja max elementa

    // 1. način
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $treutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    for($i=0; $i<count($brojevi); $i++) {
        $treutniElement = $brojevi[$i];
        if($treutniElement == $maks) {
            $indeksMaks = $i;
            break;
        }
    }

    // 2. način
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; // 14
            $indeksMaks = $i; // 1
        }
    }
    echo "<p>Najveći element ima vrednost $maks, a indeks njegovog prvog pojavljivanja je $indeksMaks</p>";

    // 6.1. indeks poslednjeg pojevljivanja max elementa
    // 1. način
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement >= $maks) {
            $maks = $trenutniElement; // 14
            $indeksMaks = $i; // 6
        }
    }
    echo "<p>Najveći element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";

    // 2. način
    $brojevi = [17, 17, 5, 14, -4, 14, 11, -7, 14, 5, 4]; // indeksi: 1, 3, 6
    $brElemenata = count($brojevi); // 7
    $indeksMaks = $brElemenata - 1;
    $maks = $brojevi[$indeksMaks];
    for($i=$indeksMaks; $i>=0; $i--) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; 
            $indeksMaks = $i; 
        }
    }
    echo "<p>Najveći element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";


    // Svi maksimumi

    // 1. način
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0]; // 5
    // 1. prolazak određuje maksimum
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; 
        }
    }
    echo "Najveći element ima vrednost $maks, a indeksi pojavljivanja ovog elementa su: ";

    // 2. prolazak traži sve elemente jednake maksimumu i beleži njihove indekse
    $sviIndeksiMaks = [];
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement == $maks) {
            $sviIndeksiMaks[] = $i;
            echo "$i; ";
        }
    }
    echo "<hr>";

    // 2. način
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14]; // indeksi: 2, 4, 7
    $maks = $brojevi[0];
    $sviIndeksiMaks = [];
    for($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement; 
            $sviIndeksiMaks = [$i];
        }
        elseif($trenutniElement == $maks) {
            $sviIndeksiMaks[] = $i;
        }
    }
    

    echo "Najveći element ima vrednost $maks, a njegovi indeksi pojavljivanja su: ";
    // $sviIndeksiMaks = [2, 4, 7];
    for($i=0; $i<count($sviIndeksiMaks); $i++) {
        echo "$sviIndeksiMaks[$i]; ";
    }
    echo "<hr>";
    // Ispis niza može i sa implode

    ///////////////////////// 

    // 7. ZADATAK
    // Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.
    $brojevi = [1, 2, 15];
    //NETACAN PRISTUP:
    // $zbir = 0;
    // $broj = 0;
    // for ($i = 0; $i < count($brojevi); $i++) {
    //     $zbir += $brojevi[$i];
    //     $arsr = $zbir / count($brojevi);
    //     if ($brojevi[$i] > $arsr) {
    //         $broj++;
    //     }
    // }

    $zbir = 0;
    $broj = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        $zbir += $brojevi[$i];
    }
    $arsr = $zbir / count($brojevi);
    for ($i = 0; $i < count($brojevi); $i++){
        if ($brojevi[$i] > $arsr) {
            $broj++;
        }
    }      
    echo "<p>Broj brojeva vecih od srednje vrednosti niza je: $broj</p>";
    echo "<hr>";

    ///////////////////////// 

    // 8. ZADATAK
    // Izračunati zbir pozitivnih elemenata celobrojnog niza.
    $brojevi = [10 ,3, 50, 9];
    $zbir = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] > 0) {
            $zbir += $brojevi[$i];
        }
    }
    echo "<p>Zbir pozitivnih elemenata je: $zbir</p>";
    echo "<hr>";

    //Bonus zadatak
    // Izracunati srednju vrednost parnih elemenata celobrojnog niza 
    $zbir = 0;
    $broj = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] % 2 == 0) {
            $zbir += $brojevi[$i];
            $broj++;
        }
    }
    if ($broj != 0) {
        $arsr = $zbir / $broj;
    } 
    else {
        $arsr = 0;
    }
    echo "<p>Srednja vrednost parnih elemenata celobrojnog niza je: $arsr</p>";
    echo "<hr>";

    ///////////////////////// 

    // 9. ZADATAK
    // Odrediti broj parnih elemenata u celobrojnom nizu.
    $brojevi = [0, 1, 2, 3, 4, 5, 6];
    $brojac = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] % 2 == 0) {
            $brojac++;
        }
    }
    echo "<p>Broj parnih elemenata u celobrojnom nizu je: $brojac</p>";
    echo "<hr>";

    ///////////////////////// 

    // 10. ZADATAK
    //  Izračunati sumu elemenata u nizu sa parnim indeksom.
    $brojevi = [10, 9, 15, 50, -5];  /*1 + 15 + 0 + 4 = 20*/
    $suma = 0;
    for ($i = 0; $i < count($brojevi); $i += 2) {
        $suma += $brojevi[$i];
    }
    echo "<p>Suma elemenata u nizu sa parnim indeksom je: $suma</p>";
    echo "<hr>";
    ///////////////////////// 

    // 11. ZADATAK
    // Promeniti znak svakom elementu celobrojnog niza.
    var_dump($brojevi);
    echo "<br>";
    $brojevi = [10, 9, 15, 50, -5];
    for ($i = 0; $i < count($brojevi); $i++) {
        $brojevi[$i] *= -1;
        // $brojevi[$i] = $brojevi[$i] * (-1);
        //$brojevi[$i] = -$brojevi[$i];
    }
    var_dump($brojevi);
    echo "<hr>";
    ///////////////////////// 

    // 12. ZADATAK
    // Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.
    $brojevi = [5, 2, -3, 4, -5, -6];
    var_dump($brojevi);
    echo "<br>";
    for ($i = 0; $i < count($brojevi); $i += 2) {
        if ($brojevi[$i] % 2 != 0) {
            $brojevi[$i] *= -1;
        }
    }
    var_dump($brojevi);
    echo "<br>";

    //Drugi nacin:
    $brojevi =[10, 9, 15, 50];
    var_dump($brojevi);
    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($i % 2 == 0 && $brojevi[$i] % 2 != 0)
        {
                $brojevi[$i] *= -1;
        }
    }
    var_dump($brojevi);
    echo "<hr>";

    /////////////////////////     

    // 13. ZADATAK
    // Odrediti broj parnih elemenata sa neparnim indeksom.
    $brojevi = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $brojac = 0;
    for ($i = 1; $i < count($brojevi); $i += 2) {
        if ($brojevi[$i] % 2 == 0) {
            $brojac++;
        }
    }
    echo "<p>Broj parnih elemenata sa neparnim indeksom je: $brojac</p>";
    echo "<hr>";

    //Drugi nacin:
    $brojevi =[10, 9, 15, 50];
    $brojElem = 0;
    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($i % 2 != 0 && $brojevi[$i] % 2 == 0)
        {
                $brojElem++;
        }
    }
    echo "<p>Broj parnih elemenata sa neparnim indeksom je: $brojElem</p>";
    echo "<hr>";
    /////////////////////////    

    // 14. ZADATAK
    // Ispisati dužinu svakog elementa u nizu stringova.
    $imena = ["Stefan", "Aleksandar", "Adam", "Marija", "Dunja", "Milijana", "Djordje"];
    for ($i = 0; $i < count($imena); $i++) {
        $ime = $imena[$i];
        // $duzina = mb_strlen($ime, "UTF-8"); ako hocemo nasa slova
        $duzina = strlen($ime);
        echo "<p>Duzina stringa $ime je $duzina</p>";
    }
    echo "<hr>";
    /////////////////////////   
    
    /*15. ZADATAK
     Odrediti element u nizu stringova sa najvećom dužinom. */
    //  $imena = ["Stefan", "Aleksandar", "Adam", "Marija", "Dunja", "Milijana", "Djordje"];
     $imena = ["Stefan", "Marija", "Ana"];
     $stringMaxDuzine = $imena[0];
     $maxDuzina = strlen($imena[0]);

     for ($i = 1; $i < count($imena); $i++) {
        if (strlen($imena[$i]) > $maxDuzina) {
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
     }
     echo "<p>Element niza sa maksimalnom duzinom je: $stringMaxDuzine</p>";
     echo "<hr>";

     /////////////////////////  

     /*16. ZADATAK
     Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu. */

     ///////////////////////// 

     /*17. ZADATAK
      Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'. */

      //Kako da odredimo da li se u nekom stringu nalazi neki podstring?
     //Ovde funkcija ne utice na logiku zadatka zato je koristimo
     //Koristimo funkciju strpos($str1, $str2);
     //Rezultat poziva ove funkcije:
     // 1) Ako se $str2 nalazi unutar $str1, onda se vraca INDEKS prvog pojavljivanja
     //Kao rezultat se vraca CEO BROJ(0, 1, 2, 3, ....)
     // 2) Ako se $str2 ne nalazi u $str1, onda se vraca FALSE
     //Vraca se LOGICKA VREDNOST
     //MORAMO DA PROVERIMO DA LI JE !== false i po VREDNOSTI i po TIPU!!! JAKO BITNO
     //Nece da radi bas kod stringova koji se nalaze na pocetku

    //  if (strpos("Sredaaaa", "S") !== false) {
    //     echo "<p>String 'S' se nalazi u stringu 'Sredaaaa'</p>";
    //  }
    //  else {
    //     echo "<p>String 'S' se ne nalazi u stringu 'Sredaaaa'</p>";
    //  }
    //  echo "<hr>";
    $imena = ["Stefan", "Marija", "Ana", "Uros", "Djordje"];
    $brojSadrziA = 0;
    for ($i = 0; $i < count($imena); $i++) {
        if (strpos($imena[$i], "a") !== false) {
            $brojSadrziA++;
        } 
    }
    echo "<p>Broj stringova koji sadrze slovo 'a' je: $brojSadrziA</p>";
    echo "<hr>";


      ///////////////////////// 

      /*18. ZADATAK
      Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'. */
      $imena = ["Stefan", "Marija", "Ana", "Uros", "Djordje"];
      $brojPocinjeA = 0;
      for ($i = 0; $i < count($imena); $i++) {
        //   if (strpos($imena[$i], "a" === 0) || strpos($imena[$i], "A" === 0 )) 
        // if($imena[$i][0] == 'a' || $imena[$i][0] == 'A')
        if (strtolower($imena[$i][0]) == 'a')
        {
              $brojPocinjeA++;
          } 
      }
      echo "<p>Broj stringova koji sadrze slovo 'a' je: $brojPocinjeA</p>";
      echo "<hr>";

     ///////////////////////// 

     /*19. ZADATAK
      Na osnovu celobrojnog niza $a[0], $a[1], … formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve. */

      ///////////////////////// 

      /*20. ZADATAK
       Dati su nizovi 
        $a[0], $a[1], …, $a[n - 1] i  
        $b[0], $b[1], …, $b[n - 1]. 
        Formirati niz $c[0], $c[1], …, $c[2n – 1] čiji su elementi 
        $a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n - 1]. */

    ///////////////////////// 

    /*21. ZADATAK
    Dati su nizovi 
$a[0], $a[1], …, $a[n - 1] i  
$b[0], $b[1], …, $b[n - 1]. 
Formirati niz $c[0], $c[1], …, $c[n – 1] čiji su elementi 
$a[0] * $b[0], $a[1] * $b[1], …, $a[n – 1] * $b[n – 1]. */




    

?>