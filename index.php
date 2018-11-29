<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie5_Exo1</title>
</head>
<body>
    <?php
// Créer un tableau months et l'initialiser avec les valeurs suivantes :
//  janvier
//  février
//  mars
//  avril
//  mai
//  juin
//  juillet
//  aout
//  septembre
//  octobre
//  novembre
//  décembre

    $mois = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    //J'initialise ma variable $mois avec tous les mois de l'année. Je mets array pour dire que c'est un tableau( un tableau commence toujours par 0).
    //   echo $mois[1];  Avec cette methode, il faut mettre un chiffre à l'intérieur des crochets pour afficher le mois correspondant.

  //  print_r($mois); J'utile print_r juste pour débeuguer mon tableau. C'est savoir si mon tableau s'affiche bien. (c'est genre console log).

  /*   2ème méthode avec for

  for($numero = 0; $numero  < 12 ; $numero ++){?>
        <p><?php echo $mois[$numero];
  }
?></p>*/
//La méthode foreach
    foreach($mois as $key => $mois){
      // On parcourt array,la valeur de l'item courant est copiée dans $mois?>
      <p> <?php echo $mois; //affichage de mois
    }


?></p>
</body>
</html>
