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
        <a href="/?page=card"><h2>Cartes</h2></a>
      </nav>
    </header>
    <p><?php echo $introduction; ?></p>
    <div class="wrapper">
      <?php foreach($servers as $server) { 
        if($server['active'] == 1) { ?>
        <div class="item">
          <img src="img/servers/<?php echo $server['firstname'] . "_" . $server['lastname']; ?>.jpg" alt="<?php echo $server['firstname'] . "_" . $server['lastname']; ?>">
          <a href="/?page=server&action=showById&id=<?php echo $server['id'] ?>">
            <h4><?php echo $server['firstname'] . ' ' . $server['lastname']; ?></h4>
          </a>
          <p><?php echo $server['description']; ?></p>
        </div>
        <?php }
      } ?>
    </div>
  </body>
</html>