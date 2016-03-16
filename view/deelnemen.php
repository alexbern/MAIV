<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MAIV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $basepath;?>/css/style.css"/>
</head>
<body>
  <h1>DEELNEMEN</h1>

  <form name="register-form" action="<?php echo $basepath;?>/deelnemen
  " method="get">
    <h4>REGISTER FORM</h4>
    <label for="name">name:<input type="text" name="name" id="name"></label>
    <br />
    <label for="email">E-mail:<input type="email" name="email" id="email"></label>
    <br />
    <label for="password">password:<input type="password" name="password" id="password"></label>
    <br />
    <label for="repeat-password">repeat password:<input type="password" name="repeat-password" id="repeat-password"></label>
    <br />
    <label for="school">school:<input type="text" name="school" id="school"></label>
    <br />
    <label for="klas">klas:<input type="text" name="klas" id="klas"></label>
    <br />
    <label for="gemeente">gemeente:<input type="text" name="gemeente" id="gemeente"></label>
    <input type="submit" name="register" id="register-btn" value="register"/>
  </form>


  <script>
    window.app = window.app || {};
    window.app.basePath = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
