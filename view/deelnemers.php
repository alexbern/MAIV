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

        <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen" class="currentpage">Deelnemen</a></li>

      <?php
        }else{
      ?>
        <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/upload">Upload</a></li>
        <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/logout">Logout</a></li>
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
          <li><a href="<?php echo $basepath;?>/deelnemers" class="currentpage">Concurenten</a></li>
        </div>
        <div class="navend">
          <?php
            if (empty($_SESSION['user'])) {
          ?>

            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>

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
      <a href=""><img src="/assets/img/downloadbutton.png" alt="download het boek"></a>
    </div>
  <?php
    }
  ?>
  <div class='header-wrapper'>
    <header class="header">
      <div class="texts">
      <h1 class="neemdeel">Pas op</h1>
      <br/>
      <h1 class="kansop">De concurenten</h1>
      <br/>
      <h1 class="stapelsboeken">zijn op komst</h1>
      </div>
    </header>
  </div>
  <div class="schuinboven"></div>
  <main>
    <div class="main-container">
      <section class="deelnemerfotos">
        <ul>

          <?php
            if (empty($deelnemers)) {
              echo '<p style="margin: 0 auto;">Geen deelnemers gevonden!</p>';
            }else{
            foreach ($deelnemers as $deelnemer) {
          ?>

          <li>
            <div class="img-wrapper" style="background-image:url(<?php echo $basepath;?>/uploads/<?php echo $deelnemer['user_id'];?>/<?php echo $deelnemer['foto'];?>)">

            </div>
            <div class="article-titles">
              <h2 class="article-stap-title"><?php echo $deelnemer['klas']; ?></h2>
              <br/>
              <h3 class="article-sub-title"><?php echo $deelnemer['gemeente']; ?></h3>
            </div>
          </li>


          <?php
              }
            }
           ?>

        </ul>
      </section>
    </div>
  </main>
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
