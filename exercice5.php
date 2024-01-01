<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO4</title>
</head>
<body>
    <form method="post">
    <label for="">veuillez saisir le rayon: </label>
        <input type="text" name="number"><br>
        <button type="submit">calculer</button>
        </form>
</body>
</html>
<?php
if (isset($_POST['number'])) {
    $rayon = intval($_POST['number']);
$diametre = 2 * $rayon;
$perimetre = 2 * pi() * $rayon;
$surface = pi() * pow($rayon, 2);
echo "Le diamètre du cercle est " . $diametre . ".\n";
echo "Le périmètre du cercle est " . $perimetre . ".\n";
echo "La surface du cercle est " . $surface . ".\n";
 }
?>
<li><a href="index.php">retour</a></li>