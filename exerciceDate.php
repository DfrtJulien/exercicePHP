<?php
require 'partials/head.php';
?>

<?php
// EXERCICE 1
$date = date("d-m-Y h:i:s");
echo "<p>$date</p>";

// EXERCICE 2
$date = strtotime('2024-08-08');
$dateFormat = date("d-m-Y", $date);
echo "<p>$dateFormat</p>";

// EXERCICE 3
$naissance = strtotime('15-02-1990');
$age = 2024 - date("Y", $naissance);

echo "<p>Tu as $age ans</p>";

// EXERCICE 4

// function validateDate($date, $format = 'd-m-Y')
// {
//     $d = DateTime::createFromFormat($format, $date);
//     return $d && $d->format($format) === $date;
// }

// if (validateDate('2023-02-28', 'd-m-Y')) { 
//     echo "Date valide"; 
// } else { 
//     echo "Date Invalide"; 
// }

// EXERCICE 5
    $timestamp = time();
    echo "<p>$timestamp</p>";
    // Le time stamp sert a savoir combien de seconde se sont ecoulé depuis le 1er janvier 1970 minuit pour pouvoir calculer le temps

// EXERCICE 6
$tempsEcoule = time();
$formater = date("d-m-Y", $tempsEcoule);
echo "<p>$formater</p>";

// EXERCICE 7


$nextWeek = strtotime("+1 week");
$dateNextWeek = date('d-m-Y', $nextWeek);

echo "<p>dans une semaine nous seron le $dateNextWeek</p>";

// EXERCICE 8

$dateJanvier = strtotime("01-01-2024");
$dateAujourdhui = time();
$dateCalc = $dateAujourdhui - $dateJanvier;
$calcul = round($dateCalc / (60 * 60 * 24));

echo "<p>$calcul jours se sont écoulé depuis le 1er janvier 2024</p>";
?>



<?php
require 'partials/footer.php';
?>