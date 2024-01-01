<?php
$tabl1 = array(
    'DIOP' => array('Mbayang', 'MATAM', '20'),
    'SAGNA' => array('Elisabeth', 'KAOLACK', '20'),
    'DIAGNE' => array('Mouhamed', 'DAKAR', '25')
);
 
$tabl2 = array(
    'DIOP' => array(
        'Prenom' => 'Mbayang',
        'Ville' => 'MATAM',
        'Age' => '20',
    ),
    'SAGNA' => array(
        'Prenom' => 'Elisabeth',
        'Ville' => 'KAOLACK',
        'Age' => '20'
    ),
    'DIAGNE' => array(
        'Prenom' => 'Mouhamed',
        'Ville' => 'DAKAR',
        'Age' => '25'
    ),
);
 
reset($tabl1);
while (list($nom, $infos) = each($tabl1)) {
    echo "Nom : $nom\n";
    echo "Prénom : $infos[0]\n";
    echo "Ville : $infos[1]\n";
    echo "Âge : $infos[2]\n";
    echo "\n";
}
 
reset($tabl2);
while (list($nom, $infos) = each($tabl2)) {
    echo "Nom : $nom\n";
    echo "Prénom : {$infos['Prenom']}\n";
    echo "Ville : {$infos['Ville']}\n";
    echo "Âge : {$infos['Age']}\n";
    echo "\n";
}
?>
<li><a href="index.php">retour</a></li>