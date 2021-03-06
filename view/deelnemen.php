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
                urls: ['<?php echo $basepath;?>/assets/fonts/lietz.css', '<?php echo $basepath;?>/assets/fonts/gothic.css'] }
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

    if (!empty($_SESSION['error'])) {
      ?>
    <div class="error">
      <img src="<?php echo $basepath;?>/assets/svg/error.svg" alt="error" /><span><?php echo $_SESSION['error']; ?></span>
    </div>
  <?php
    }
    if (!empty($_SESSION['info'])) {
      ?>
      <div class="info">
        <img src="<?php echo $basepath;?>/assets/svg/info.svg" alt="info" /><span><?php echo $_SESSION['info']; ?></span>
      </div>
  <?php
    }
    unset($_SESSION['error']);
    unset($_SESSION['info']);
   ?>

   <nav class="burger-nav">
    <header>
      <img src="<?php echo $basepath;?>/assets/svg/cross.svg" alt="exit" class="cross"/>
      <ul class="burger-ul">
        <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
        <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
        <?php
          if (empty($_SESSION['user'])) {
        ?>
          <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
        <?php
          }else{
        ?>
          <li><a href="<?php echo $basepath;?>/upload">Upload</a></li>
          <?php
            if (!empty($_SESSION['user'])) {
          ?>
            <li><a href="#">Download</a></li>
          <?php
            }

           ?>

          <li><a href="<?php echo $basepath;?>/logout">Logout</a></li>
        <?php
          }
         ?>
      </ul>
    </header>
  </nav>

  <nav class="mobile-nav">
    <ul>
      <li class="logo"><a href="<?php echo $basepath;?>/"><img src="<?php echo $basepath;?>/assets/svg/logo.svg" alt=""></a></li>
      <li class="burger-menu"><img class="burger-img" src="<?php echo $basepath;?>/assets/svg/hamburger.svg" alt="hamburger"></li>
    </ul>
  </nav>

 <nav class="topnav">
  <div class="navigation-wrapper">
    <ul>
        <div class="navstart">
          <li class="logo"><a href="<?php echo $basepath;?>/"><img src="<?php echo $basepath;?>/assets/svg/logo.svg" alt=""></a></li>
          <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
          <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
        </div>
        <div class="navend">
          <?php
            if (empty($_SESSION['user'])) {
          ?>

            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen" class="currentpage">Deelnemen</a></li>

          <?php
            }else{
          ?>
            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/upload">Upload</a></li>
            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/logout">Logout</a></li>
          <?php
            }
           ?>
        </div>
      </ul>
    </div>
  </nav>
  <?php
    if (!empty($_SESSION['user'])) {
  ?>
    <div class="downloadbutton">
      <a href=""><img src="<?php echo $basepath;?>/assets/img/downloadbutton.png" alt="download het boek"></a>
    </div>
  <?php
    }
  ?>
<div class='header-wrapper'>
  <header class="header">
    <div class="texts deelnementexts">
      <h1 class="neemdeel">Neem deel</h1>
      <br/>
      <h1 class="kansop">En maak kans op</h1>
      <br/>
      <h1 class="stapelsboeken">stapels boeken</h1>
    </div>
  </header>
