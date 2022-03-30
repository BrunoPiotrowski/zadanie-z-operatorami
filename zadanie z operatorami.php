<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = rand(1,20);
    $b = rand(1,20);
    $c = rand(1,20);
    $d = rand(1,20);
    $g = rand(1,20);
    $h = ($a+$b+$c+$d+$g);
    $br = ($h / 5);
    $aw = ($a + 41);
    $bw = ($b + 41);
    $cw = ($c + 41);
    $dw = ($d + 41);
    $gw = ($g + 41);
    $ae = chr($aw);
    $be = chr($bw);
    $ce = chr($cw);
    $de = chr($dw);
    $ge = chr($gw);
    echo "<br><br>Pierwsza liczba: $a";
     if($a%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";
    echo "<br><br>Druga liczba: $b";
     if($b%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";
    echo "<br><br>Trzecia liczba: $c";
     if($c%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";
    echo "<br><br>Czwarta liczba: $d";
     if($d%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";
    echo "<br><br>Piąta liczba: $g";
     if($g%2==0) echo "<br>Liczba jest parzysta";
     else echo "<br>Liczba jest nieparzysta";
    echo "<br><br>Suma liczb to: $h";
    echo "<br>Średnia arytmetyczna to: $br";
    echo "<br>$ae $be $ce $de $ge"
    ?>
</body>
</html>