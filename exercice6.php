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
echo "Les diviseurs de $n sont : ";
for ($i = 1; $i <= $n; $i++) {
    if ($n % $i == 0) {
        echo "$i; ";
    }
}
}
?>
<li><a href="index.php">retour</a></li>