<?php
    require 'partials/head.php';
?>
<?php

    //EXERCICE 1
    $age = 50.8;
    $result = ($age >= 0 && $age <= 120 && is_int($age)) ? "Vous avez un âge valide" : "Votre âge n'est pas valide";
    echo "<p>$result</p>";

    //EXERCICE 2
    $montant = 48;

    if($montant > 100) {
        $total = $montant * 0.9;
        echo "<p>Mon montant est de $montant avec -10% il est maintenant à $total</p>";

    } else if (($montant >= 50) && ($montant <= 100)){
        $total = $montant *0.95;
        echo "<p>Mon montant est de $montant avec -5% il est maintenant à $total</p>";

    } else {
        $total = $montant;
        echo "<p>Mon montant est de $total</p>";
    }

    //EXERCICE 3
    $jour = 5;
    switch ($jour) {
        case '1':
            echo "<p>Nous somme Lundi!</p>";
        break;
        case '2':
            echo "<p>Nous somme Mardi!</p>";
        break;
        case '3':
            echo "<p>Nous somme Mecredi!</p>";
        break;
        case '4':
            echo "<p>Nous somme Jeudi!</p>";
        break;
        case '5':
            echo "<p>Nous somme Vendredi!</p>";
        break;
        case '6':
            echo "<p>Nous somme Samedi!</p>";
        break;
        case '7':
            echo "<p>Nous somme Dimanche!</p>";
        break;
        default :
            echo "<p>Nous perdu!</p>";
        break;
    };

    //EXERCICE 4
    $var1 = "5";
    $var2 = 5;
    $result = ($var1 === $var2) ? "les deux variables sont identique" : "les deux variable ne sont strictement pas égal";
    echo "<p>$result</p>";

    //EXERCICE 5
    $note1 = 5;
    $note2 = 16;
    $note3 = 14;
    $moyenne = ($note1 + $note2 + $note3) / 3;
    $resultat = ($moyenne >= 10) ? "Bravo tu a plus de la moyenne tu passe!" : "Tu na pas la moyenne looser ripbozo";

    echo "<p>$resultat</p>";

    // EXERCICE 6
    $var = '';
    if(isset($var)) {
        echo "<p>Tu exsiste</p>";
    } else {
        echo "<p>Tu n'exsiste pas</p>";
    }

    //EXERCICE 7
    if(!empty($nom)){
        echo "<p>Tu exsiste</p>";
    } else {
        echo "<p>Remplisser le champ</p>";
    }

    //EXERCICE 8
    $num = 5;
    if($num % 2 === 0){
        echo "<p>Le numéro est pair</p>";
    } else {
        echo "<p>Le numéro est impair</p>";
    }

    //EXERCICE 9
    $age = 45;

    if($age <= 12){
        echo "<p>Tu est un enfant (gros bébé va)</p>";
    } elseif($age > 12 && $age <= 18){
        echo "<p>Tu est un adolescent </p>";
    } elseif ($age > 18 && $age <= 50) {
        echo "<p>Tu est un adulte(bientot la mort) </p>";
    } else {
        echo "<p>Tu est un enfant (mais que dans la tête)</p>";
    }

    // EXERCICE 10
    $mdp = true;
    $touch = false;
    if($mdp  XOR $touch ){
        echo "<p>C'est cohérent</p>";
    } else {
        echo "<p>Ce n'est pas cohérent/p>";
    }
?>
<?php
    require 'partials/footer.php';
?>