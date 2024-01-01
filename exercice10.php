<?php
$tabl1 = array(
    'DIOP' => array('MBAYANG', 'MATAM', '20'),
    'SAGNA' => array('ELISABETH', 'KAOLACK', '20'),
    'DIAGNE' => array('MOUHAMED', 'DAKAR','25')
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
        'Ville' => 'Dakar',
        'Age' => '25'
    ),
);
 
foreach ($tabl1 as $nom => $infos) {
    echo "Nom : $nom\n";
    echo "Prénom : $infos[0]\n";
    echo "Ville : $infos[1]\n";
    echo "Âge : $infos[2]\n";
    echo "\n";
}
 
foreach ($tabl2 as $nom => $infos) {
    echo "Nom : $nom\n";
    echo "Prénom : {$infos['Prenom']}\n";
    echo "Ville : {$infos['Ville']}\n";
    echo "Âge : {$infos['Age']}\n";
    echo "\n";
}
?>
<li><a href="index.php">retour</a></li>