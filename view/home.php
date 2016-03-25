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
    $deelnemersDAO = new DeelnemersDAO();
    $deelnemers = $deelnemersDAO->selectAcceptedLast();





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

            <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>

          <?php
            }else{
          ?>
            <li><a href="<?php echo $basepath;?>/upload">Upload</a></li>
            <li><a href="<?php echo $basepath;?>/logout">Logout</a></li>
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

<div class='header-wrapper home-wrapper'>
  <header class="header-home">
    <div class="triggerhome"><img src="<?php echo $basepath;?>/assets/img/triggerhome.png" alt="win stapels boeken"></div>
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
      Boek.be organiseert een wedstrijd: klassiekers in je klas! Deze actie draait rond het boek Animal Farm.
      Slaag jij erin om het beste verslag te schrijven en samen met je klas de tofste foto te maken? Dan maak je kans op 100 prachtige boeken!
    </p>
    <div class="wins">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win1">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win2">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win3">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win4">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win5">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win6">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win7">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win8">
      <img src="<?php echo $basepath;?>/assets/img/win-trigger.png"" alt=""" class="win9">
    </div>
    <section class="stappen">
      <section class="stap1 stap">
        <article>
          <div class="article-titles">
            <h2 class="article-stap-title">STAP 1</h2></br>
            <h3 class="article-sub-title">registreer</h3>
          </div>
          <p>
            Registreer je nu voor <strong> de opdracht van jou leven! </strong> Wij roepen jou op om de waarde en normen van het animalisme door te geven aan jouw leerlingen door hen het boek <strong>“Animal Farm”</strong> in de les voor te schotelen.
          </p>
        </article>
      </section>

       <section class="stap2 stap">
        <article>
          <p class="tweetekst">Ga vervolgens <strong> samen met jouw leerlingen </strong> aan de slag in de klas. Leer ze de kneepjes van het vak, en stel ze voor aan het beste boek van de eeuw: “Animal Farm”. Maak de beste <strong> klassikale boekbespreking </strong> van het boek en maak een animalistische <strong>klasfoto.</strong></p>
          <div class="article-titles stap2title">
            <h2 class="article-stap-title">Stap 2</h2></br>
            <h3 class="article-sub-title" >Aan de slag</h3></br>
            <h3 class="article-sub-title">in de klas</h3>
          </div>

        </article>
      </section>
      <section class="stap3 stap">
        <div class="varkenbg"></div>
        <article>
        <div class="article-titles">
          <h2 class="article-stap-title">Stap 3</h2></br>
          <h3 class="article-sub-title verstuur">Verstuur</h3></br>
          <h3 class="article-sub-title">&amp; Win</h3>
        </div>
          <p>Om jouw en je klas te belonen mag natuurlijk jouw prachtfoto ten toon gesteld worden. Als laatste stuur je ons <strong>jouw bespreking samen met de klasfoto door.</strong> Een jury van animalisten zullen deze dan beoordelen. Het beste verslag maakt kans op <strong>100 nieuwe boeken</strong> in de klas! Vergeet zeker niet het boek te downloaden.</p>
        </article>
      </section>
    </section>
  </main>
</div>
<div class="schuinonder"></div>

  <div class="quote">
    <section class="quote-wrapper">
      <p class="the-quote">
        "Four legs good, two legs better! All animals are equal. But some animals are more equal than others"
      </p>
      <p class="quote-author">
        - George Orwell
      </p>
      <a href="<?php echo $basepath;?>/boek" class="button">OVER HET BOEK
      <img src="<?php echo $basepath;?>/assets/svg/arrow.svg" alt="arrow" class="arrow">
      </a>
    </section>
  </div>
  <div class="schuinwrapperlinks">
    <section class="concurenten">
      <h4>NIEUWSTE CONCURENTEN</h4>
      <ul class="concurenten-wrapper">
        <?php
          foreach ($deelnemers as $deelnemer) {
        ?>
           <li style="background-image:url(<?php echo $basepath;?>/uploads/<?php echo $deelnemer['user_id'];?>/<?php echo $deelnemer['foto'];?>)"></li>

        <?php
          }
         ?>



      </ul>
      <a href="<?php echo $basepath;?>/deelnemers" class="button concurenten-button">MEER CONCURENTEN
      <img src="<?php echo $basepath;?>/assets/svg/arrow.svg" alt="arrow" class="arrow">
      </a>
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
