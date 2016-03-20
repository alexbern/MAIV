<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MAIV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $basepath;?>/css/style.css"/>
</head>
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
<body>
  <?php

    if (!empty($errors)) {
      echo '<pre>';
      print_r($errors);
      echo '</pre>';
    }

    if (!empty($_SESSION['error'])) {
      print_r($_SESSION['error']);
    }

    if (!empty($_SESSION['info'])) {
      print_r($_SESSION['info']);
    }

   ?>
  <nav>
    <div class="navigation-wrapper">
       <ul>
        <li><a href="<?php echo $basepath;?>/">boek.be</a></li>
        <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
        <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
        <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
      </ul>
    </div>
  </nav>

  <div class='header-wrapper'>
    <header class="header">
      <div class="texts">
        <h1 class="neemdeel">NEEM DEEL</h1>
        <h1 class="kansop">EN MAAK KANS OP</h1>
        <h1 class="stapelsboeken">STAPELS BOEKEN</h1>
      </div>
    </header>
  </div>


<div class="diagonal"></div>
<main class="main-container">

  <section class="login-section">
    <header>
      <h2 class="login-title title">Login</h2>
      <h3 class="upload-title title">en upload</h3>
    </header>
    <form name="login-form" class="login-form" action="<?php echo $basepath;?>/deelnemen" method="post">
      <input type="hidden" name="type-form" value="login">
      <input type="email" class="inputfield" name="email" placeholder="EMAIL">
      <input type="Password" class="inputfield" name="password" placeholder="PASWOORD">
      <input type="submit" class="login-submit" value="LOGIN"></input>
    </form>
  </section>

  <section class="register-section">
    <header>
      <h2 class="title registreer-title">OF REGISTREER</h2>
      <h3 class="title neemdeel-title">EN NEEM DEEL</h3>
    </header>
    <form name="register-form" class="register-form" action="<?php echo $basepath;?>/deelnemen" method="post">
      <section>
        <p>
          Schrijf je nu in en maak kans op 100 boeken! Maak samen met je klas een <strong>boekverslag over animal farm </strong>en een <strong>orginele klasfoto</strong>. Plezier verzekerd in de klas!
        </p>
        <div></div>
      </section>

      <input type="hidden" name="type-form" value="register">
      <div class="fieldsets">
        <fieldset>
          <input type="text" class="inputfield" placeholder="Naam" name="name" />
          <input type="email" class="inputfield" placeholder="Email" name="email" />
          <input type="password" class="inputfield" placeholder="Paswoord" name="password" />
          <input type="password" class="inputfield" placeholder="Herhaal paswoord" name="repeat-password" />
          <label>LEERKRACHT</label>
        </fieldset>
        <fieldset>
          <input type="text" class="inputfield" placeholder="School" name="school" />
          <input type="text" class="inputfield" placeholder="Klas" name="klas" />
          <input type="text" class="inputfield" placeholder="Gemeente" name="gemeente" />
          <label>KLAS</label>
        </fieldset>
      </div>
      <input type="submit" value="REGISTREER">
    </form>
  </section>
</main>
<div class="diagonal deelnemendiagonal"></div>

  <footer>
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
  </footer>

  <script>
    window.app = window.app || {};
    window.app.basePath = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
