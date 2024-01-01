<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le13</title>
</head>
<body>
 
<?php
$prix_ht = isset($_POST['prix_ht']) ? $_POST['prix_ht'] : '';
$taux_tva = isset($_POST['taux_tva']) ? $_POST['taux_tva'] : '';
?>
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="prix_ht">Prix HT:</label>
    <input type="text" id="prix_ht" name="prix_ht" value="<?php echo $prix_ht; ?>" required><br>
 
    <label for="taux_tva">Taux de TVA (%):</label>
    <input type="text" id="taux_tva" name="taux_tva" value="<?php echo $taux_tva; ?>" required><br>
 
    <input type="submit" value="Calculer">
</form>
 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $montant_tva = $prix_ht * ($taux_tva / 100);
    $prix_ttc = $prix_ht + $montant_tva;
?>
 
    <label for="montant_tva">Montant de la TVA:</label>
    <input type="text" id="montant_tva" value="<?php echo $montant_tva; ?>" readonly><br>
 
    <label for="prix_ttc">Prix TTC:</label>
    <input type="text" id="prix_ttc" value="<?php echo $prix_ttc; ?>" readonly><br>
 
<?php
}
?>
<li><a href="index.php">retour</a></li>