<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MAIV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $basepath;?>/css/style.css"/>
  <script type="text/javascript">
    WebFontConfig = {
      custom: { families: ['Lietz', 'Gothic'],
                urls: ['/assets/fonts/lietz.css', '/assets/fonts/gothic.css'] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
</head>
<body>
  <?php

    if (!empty($_SESSION['error'])) {
      ?>
    <div class="error">
      <img src="/assets/svg/error.svg" alt="error" /><span><?php echo $_SESSION['error']; ?></span>
    </div>
  <?php
    }
    if (!empty($_SESSION['info'])) {
      ?>
      <div class="info">
        <img src="/assets/svg/info.svg" alt="info" /><span><?php echo $_SESSION['info']; ?></span>
      </div>
  <?php
    }
    unset($_SESSION['error']);
    unset($_SESSION['info']);
   ?>
   <nav class="topnav">
    <div class="navigation-wrapper">
      <ul>
        <li class="logo"><a href="<?php echo $basepath;?>/"><img src="/assets/svg/logo.svg" alt=""></a></li>
        <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
        <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>

        <?php
          if (empty($_SESSION['user'])) {
        ?>

          <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>

        <?php
          }else{
        ?>
          <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/logout">Logout</a></li>
        <?php
          }
         ?>

      </ul>
    </div>
  </nav>

 <!--  <footer>
    <nav>
      <ul>
        <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
      <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
      <li><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
      </ul>
      <ul>
        <li><a href="http://www.boek.be/">Boek.be</a></li>
        <li><a href="https://www.facebook.com/Boekbe-301703439127/?fref=ts">facebook</a></li>
        <li><a href="https://twitter.com/boekbe">twitter</a></li>
      </ul>
    </nav>
  </footer> -->
  <script>
    window.app = window.app || {};
    window.app.basePath = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
