<?php
    require 'partials/head.php'
?>
<?php
    $nom = "De Freitas";
    $prenom = "Julien";

    echo "<h2 class='bg-danger text-white p-4 mt-5'>$prenom  $nom</h2>";

    $phrase1 = "Le ciel est";
    $phrase2 = " Bleu aujourd'hui";

    echo '<h3>' . $phrase1 .  $phrase2 . '</h3>';

    $mot1 = "J'aime";
    $mot2 = " le";
    $mot3 = " PHP";

    echo '<p>' , $mot1 . $mot2 , $mot3 ,'</p>';

    $text = "Je vais";
    $text .= " a la plage";

    echo '<p>' .$text . '</p>';

    $citation = "Il a dit : \"Le PHP est fantastique\"";

    echo '<p>' . $citation . '</p>';

    $mot = "PHP";

    echo '<p>Le mot est $mot</p>';
    echo "<p>Le mot est $mot</p>";

    $nom = "Julien De Freitas";

    echo "<p>Bonjour $nom bienvenue sur notre site !</p>";

    $citation = "La vie est belle";
    $citation .= ", surtout quand on code en PHP!";

    echo "<p>\" $citation \"</p>";

    $a = 5;
    $b = 10;
    $c = $a + $b;
    echo "<p> la somme de 5 et de 10 est de $c</p>"
?>
<?php
    require 'partials/footer.php'
?>