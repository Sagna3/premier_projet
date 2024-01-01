<?php
function calculerSinus($angle, $unite = 'radian') {
    switch (strtolower($unite)) {
        case 'radian':
            return sin($angle);
        case 'degre':
            return sin(deg2rad($angle));
        case 'grade':
            return sin(($angle));
        default:
            return null; 
    }
}
$Radian = 1.047; 
$Degre = 60;
$Grade = 66.6667;
 
echo "Sinus en radian : " . calculerSinus($Radian) . "<br>";
echo "Sinus en degré : " . calculerSinus($Degre, 'degre') . "<br>";
echo "Sinus en grade : " . calculerSinus($Grade, 'grade') . "<br>";
?>
<li><a href="index.php">retour</a></li>