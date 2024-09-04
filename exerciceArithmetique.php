<?php
    require 'partials/head.php';
?>
<?php

// EXERCICE 1
    $a = 5;
    $b = 15;

    $addition = $a + $b;
    $soustraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulo = $a % $b;

    echo "<p>Le résultat de $a + $b est de $addition</p>";
    echo "<p>Le résultat de $a - $b est de $soustraction</p>";
    echo "<p>Le résultat de $a x $b est de $multiplication</p>";
    echo "<p>Le résultat de $a / $b est de $division</p>";
    echo "<p>Le résultat de $a % $b est de $modulo</p>";


    // EXERCICE 2
    $a += $b;
    echo "<p>$a</p>";

    $a -= $b;
    echo "<p>$a</p>";

    $a *= $b;
    echo "<p>$a</p>";

    $a /= $b;
    echo "<p>$a</p>";

    $a %= $b;
    echo "<p>$a</p>";


    // EXERCICE 3
    $counter = 10;
    ++$counter;
    echo "<p>$counter</p>";
    $counter = 10;
    --$counter;
    echo "<p>$counter</p>";

    // EXERCICE 4
    $num = 10;
    $num++;
    echo "<p>$num</p>";
    $num = 10;
    $num--;
    echo "<p>$num</p>";

    // EXERCICE 5
    $age = 26;
    ++$age;
    --$age;

    // EXERCICE 6
    $note1 = 12;
    $note2 = 17;
    $note3 = 8;

    $totalNote = $note1 + $note2 +$note3;
    $moyenne = $totalNote / 3;
    echo "<p>$moyenne</p>";

    $note4 = 6;
    $totalNote += $note4;
    $moyenne = $totalNote / 4;
    echo "<p>$moyenne</p>";

    // EXERCICE 7
    $total = 37;
    $resultat = ($total % 2 === 0) ? "Pair" : "Impair";
    echo "<p>Le numéro est $resultat</p>";

    // EXERCICE 8
    $quantity = 5;
    $quantity += 3;
    $quantity -= 2;
    echo "<p>$quantity</p>";

    //EXERCICE 9
    $kilometres = 100;
    $kmDiffToMiles = 0.621371;
    $kmToMiles = $kilometres * $kmDiffToMiles;
    echo "<p>$kmToMiles</p>";

    //EXERCICE 10
    $score = 50;
    $score += 10;
    $score -= 5;
    echo "<p>$score</p>"
?>
<?php
    require 'partials/footer.php';
?>