</div>
<div class="schuinboven"></div>
<main class="main-container">
  <section class="login-section">
    <header>
      <h2 class="login-title title">Login</h2>
      <br/>
      <h3 class="upload-title title">en upload</h3>
    </header>
    <form name="login-form" class="login-form" action="<?php echo $basepath;?>/deelnemen" method="post">
      <input type="hidden" name="type-form" value="login">
      <?php
        if (!empty($errors['login-email'])) {
          echo '<input type="email" class="inputfield badinput" name="email" placeholder="'. $errors['login-email'] .'">';
        }else{
          echo '<input type="email" class="inputfield" name="email" placeholder="EMAIL">';
        }

        if (!empty($errors['login-password'])) {
          echo '<input type="Password" class="inputfield badinput" name="password" placeholder="'. $errors['login-password'].'">';
        }else{
          echo '<input type="Password" class="inputfield" name="password" placeholder="PASWOORD">';
        }

       ?>
      <input type="submit" class="login-submit" value="LOGIN"></input>
    </form>
  </section>

  <section class="register-section">
    <header>
      <h2 class="title registreer-title">OF REGISTREER</h2>
      <br/>
      <h3 class="title neemdeel-title">EN NEEM DEEL</h3>
    </header>
    <form name="register-form" class="register-form" action="<?php echo $basepath;?>/deelnemen" method="post">
      <img src="<?php echo $basepath;?>/assets/img/clipboard.png" alt="clipboard" class="clipboard">
      <img src="<?php echo $basepath;?>/assets/img/triggerregistreer.png" alt="nog niet langs geweest?" class="triggerregistreer">
      <section>
        <p>
          Schrijf je nu in en maak kans op 100 boeken! Maak samen met je klas een <strong>boekverslag over animal farm </strong>en een <strong>orginele klasfoto</strong>. Plezier verzekerd in de klas! in de klas! Vergeet zeker niet het boek te downloaden.
        </p>
      </section>

      <input type="hidden" name="type-form" value="register">
      <div class="fieldsets">
        <fieldset>
        <?php
          if (!empty($errors['name'])) {
            echo '<input type="text" class="inputfield badinput" placeholder="'.$errors['name'].'" name="name" />';
          }else{
            echo '<input type="text" class="inputfield" placeholder="NAAM" name="name" />';
          }

          if (!empty($errors['email'])) {
            echo '<input type="email" class="inputfield badinput" placeholder="'.$errors['email'].'" name="email" />';
          }else{
            echo '<input type="email" class="inputfield" placeholder="EMAIL" name="email" />';
          }

          if (!empty($errors['password'])) {
            echo '<input type="password" class="inputfield badinput" placeholder="'.$errors['password'].'" name="password" />';
          }else{
            echo '<input type="password" class="inputfield" placeholder="PASWOORD" name="password" />';
          }

          if (!empty($errors['repeat-password'])) {
            echo '<input type="password" class="inputfield badinput" placeholder="'.$errors['repeat-password'].'" name="repeat-password" />';
          }else{
            echo '<input type="password" class="inputfield" placeholder="HERHAAL PASWOORD" name="repeat-password" />';
          }

         ?>

          <!-- <label>LEERKRACHT</label> -->
        </fieldset>
        <fieldset>
          <?php
            if (!empty($errors['school'])) {
              echo '<input type="text" class="inputfield badinput" placeholder="'.$errors['school'].'" name="school" />';
            }else{
              echo '<input type="text" class="inputfield" placeholder="SCHOOL" name="school" />';
            }

            if (!empty($errors['klas'])) {
              echo '<input type="text" class="inputfield badinput" placeholder="'.$errors['klas'].'" name="klas" />';
            }else{
              echo '<input type="text" class="inputfield" placeholder="KLAS" name="klas" />';
            }

            if (!empty($errors['gemeente'])) {
              echo '<input type="text" class="inputfield badinput" placeholder="'.$errors['gemeente'].'" name="gemeente" />';
            }else{
              echo '<input type="text" class="inputfield" placeholder="GEMEENTE" name="gemeente" />';
            }



           ?>




          <!-- <label>KLAS</label> -->
        </fieldset>
      </div>
      <input type="submit" value="REGISTREER">
    </form>
  </section>
</main>
<div class="diagonal deelnemendiagonal"></div>
<footer>
  <nav class="bottomnav">
      <ul class="seccondnav">
        <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
        <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
        <li><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
      </ul>
      <ul>
        <li class="logo"><a href="<?php echo $basepath;?>/"><img src="<?php echo $basepath;?>/assets/svg/logo.svg" alt="boek.be"></a></li>
        <li class="logo"><a href="https://www.facebook.com/Boekbe-301703439127/?fref=ts"><img src="<?php echo $basepath;?>/assets/svg/fb.svg" alt="facebook"></a></li>
        <li class="logo"><a href="https://twitter.com/boekbe"><img src="<?php echo $basepath;?>/assets/svg/tw.svg" alt="twitter"></a></li>
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
