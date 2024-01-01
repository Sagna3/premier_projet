<?php
function transformerTableau(&$table) {
    foreach ($table as &$S) {
        $S = ucfirst(strtolower($S));
    }
}
$MY = ["Eli", "bour", "gtyhj"];
transformerTableau($MY);
print_r($MY);
?>
<li><a href="index.php">retour</a></li>