<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="styles/list.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <h1><?php echo $title; ?></h1>
      <nav>
        <a href="/?page=home"><h2>Accueil</h2></a>
        <a href="/?page=server"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <p><?php echo $introduction; ?></p>
    <div class="wrapper">
      <?php foreach($cards as $card) { 
        if($card['active'] == 1) { ?>
          <div class="item">
            <img src="img/cards/<?php echo $card['title']; ?>.jpg" alt="<?php echo $card['title']; ?>">
            <a href="/?page=card&action=showById&id=<?php echo $card['id'] ?>">
              <h4><?php echo $card['title']; ?></h4>
            </a>
            <p><?php echo $card['description']; ?></p>
          </div>
        <?php }
      } ?>
    </div>
  </body>
</html>