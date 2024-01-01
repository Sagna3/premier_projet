<?php
function afficherTableauMultidimensionnel($table) {
    echo "<table border='1'>";
 
    // Afficher les titres (clés)
    echo "<tr>";
    foreach (array_keys($table) as $n) {
        echo "<th>$n</th>";
    }
    echo "</tr>";
 
    // Afficher les données
    $taille = array_map('count', $table);
    $maxTaille = max($taille);
 
    for ($i = 0; $i < $maxTaille; $i++) {
        echo "<tr>";
        foreach ($table as $cle => $valeur) {
            echo "<td>";
            if (isset($valeur[$i])) {
                echo $valeur[$i];
            }
            echo "</td>";
        }
        echo "</tr>";
    }
 
    echo "</table>";
}
$X = array(
    'SAGNA' => array('Momo', 'Soiuy', 'Dusdju'),
    'Age' => array(20, 20, 25),
    'Ville' => array('DAKAR', 'KAOLACK', 'MATAM')
);
 
afficherTableauMultidimensionnel($X);
?>
<li><a href="index.php">retour</a></li>