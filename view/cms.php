<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MAIV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $basepath;?>/css/style.css"/>
</head>
<body>

  <?php
    if (empty($_SESSION['user']) || $_SESSION['user']['0']['is_admin'] == 0) {
  ?>
    <form action="<?php echo $basepath;?>/admin" method="post" name="admin-form" class="admin-form">
      <label>Username: </label><br/><input type="text" name="admin-name">
      <br/>
      <label>Password: </label><br/><input type="password" name="admin-password">
      <br/>
      <input type="submit" value="Login"></input>
    </form>

  <?php
    }else{
      echo '<div class="cms-container"></div>';
    }
  ?>


  <script>
    window.app = window.app || {};
    window.app.basename = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
