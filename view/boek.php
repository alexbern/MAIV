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
        <li><a href="<?php echo $basepath;?>/boek" class="currentpage">Het Boek</a></li>
        <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
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
          <li><a href="<?php echo $basepath;?>/boek" class="currentpage">Het Boek</a></li>
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
      <div class="texts">
        <h1 class="neemdeel">Meer over</h1>
        <br/>
        <h1 class="kansop">Het beste </h1>
        <br/>
        <h1 class="stapelsboeken">Klassieke boek</h1>
      </div>
    </header>
  </div>
  <div class="schuinboven"></div>
  <main>
    <div class="main-container">
      <div class="container">
        <section class="boek">
          <img src="<?php echo $basepath;?>/assets/img/boek.png" alt="" class="boekimg">
          <div class="tekst">
             <h3>Animal Farm</h3>
             <ul>
               <li>George Orwell</li>
               <li>Politiek</li>
               <li>Satire</li>
             </ul>
             <p>
               Het boerderij leven is niet altijd wat het lijkt. Wanneer de dieren op <strong>Manor farm</strong> het beu zijn grijpen ze de macht. Ze verjagen de mensen en starten een revolutie met de varkens aan de leiding. De grondslag van <strong>deze revolutie wordt het Animalisme</strong> genoemd, Een doctrine met een aantal belangrijke regels. Napoleon en Sneeuwbal, twee varkens, raken in een strijd om de macht over de boerderij.
             </p>
          </div>
        </section>
        </div>
      </div>
      <div class="schuinonder schuinboek"></div>
      <div class="container">
        <section class="schrijver">

          <section class="quote2">
            <p>“The best books... are those that tell you what you know already.”</p>
            <p class="author2">-George Orwell</p>
          </section>

          <section class="orwell">
            <div class="orwell-block">
              <h3>George Orwell</h3>
              <p><strong>George Orwell</strong> was een Brits schrijver, journalist en literair criticus. Rond de 20e eeuw en zelfs nu nog is hij een van de meest bewonderde auteurs. Door zijn werken <strong>Animal Farm </strong>en de dystopische roman heeft hij vooral naambekendheid verworven. Vele van zijn werken zijn satirisch getint met een scherpe argumenten tegen het <strong>stalinisme en totalitarisme</strong>.</p>
            </div>
            <div class="awards">
              <div>
                <h3>Awards</h3>
                <p class="prometheus">Prometheus hall of fame</p>
                <p class="retro">Retro Hugo Award</p>
              </div>
              <img src="<?php echo $basepath;?>/assets/img/medal.png" alt="medal" class="medal">
            </div>
          </section>

        </section>
      </div>
      <div class="schuinwrapperlinks">
      <div class="main-container">
        <div class="container">
            <section class="reviews">
              <h3>Reviews</h3>
              <section class="items">
                <div>
                  <p>“Animal Farm is the most thought-provoking
                  piece of literature I have ever read.”</p>
                  <p class="reviewer">- The Guardian</p>
                </div>
                <div>
                  <p>“Animal Farm is moving, bitter and a warning
                  from history. A score of 9.5/10!”</p>
                  <p class="reviewer">- Fantasy Book Reviews</p>
                </div>
              </section>
            </section>
          </div>
          </div>
        </div>
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
