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
  <div class='header-wrapper'>
  <header class="header">
    <div class="texts deelnementexts">
      <h1 class="neemdeel">Upload</h1>
      <br/>
      <h1 class="kansop">En maak kans op</h1>
      <br/>
      <h1 class="stapelsboeken">stapels boeken</h1>
    </div>
  </header>
</div>
<div class="schuinboven"></div>
<main class="main-container">
  <section class="checkup">
    <header>
      <h2 class=".article-stap-title">checkup</h2>
      <h3 class=".article-stap-title">gegevens</h3>
    </header>
    <ul>
      <li>Naam: Voornaam Achternaam</li>
      <li>Klas: klasnaam</li>
      <li>School: schoolnaam</li>
      <li>Gemeente: gemeentenaam</li>
    </ul>
  </section>
  <section class="login-section">
    <img src="/assets/img/polaroid.png" alt="fotovoorbeeld" class="pollaroid">
    <header>
      <h2 class="login-title title">Verstuur</h2>
      <br/>
      <h3 class="upload-title title">foto en boekbespreking</h3>
    </header>
    <form name="upload-form" class="login-form" action="<?php echo $basepath;?>/upload" method="post">
    ?>
      <label for="">Boekbespreking</label>
      <input type="file" accept="image/*">
      <label for="">Klasfoto</label>
      <input type="file" name="pic" accept="*|media_type">
      <input type="submit" class="login-submit" value="UPLOAD"></input>
    </form>
  </section>
</main>
<footer>
    <nav class="bottomnav">
        <ul class="seccondnav">
          <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
          <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
          <li><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
        </ul>
        <ul>
          <li class="logo"><a href="<?php echo $basepath;?>/"><img src="/assets/svg/logo.svg" alt="boek.be"></a></li>
          <li class="logo"><a href="https://www.facebook.com/Boekbe-301703439127/?fref=ts"><img src="/assets/svg/fb.svg" alt="facebook"></a></li>
          <li class="logo"><a href="https://twitter.com/boekbe"><img src="/assets/svg/tw.svg" alt="twitter"></a></li>
        </ul>
      </div>
  </footer>
  <script>
    window.app = window.app || {};
    window.app.basePath = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
