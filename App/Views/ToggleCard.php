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
        <a href="/?page=server&action=toggle"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <div class="wrapper">
      <?php foreach($cards as $card) { ?>
        <div class="item">
          <img src="img/cards/<?php echo $card['title']; ?>.jpg" alt="<?php echo $card['title']; ?>">
          <h4><?php echo $card['title']; ?></h4>
          <p>
            <?php if($card['active'] == 1) {
              echo 'Actif';
            } else {
              echo 'Inactif'; 
            }?>
          </p>
          <a class="button" href="/?page=card&action=toggleById&id=<?php echo $card['id']; ?>">
            <p>
              <?php if($card['active'] == 1) {
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