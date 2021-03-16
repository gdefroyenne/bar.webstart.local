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
      <nav><a href="/?page=home"><h2>Accueil</h2></a></nav>
    </header>
    <?php foreach($servers as $server) { ?>
      <h4><?php echo $server['firstname'] . ' ' . $server['lastname']; ?></h4>
      <p><?php if($server['active'] == 1) {
        echo 'Actif';
      } else {
        echo 'Inactif'; 
      }?></p>
      <button type="submit" name="toggle" value="toggle" onclick="toggleServer($server['id'])">Switch</button>
    <?php } ?>
  </body>
</html>