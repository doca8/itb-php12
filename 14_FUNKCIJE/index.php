<?php
function mojaFunkcija(){
    echo "<p>Moja prva funkcija</p>";
}

mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();

echo "<hr>";

function mojaFunkcija2($tekst) {
    $b ="Nova promenljiva";
    echo "<p>F-ja sa parametrom: $tekst i $b</p>";
}

mojaFunkcija2("1. nacin");
$a = "2. nacin";
$c = "Globalni";
mojaFunkcija2($a);
// echo $b; ovo ne moze jer je $b definisiano u funkciji
$b = "van f-je";
mojaFunkcija2($a);
echo $b;
echo "<hr>";

//////////////////////////////

function ispisImena($ime, $prezime) {
    echo "<p>Ime i prezime je: $ime $prezime</p>";
}
ispisImena("Petar", "Petrovic");
$i = "Lazar";
$p = "Lazic";
ispisImena($i, $p);
echo "<hr>";

function ispisImena2($ime, $prezime=null, $godine) {
    echo "<p>Ime je: $ime";
    if($prezime) {
        echo " a prezime je: $prezime";
    }
    echo " ima godina $godine";
    echo "</p>";
}
ispisImena2("Mika", null, 25);
ispisImena2("Mika", "Mikic", 28);
echo "<hr>";

/**
 * @param int $a - prvi parametar broj
 * @param int $b - drugi parametar broj
 * 
 * @return [type] - zbir dva broja
 */
function zbir(int $a, int $b) {
    $c = $a + $b;
    // echo "<p>$c</p>";
    return $c;
}
$pom = zbir(3, 8);
echo "<p>$pom</p>";
echo zbir(3, "10");
// zbir(3, "a"); - ovo nije moguce
echo "<br>";
echo zbir(zbir(3, 5), 10);


$a = zbir(4, 9);
$b = zbir(5, 10);
$c = zbir($a, $b);
echo "<hr>";
echo $c;
echo "<hr>";

echo zbir(zbir(4, 9), zbir(5, 10));

//  include();        // - nece da pravi problem ako napravimo gresku
//  require();         // - izbacice gresku (kada se oslanjamo na neku funkciju onda moramo require da bi proverili)

function uvecaj(&$vrednost, $korak){
	$vrednost=$vrednost+$korak;
}
echo "<hr>";
$a = 10;
uvecaj($a, 2);
echo $a;
echo "<hr>";

