<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LE12</title>
</head>
<body>
 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
?>
 
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $adresse; ?></td>
            <td><?php echo $ville; ?></td>
            <td><?php echo $code_postal; ?></td>
        </tr>
    </table>
 
<?php
} else {
?>
 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>
 
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br>
 
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" required><br>
 
            <label for="ville">Ville:</label>
            <input type="text" id="ville" name="ville" required><br>
 
            <label for="code_postal">Code Postal:</label>
            <input type="text" id="code_postal" name="code_postal" required><br>
 
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
 
<?php
}
?>
 
</body>
</html>
<li><a href="index.php">retour</a></li>