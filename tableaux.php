<?php

/*$prenoms [0] = 'Clément'; //array
$prenoms [1] = 'Ilaria'; //array
$prenoms [2] = 'Jean-Michel'; //array 

$prenoms = array('Clément', 'Ilaria', 'Jean-Michel');

echo print_r($prenoms); 

// echo $prenoms[1]; */

?>

<?php

$noms = array('Clément', 'Ilaria', 'Jean-Michel');
$personne = array('nom' => 'Fermaud', 'prénom' => 'Clément', 'âge' => 99);

foreach ($noms as $nom)
{
    echo '<p>' . $nom . '</p>';
}

?>