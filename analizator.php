<?php
$suma_wszystkich = 0;
$suma_parzystych = 0;
$suma_nieparzystych = 0;
$licznik_podzielnych_3 = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma_wszystkich += $i;
    
    if ($i % 2 == 0) {
        $parzystosc = "parzysta";
        $suma_parzystych += $i;
    } else {
        $parzystosc = "nieparzysta";
        $suma_nieparzystych += $i;
    }
    
    echo "$i - $parzystosc";
    
    if ($i % 3 == 0) {
        echo ", podzielna przez 3";
        $licznik_podzielnych_3++;
    }


    echo "<br>\n";
}

echo "<hr>";
echo "<h2>Podsumowanie</h2>";
echo "Suma wszystkich liczb: $suma_wszystkich<br>";
echo "Suma liczb parzystych: $suma_parzystych<br>";
echo "Suma liczb nieparzystych: $suma_nieparzystych<br>";
echo "Liczb podzielnych przez 3: $licznik_podzielnych_3<br>";
?>
