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
     <ul>
      <li><a href="<?php echo $basepath;?>/">Boek.be</a></li>
      <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
      <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
      <li><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
    </ul>
  </nav>
  <header>
    <h1>Submit</h1>
    <h1>And win lots and</h1>
    <h1>lots of books</h1>
  </header>
  <section>
    <header>
      <h2>Login</h2>
      <h3>en upload</h3>
    </header>
    <form name="login-form" action="<?php echo $basepath;?>/deelnemen" method="post">
      <input type="hidden" name="type-form" value="login">
      <input type="email" name="email" placeholder="Email">
      <input type="Password" name="password" placeholder="Paswoord">
      <input type="submit" placeholder="login >">
    </form>
  </section>
  <section>
    <aside>
      <p>Nog niet langs geweest?</p>
    </aside>
    <header>
      <h2>Registreer</h2>
      <h3>en neem deel</h3>
    </header>
    <form name="register-form" action="<?php echo $basepath;?>/deelnemen" method="post">
      <section>
        <p>
          Schrijf je nu in en maak kans op 100 boeken! Maak samen met je klas een boekverslag over animal farm en een orginele klasfoto. Plezier verzekerd in de klas!
        </p>
        <div></div>
      </section>
      <input type="hidden" name="type-form" value="register">
      <fieldset>
        <input type="text" placeholder="Naam" name="name" />
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Paswoord" name="password" />
        <input type="password" placeholder="Herhaal paswoord" name="repeat-password" />
        <label>Leerkracht</label>
      </fieldset>
      <fieldset>
        <input type="text" placeholder="School" name="school" />
        <input type="text" placeholder="Klas" name="klas" />
        <input type="text" placeholder="Gemeente" name="gemeente" />
        <label for="">Klas</label>
      </fieldset>
      <input type="submit" placeholder="Registreer >">
    </form>
  </section>
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
