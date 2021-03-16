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
        <a href="/?page=card"><h2>Cartes</h2></a>
        <a href="/?page=server"><h2>Serveurs</h2></a>
      </nav>
    </header>
    <?php if($server['active'] == 1) { ?>
      <p>Age : <?php echo $server['age']; ?> ans</p>
      <p>Description : <?php echo $server['description']; ?></p>
      <p>Travaille le : <?php echo $server['schedule']; ?></p>  
    <?php } ?>
  </body>
</html>