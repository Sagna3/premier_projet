
<?php
function ppcm($a, $b) {
    // Calcule le PGCD de a et b.
    $pgcd = $a;
    while ($pgcd % $b != 0) {
        $pgcd += $a;
    }
    // Calcule le PPCM de a et b.
    $ppcm = $a * $b / $pgcd;
    return $ppcm;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO4</title>
</head>
<body>
    <form method="post">
    <label for="">veuillez saisir les nombres: </label>
        <input type="text" name="number"><br>
        <input type="text" name="number"><br>
        <button type="submit">calculer</button>
        </form>
</body>
</html>
<?php
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    if (ppcm($a, $b)) {
$resultat = ppcm($a, $b);
echo "Le PPCM de $a et $b est $resultat.";
}
}
?>
<li><a href="index.php">retour</a></li>