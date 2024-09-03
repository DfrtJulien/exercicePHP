<?php
    require 'partials/head.php';
?>
<?php
    define("PI", 3.14159);

    echo '<p>' . PI . '</p>';

    define("LARGEUR", 50);
    define("LONGEUR", 150);
    $result = LARGEUR * LONGEUR;

    echo '<p>' . $result . '</p>';

    echo __DIR__;

    define("PREFIXE", 'bonjour ');
    $mot1 = "tout ";
    $mot2 = "le ";
    $mot3 = "monde";

    echo '<p>' . PREFIXE . $mot1 . $mot2 . $mot3 . '</p>';

    define("SUJET", "La France");
    $capital = "Paris";

    echo '<p> La capital de ' . SUJET . ' est ' . $capital . '</p>';

    define("TAUX_TVA", 0.2);
    $prix = 100;
    $prixTVA = $prix * TAUX_TVA;
    $prixFinal = $prix + $prixTVA;

    echo '<p>' . $prix . '€ Avec la TVA de ' . TAUX_TVA . ' le prix est de ' . $prixFinal . '€</p>';

    define("EURO_VERS_USD", 1.2);
    $euros = 150;
    $nouveauPrix = $euros * EURO_VERS_USD;

    echo '<p>' . $euros . '€ équivaut à ' . $nouveauPrix . '$</p>';

    define("VALEUR1", 10);
    $randomNum = random_int(0, 20);

    if(VALEUR1 > $randomNum) {
        echo '<p>' . VALEUR1 . ' est supérieur à ' . $randomNum . '</p>';
    } else {
        echo '<p>' . VALEUR1 . ' est inférieur à ' . $randomNum . '</p>';
    };

    define("URL_SITE", "https://github.com");
    $urlSpecifique = "/DfrtJulien";

    echo '<p> Le meilleur github jamais vu est a cette adresse ' . URL_SITE . $urlSpecifique . '</p>';

    define("AGE_LEGAL", 18);
    $age = random_int(0,99);

    if($age > AGE_LEGAL) {
        echo '<p>Tu a ' . $age . ' tu est donc majeur</p>';
    } else {
        echo '<p>Tu a ' . $age . ' tu es donc mineur ce site n\'est pas fait pour toi </p>';
    };
?>
<?php
    require 'partials/footer.php';
?>