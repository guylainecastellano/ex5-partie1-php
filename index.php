<?php
$answer = 'yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex5 partie1 php</title>
</head>
<body>
  <p>
    <?php
    if ($answer == 'yes'){
      echo 'vous avez répondu \'oui\'';
    }
    elseif ($answer == 'no'){
      echo 'vous avez répondu \'non\'';
    }
    else {
      echo 'vous avez fait une erreur';
    }
    ?>
  </p>
  <!--2e version code propre-->
  <?php if ($answer == 'yes'){ ?>
    <p>vous avez répondu oui</p>
  <?php } elseif ($answer == 'no'){ ?>
    <p>vous avez répondu non</p>
  <?php } else { ?>
    <p>vous avez fait une erreur</p>
  <?php } ?>
</body>
</html>
