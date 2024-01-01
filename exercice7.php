<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO4</title>
</head>
<body>
    <form method="post">
    <label for="">veuillez saisir le nombre: </label>
        <input type="text" name="number"><br>
        <button type="submit">calculer</button>
        </form>
</body>
</html>
<?php
if (isset($_POST['number'])) {
    $n = intval($_POST['number']);

$somme = 0;
for ($i = 1; $i < $n; $i++) {
    if ($n % $i == 0) {
        $somme += $i;
    }
}

// Vérifie si n est parfait.
if ($somme == $n) {
    echo "Le nombre $n est parfait.";
} else {
    echo "Le nombre $n n'est pas parfait.";
}
}
?>
<li><a href="index.php">retour</a></li>