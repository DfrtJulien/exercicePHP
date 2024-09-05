<?php
    require 'partials/head.php';
?>

<?php
    // EXERCICE 1
    $i = 0;
    while($i <= 20){
        if($i % 2 === 0){
            echo "<p>$i</p>";
        }
        $i++;
    }

    // EXERCICE 2
    $annee = 2000;
    while($annee <= 2024){
        echo "<ul>$annee</ul>";
        $annee++;
    }

    // EXERCICE 3
    $num = 0;
    do {
        if($num % 3 === 0) {
            echo "<p>$num</p>";
        }
        $num++;
    }while($num <= 30);

    // EXERCICE 4
    $num = 2;
    for($i = 0; $i <= 10; $i++){
        $valeur = $num * $i;
        echo "<p>$valeur</p>";
    };

    // EXERCICE 5
   
    // EXERCICE 6
    $tab_asso = array(
        "Prenom" => "Julien",
        "Nom" => "De Freitas",
        "Email" => "test@gmail.com",
        "Age" => 26
    );

    foreach($tab_asso as $k => $v){
        if($k === "Email"){
            echo "<a class='bg-dark text-white'>$v</a>";
        } else {
            echo "<p>$v</p>";
        }
    };

    // EXERCICE 7
    $nav = array(
        "acceuil" => "/acceuil.com",
        "contact" => "/contact.com",
        "produit" => "/produit.com",
    );

    foreach($nav as $k => $v){
        echo "<a class='bg-dark text-white'>$v</a><br>";
    };

    //EXERCICE 8

    // EXERCICE 9
    $day = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
    $j = 0;
    for($i = 1; $i < 31; $i++){
        if($j < count($day)){
            if($day[$j] === "samedi" || $day[$j] === "dimanche"){
                echo "<p class='text-danger'>$day[$j] $i</p>";
            } else {
                echo "<p>$day[$j] $i</p>";
            }
            $j++;
        } else {
            $j = 0;
        }
    };

    // EXERCICE 10
    $personne = array(
        0 => array(
            "Prénom" => "Julien",
            "Nom" => "De Freitas",
            "Age" => 26
        ),
        1 => array(
            "Prénom" => "Ivan",
            "Nom" => "Somo",
            "Age" => 52
        ),
        2 => array(
            "Prénom" => "Verra",
            "Nom" => "Dos Santos",
            "Age" => 89
        )
        );

        foreach($personne as $a =>$b){
            echo "<ol><ul><li>Personne numéro " . ($a + 1) . "</li><li> Prénom : " . $b["Prénom"] ."</li><li> Nom : " . $b["Nom"] . "</li><li> Age : " . $b["Age"]  . "</li></ul></ol>";
        }
?>

<?php
    require 'partials/footer.php';
?>