/*Zadatak 1.
Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.Pozvati funkciju i testirati njen rad. */
    function neparan($broj){
        // echo "<p>Pocetak f-je</p>";
        $rez = true;
        if($broj % 2 == 0){
            $rez = false;
        }
        // echo "<p>Kraj f-je</p>";
        return $rez;
    }

    $a = 17;
    if (neparan($a)) {
        echo "<p>Broj je neparan</p>";
    }
    else {
        echo "<p>Broj je paran</p>";
    }
    echo "<hr>";

    /*Zadatak 2.
    Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.
    Pozvati funkcije i testirati njihov rad. */
    function maks2($a, $b) {
        if ($a > $b) {
            return $a;
        }
        else {
            return $b;
        }
    }

    $broj1 = 150;
    $broj2 = 45;
    $veci = maks2($broj1, $broj2); // $maks = maks2(88, 54);
    echo "<p>Veci od brojeva $broj1 i $broj2 je: $veci</p>";

    function maks4($a, $b, $c, $d) {
        /*
        $maksAB = maks2($a, $b);
        $maksCD = maks2($c, $d);
        $maks = maks2($maksAB, $maksCD);
        return $maks;
        */

        return maks2(maks2($a, $b), maks2($c, $d));       
    }

    $b1 = 10;
    $b2 = 25;
    $b3 = 0;
    $b4 = 10;
    $r = maks4($b1, $b2, $b3, $b4);
    echo "<p>Maksimalni od brojeva $b1, $b2, $b3, $b4 je: $r</p>";
    echo "<hr>";

    function kub($a) {
        return $a * $a * $a;
    }

    $broj = 10;
    $broj = kub($broj);
    echo "<p>$broj</p>";
    echo "<hr>";

    function uvecaj2($a, $korak=10) {
        return $a+$korak;
    }

    $broj = 15;
    $broj = uvecaj2($broj);
    echo "<p>$broj</p>";
    echo "<hr>";

    function proba($a=1, $b=3, $c=10) {
        return $a+$b+$c;
    }

    echo proba(1, 33);
    echo "<hr>";

    /*Zadatak 3.
    Napisati funkciju slika kojoj se prosleđuje url adresa slike, 
    a funkcija prikazuje sliku za prosleđenu adresu slike.
    Pozvati funkciju i testirati je za različite url adrese. */

    function slika($url) {
        echo "<img src='$url'>";
    }
    slika('https://picsum.photos/200/300');
    echo "<hr>";

    /*Zadatak 4.
    Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. 
    Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je. */

    function obojenaRec($boja, $tekst) {
        echo "<p style='color:$boja'>$tekst</p>";
    }

    obojenaRec('red', 'Ovo je tekst crvene boje');
    obojenaRec('blue', 'Ovo je tekst plave boje');
    echo "<hr>";

    /*Zadatak 5.
    Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba
    da bude jednaka vrednosti iteratora (sami odredite startnu vrednost
    iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju */
    function recenica1() {
        for ($i = 10; $i < 35;$i += 5) {
            echo "<p style= 'font-size:$i'>Recenica</p>";
        }
    }

    recenica1();
     echo "<hr>";

     /*Zadatak 6.
     Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu.
    Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju. */
    function recenica2() {
        for ($i = 10; $i < 35; $i += 5) {
            echo "<p style ='font-size:$i'>Proizvoljna recenica</p>";
        }
    }

    recenica2();
    echo "<hr>";

    // function recenica2($font) {
    //     echo "<p style ='font-size:$i'>Proizvoljna recenica</p>";
    // }
    // for ($i = 10; $i < 35; $i += 5) {
    // }
    /*Zadatak 7.
    Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. 
    Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju. */
    function aritmeticka($n, $m) {
        $suma = 0;
        $delilac = 0;
        for ($i = $n; $i <= $m; $i++) {
            $suma += $i;
            $delilac++;
        }
        $arsr = $suma / $delilac;
        return $arsr;
    }
    $srednjaVrednost = aritmeticka(5, 15);
    echo "<p>Aritmeticka sredina brojeva je : $srednjaVrednost</p>";
    echo aritmeticka(2, 5);
    echo "<hr>";

    function aritmeticka1($n, $m) {
        return ($n + $m) / 2;
    }

    echo aritmeticka1(12, 0);
    echo "<hr>";

    /*Zadatak 8.
    Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.
    Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju. */ 
    function aritmetickaCifre($n, $m) {
        $zbir = 0;
        $nBroj = 0;
        for ($i = $n; $i <= $m; $i++) {
            if ($i%10==3) {
                $zbir+=$i;
                $nBroj++;
            }
        }
  
    if ($nBroj) {    //  if($nBroj !=0);  if($nBroj > 0); FALSE ako je 0 ide onda u ELSE GRANU, u ostalim slucajevima  je TRUE i ostaje u IF grani.
        return $zbir/$nBroj;
    }
    else {
        return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
    }
}
   

    // if ($nBroj) {    //  if($nBroj !=0);  if($nBroj > 0); FALSE ako je 0 ide onda u ELSE GRANU, u ostalim slucajevima  je TRUE i ostaje u IF grani.
    //     return $zbir/$nBroj;
    // }
   
    // return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";


    echo aritmetickaCifre(5, 13);

    $a = 45;
    $b = 150;
    echo aritmetickaCifre($a, $b);

    /*Zadatak 9.
    Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara.
    Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
    Napišite funkciju praksa kojoj se prosleđuju brojevi n i a i d.
    Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
    Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća). */

    function praksa($n, $a, $d) {
        $ukupno = $a;
        // for ($i = 2; $i <= $n; $i++) {
        //     $ukupno += $a + $d;
        // }
        // return number_format($ukupno, 2, ',', '.');
        return number_format ($ukupno = $a + ($n - 1) * ($a + $d));
    }

    function praksa2($n, $a, $d) {
        $ukupno = 0;
        for ($i = 1; $i <= $n; $i++) {
            $ukupno += $a + $d;
        }
        return $ukupno - $d;  // $ukupno = $n * ($a + $d) - $d;
    }

    echo "<hr>";
    $n = 10;
    $a = 1000;
    $d = 120;

    echo praksa($n, $a, $d);
    echo "<hr>";

    /*Zadatak 10.
    Napraviti niz celih brojeva.
    Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
    Pozvati funkciju i testirati je. */
    function neparan1($broj){
        $rez = true;
        if($broj % 2 == 0){
            $rez = false;
        }
        return $rez;
    }

    $a = 17;
    if (neparan1($a)) {
        echo "<p>Broj je neparan</p>";
    }
    else {
        echo "<p>Broj je paran</p>";
    }

    $celiBrojevi = array(2, 4, 6, 7, 8, 9, 11);

    foreach ($celiBrojevi as $neparan) {
        if (neparan1($neparan)) {
            echo "$neparan ";
        }
    }
    echo "<hr>";

    // BETIN NACIN:
    // $niz= [81, -47, 5, 2, 0, 10, -15];
    // // for ($i = 0; $i < count($niz); $i++)
    // for ($i = 0; $i <= count($niz)-1; $i++) {
    //     if(neparan($niz[$i])) {
    //         echo "<p>". $niz[$i] . "</p>";
    //     }
    // }

    foreach ($celiBrojevi as $v) {
        if (neparan($v)){
            echo "<p>". $v ."</p>";
        }
    }

    /*Zadatak 11.
    Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, 
    a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz.
    Pozvati funkciju i testirati je. */
    function brojNeparnih($arr) {
        $brojNeparnih = 0;
        // $str="";
        for ($i = 0; $i < count($arr); $i++) {
            if (neparan($arr[$i])) {
                $brojNeparnih++;
                // $str.=$arr[$i]"".;
            }
        }
        return $brojNeparnih;
    }
    echo "<p>Broj neparnih u nizu je:" .brojNeparnih($celiBrojevi) . "</p>";
    echo "<hr>";

    /*Zadatak 12.
    U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha.
    Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura.
    Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža,
    a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. Testirati implementirani kod. */


    function najnizaTemp($arr) {
        $minTemp = 100;
        $Mindatum ="";
        $minDan = 0;
        $dan = 1;
        foreach ($arr as $datum => $temp) {
            if ($minTemp > $temp) {
                $minTemp = $temp;
                $minDatum = $datum;
                $minDan = $dan;
            }
            $dan++;
        }
        $dani = ['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
        echo "<p style='color: blue'>".$dani[$minDan-1]." ". $minDatum." sa temp ".$minTemp."</p>";
    }


    $niz = [
        '01.05.2023' =>19,
        '02,05,2023' =>22,
        '03.05.2023' =>18,
        '04.05.2023' =>15,
        '05.05.2023' =>25
    ];















?>