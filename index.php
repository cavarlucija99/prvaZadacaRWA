<!DOCTYPE html>
<html lang = "hr">
<head>
    <meta name="student" content="Lucija Cavar 2245/RR">
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Lucija Ćavar 2245RR</title>
    <style>
        body{
            font-family: Garamond, serif;
            text-align: left;
            background-color: #101909;
            color: #72b43a;
        }
        h3{
            text-align: center;
            background: #293f16;
            padding: 5px;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>
<?php
    echo "<h3>PRVI: Lista brojeva i njihovih kvadrata:</h3>";
//prvi zadatak u kojem je potrebno ispisati brojeve od 1 do 20 te njihove kvadrate
    for ($i = 1; $i < 21; $i++) {
        $kvadrat = $i * $i;
        echo "Broj $i na kvadrat je: <b>$kvadrat</b>  | ";
    }
//drugi zadatak u kojem je potrebno pomoću for petlje zbrojiti prvih 100 brojeva
    $suma = 0;
    $i = 1;
    for($i = 0; $i < 101; $i++){
        $suma += $i;
    }
    echo "<h3>DRUGI: Suma prvih 100 brojeva s for petljom je:</h3>";
    echo "$suma";
    $suma = 0;
    $i = 1;
//treći zadatak u kojem je potrebno pomoću while petlje zbrojiti prvih 100 brojeva
    while ($i < 101) {
        $suma += $i; 
        $i++;        
    }

    echo "<h3>TRECI: Suma prvih 100 brojeva s while petljom je:</h3>";
    echo "$suma";
//četvrti zadatak u kojem ispisujemo sve parne brojeve od 1 do 100
    echo "<h3>CETVRTI: Parni brojevi od 1 do 100 su:</h3>";
    for ($i = 1; $i < 101; $i++) {
    if ($i % 2 == 0) {
        echo $i . " | ";
        }
    }
//peti zadatak u kojem je potrebno ispisati sve troznamenkaste parne brojeve
    echo "<h3>PETI: Svi troznamenkasti parni brojevi: </h3>";
    for($i = 100; $i < 1000; $i++){
        if ($i % 2 == 0) {
        echo $i . " | ";
        }
    }
//šesti zadatak u kojem ispisujemo sve dvoznamenkaste brojeve djeljive sa 3, 5 ili oboje
    echo "<h3>ŠESTI: Svi dvoznamenkasti brojevi djeljivi s 3 i 5 ili oba: </h3>";
    for($i = 10; $i < 100; $i++){
        if ($i % 3 == 0 || $i % 5 == 0) {
        echo $i . " | ";
        }
    }
//sedmi zadatak a) u kojem treba ispisati prosječan broj stanovnika kroz sve godine
    echo "<h3>SEDMI a): Prosječan broj stanovnika kroz godine: </h3>";

    $grad = array(1995 => 24000, 1997 => 25510, 1998 => 29154, 2000 =>32124, 2002 => 33114);
    echo "<pre>";
    print_r($grad);
    echo"a njihov ukupan prosjek je: ";
    echo array_sum($grad) / count($grad);
//sedmi zadatak b) treba ispisati u kojoj godini je bilo najvise stanovnika
    echo "<h3>SEDMI b): Najviše stanovnika bilo je godine: </h3>";
    echo(max(array_keys($grad)));
//sedmi zadatak c) koji ispisuje koliko godina se provodilo mjerenje
    echo "<h3>SEDMI c): Koliko godina se provodilo mjerenje?: </h3>";
    $i = count($grad);
    echo $i;
//osmi zadatak ispisuje sve proste brojeve manje od 100
    echo "<h3>OSMI: Posti brojevi manji od 100: </h3>";
    for($i = 0; $i < 100; $i++){
        $kontrola = 0;
            for($j = 2; $j < $i; $j++){
                if($i % $j == 0){
                    $kontrola++;
                }
            }
            if($kontrola == 0){
            echo $i . " | ";
            }
    }
//deveti zadatak zbraja brojeve iz polja uz pomoć foreach petlje
    echo "<h3>DEVETI: Zbrajanje brojeva iz polja uz foreach: </h3>";
    $brojevi = array( 1, 22, 3, 4, 5, 55, 12, 49,94, 23, 7);
    $zbroj = 0;
    foreach($brojevi as $value){
        $zbroj += $value;
    }
    echo "Zbroj brojeva je $zbroj";
//deseti zadatak računa površinu pravokutnika
    echo "<h3> DESETI: površina: </h3>";
    $a = 34;
    $b = 85;
    $pov_pravokutnika = $a * $b;
    echo "Površina pravokutnika širine $a cm i dužine $b cm iznosi $pov_pravokutnika cm^2"; 
?>
</body>
</html>