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
        <a href="/?page=card"><h2>Cartes</h2></a>
        <a href="/?page=server"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <p><?php echo $introduction; ?></p>
    <h3>Cartes disponibles en ce moment :</h3>
    <?php foreach($cards as $card) { 
      if($card['active'] == 1) { ?>
        <a href="/?page=card&action=showById&id=<?php echo $card['id'] ?>">
          <h4><?php echo $card['title']; ?></h4>
        </a>
        <p><?php echo $card['description']; ?></p>
      <?php }
    } ?>
    <h3>Serveurs de l'établissement :</h3>
    <?php foreach($servers as $server) { 
      if($server['active'] == 1) { ?>
        <a href="/?page=server&id=<?php echo $server['id'] ?>">
          <h4><?php echo $server['firstname'] . " " . $server['lastname']; ?></h4>
        </a>
        <p><?php echo $server['description']; ?></p>
      <?php }
    } ?>
  </body>
</html>