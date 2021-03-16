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
      <h1>Carte : <?php echo $title; ?></h1>
      <nav>
        <a href="/?page=home"><h2>Accueil</h2></a>
        <a href="/?page=card"><h2>Cartes</h2></a>
        <a href="/?page=server"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <p><?php echo $description; ?></p>
    <?php foreach($drinks as $drink) { 
      if($drink['active'] == 1) { ?>
        <a href="/?page=drink&id=<?php echo $drink['id'] ?>">
          <h4><?php echo $drink['title']; ?></h4>
        </a>
        <p><?php echo $drink['description']; ?></p>
      <?php }
    } ?>
  </body>
</html>