<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>

    <script type="text/javascript"></script>
    <style type="text/css"></style>
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
    <?php foreach($cards as $card) { 
      if($card['active'] == 1) { ?>
        <a href="/?page=card&action=showById&id=<?php echo $card['id'] ?>">
          <h4><?php echo $card['title']; ?></h4>
        </a>
        <p><?php echo $card['description']; ?></p>
      <?php }
    } ?>
  </body>
</html>