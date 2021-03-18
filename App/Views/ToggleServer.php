<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="styles/toggle.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <h1><?php echo $title; ?></h1>
      <nav>
        <a href="/?page=home"><h2>Accueil</h2></a>
        <a href="/?page=card&action=toggle"><h2>Cartes</h2></a>
      </nav>
    </header>
    <div class="wrapper">
      <?php foreach($servers as $server) { ?>
        <div class="item">
          <img src="img/servers/<?php echo $server['firstname'] . "_" . $server['lastname']; ?>.jpg" alt="<?php echo $server['firstname'] . "_" . $server['lastname']; ?>">
          <h4><?php echo $server['firstname'] . ' ' . $server['lastname']; ?></h4>
          <p>
            <?php if($server['active'] == 1) {
              echo 'Actif';
            } else {
              echo 'Inactif'; 
            }?>
          </p>
          <a class="button" href="/?page=server&action=toggleById&id=<?php echo $server['id']; ?>">
            <p>
              <?php if($server['active'] == 1) {
                echo 'Désactiver ?';
              } else {
                echo 'Activer ?'; 
              }?>
            </p>
          </a>
        </div>
      <?php } ?>
    </div>
  </body>
</html>