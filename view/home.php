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

<div class='header-wrapper home-wrapper'>
  <header class="header-home">
    <div class="triggerhome"><img src="/assets/img/triggerhome.png" alt="win stapels boeken"></div>
    <div class="pig-foto"></div>
    <div class="header-titles">
      <h1 class="wewantyou">We Want You</h1>
      <br/>
      <h1 class="tospread">To Spread</h1>
      <br/>
      <h1 class="animalism">Animalism</h1>
    </div>
    <div class="win-lots">
    </div>
  </header>
</div>
<div class="schuinboven"></div>
  <main class="main-container">
    <p class="introtext">
      Boek.be organiseert een wedstrijd rond het boek Animal Farm.
      Slaag jij erin om het beste verslag te schrijven en samen met je klas de tofste foto te maken? Dan maak je kans op 100 prachtige boeken!
    </p>
    <section class="stappen">
      <section class="stap1 stap">
        <div class="fotostap1"></div>
        <article>
          <div class="article-titles">
            <h2 class="article-stap-title">Stap 1</h2>
            <h3 class="article-sub-title">registreer</h3>
          </div>
          <p>
            Registreer je nu voor <strong> de opdracht van jou leven! </strong> Wij roepen jou op om de waarde en normen van het animalisme door te geven aan jouw leerlingen door hen het boek “Animal Farm” in de les voor te schotelen.
          </p>
        </article>
      </section>

      <section class="stap2 stap">
        <div></div>
        <article>
          <p>Ga vervolgens <strong> samen met jouw leerlingen </strong> aan de slag in de klas. Leer ze de kneepjes van het vak, en stel ze voor aan het beste boek van de eeuw: “Animal Farm”. Maak de beste <strong> klassikale boekbespreking </strong> van het boek en maak een animalistische <strong>klasfoto.</strong></p>
          <div class="article-titles">
            <h2 class="article-stap-title">Stap 2</h2>
            <h3 class="article-sub-title">Aan de slag</h3>
          </div>

        </article>
      </section>
      <section class="stap3 stap">
        <div class="varkenbg">

        </div>
        <article>
        <div class="article-titles">
          <h2 class="article-stap-title">Stap 3</h2>
          <h3 class="article-sub-title verstuur">Verstuur</h3>
          <h3 class="article-sub-title">&amp; Win</h3>
        </div>
          <p>Om jouw en je klas te belonen mag je natuurlijk jouw prachtwerk natuurlijk ten toon gesteld worden. Als laatste stuur je ons <strong>jouw bespreking samen met de klasfoto.</strong> Een jury van animalisten zullen deze dan beoordelen. Het beste verslag maakt kans op <strong>100 nieuwe boeken</strong> in de klas!</p>
        </article>
      </section>
    </section>
  </main>
</div>
<div class="schuinonder"></div>

  <div class="quote">
    <section class="quote-wrapper">
      <p class="the-quote">
        Foor legs good two, two legs better! All animals are equal. But some animals are more uqual than others"
      </p>
      <p class="quote-author">
        - George Orwell
      </p>
      <a href="<?php echo $basepath;?>/boek" class="button">OVER HET BOEK</a>
    </section>
  </div>
  <div class="schuinwrapperlinks">
    <section class="concurenten">
      <h4>NIEUWSTE CONCURENTEN</h4>
      <ul class="concurenten-wrapper">
        <li><img src="./assets/img/klasfoto.png" alt="klasfoto"></li>
        <li><img src="./assets/img/klasfoto.png" alt="klasfoto"></li>
        <li><img src="./assets/img/klasfoto.png" alt="klasfoto"></li>
      </ul>
      <a href="<?php echo $basepath;?>/boek" class="button concurenten-button">MEER CONCURENTEN</a>
    </section>
  </div>

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
