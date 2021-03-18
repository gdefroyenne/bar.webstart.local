<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="styles/card.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <h1>Carte : <?php echo $title; ?></h1>
      <nav>
        <a href="/?page=home"><h2>Accueil</h2></a>
        <a href="/?page=card"><h2>Cartes</h2></a>
        <a href="/?page=server"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <p><?php echo $description; ?></p>
    <div class="wrapper">
      <?php foreach($drinks as $drink) { 
        if($drink['active'] == 1) { ?>
          <div class="item">
            <img src="img/drinks/<?php echo $drink['title']; ?>.jpg" alt="<?php echo $drink['title']; ?>">
            <a href="/?page=drink&id=<?php echo $drink['id'] ?>">
              <h4><?php echo $drink['title']; ?></h4>
            </a>
            <p><?php echo $drink['description']; ?></p>
          </div>
        <?php }
      } ?>
    </div>
  </body>
</html>