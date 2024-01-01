

<?php
$number = 115;
$nombre_tire = rand(100, 999);
$nombre_coups = 1;

while ($nombre_tire != $number) {
    $nombre_tire = rand(100, 999);
    $nombre_coups++;
}

echo "Le nombre initial était $number. Il a été obtenu en $nombre_coups coups.";

for (; $nombre_tire != $number; $nombre_tire = rand(100, 999)) {
    $nombre_coups++;
}

echo "Le nombre initial était $number. Il a été obtenu en $nombre_coups coups.";
?>
<li><a href="index.php">retour</a></li>
