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
</head>
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
            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/upload" class="currentpage">Upload</a></li>
            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/logout">Logout</a></li>
          <?php
            }
           ?>
        </ul>
      </header>
    </nav>

   <nav class="mobile-nav">
    <ul>
      <li class="logo"><a href="<?php echo $basepath;?>/"><img src="<?php echo $basepath;?>/assets/svg/logo.svg" alt="Logo"></a></li>
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

            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>

          <?php
            }else{
          ?>
            <li class="deelnemen-nav" class="currentpage"><a href="<?php echo $basepath;?>/upload" class="currentpage">Upload</a></li>
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
   <a href="#">
    <div class="downloadbutton">
      <div class="download-icon">
      <img src="<?php echo $basepath;?>/assets/svg/download.svg" alt="download" />
      </div>
      <div class="download-text">
        <p>DOWNLOAD HET BOEK</p>
      </div>
    </div>
    </a>
  <?php
    }
  ?>
  <div class='header-wrapper'>
    <header class="header upload-header">
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
  <div class="upload">
    <section class="checkup">
      <header>
        <h2 class=".login-title title">checkup</h2></br>
        <h3 class=".upload-title title">gegevens</h3>
      </header>
      <ul>
        <li>Naam: <?php echo $user['naam']; ?></li>
      <li>Klas: <?php echo $user['klas']; ?></li>
      <li>School: <?php echo $user['school']; ?></li>
      <li>Gemeente: <?php echo $user['gemeente']; ?></li>
      </ul>
    </section>
    <section class="upload-section">
      <img src="<?php echo $basepath;?>/assets/img/polaroid.png" alt="fotovoorbeeld" class="pollaroid">
      <header>
        <h2 class="upload-title title">Verstuur</h2>
        <br/>
        <h3 class="upload-title title">foto en boekbespreking</h3>
      </header>


      <form enctype="multipart/form-data" name="upload-form" class="upload-form" action="<?php echo $basepath;?>/upload" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
        <div class="upload-field">
          <p class="p-label">BOEKBESPREKING</p>
          <label for="review-upload">+ Boekbespreking</label></br>
          <input type="file" id="review-upload" accept="*|media_type" name="upload-review" class="input-a upload-input">
        </div>
        <div class="upload-field">
          <p class="p-label">KLASFOTO</p>
          <label for="image-upload">+ Klasfoto</label></br>
          <input class="upload-input" id="image-upload" type="file" name="upload-img" accept="image/*" >
        </div>
        <input type="submit" class="upload-submit" value="UPLOAD"></input>
      </form>
    </section>
  </div>
</main>
<div class="diagonal deelnemendiagonal"></div>
<footer>
    <nav class="bottomnav">
        <ul class="seccondnav">
          <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
          <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
          <li><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
        </ul>
        <ul >
          <li class="logo"><a href="<?php echo $basepath;?>/"><img src="/<?php echo $basepath;?>assets/svg/logo.svg" alt="boek.be"></a></li>
          <li class="logo"><a href="https://www.facebook.com/Boekbe-301703439127/?fref=ts"><img src="/assets/svg/fb.svg" alt="facebook"></a></li>
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
