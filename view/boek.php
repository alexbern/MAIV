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
  <main>
    <section>
      <div>
        <img src="" alt="">
      </div>
      <div>
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
    <section>
      <section>
        <p>“The best books... are those that tell you what you know already.”</p>
        <p>-George Orwell</p>
      </section>
      <section>
        <div>
          <h3>George Orwell</h3>
          <p><strong>George Orwell</strong> was een Brits schrijver, journalist en literair criticus. Rond de 20e eeuw en zelfs nu nog is hij een van de meest bewonderde auteurs. Door zijn werken <strong>Animal Farm </strong>en de dystopische roman heeft hij vooral naambekendheid verworven. Vele van zijn werken zijn satirisch getint met een scherpe argumenten tegen het <strong>stalinisme en totalitarisme</strong>.</p>
        </div>
        <div>
          <h3>Awards</h3>
          <p>Prometheus hall of fame</p>
          <p>Retro Hugo Award</p>
          <img src="" alt="">
        </div>
      </section>
    </section>
    <section>
      <h3>Reviews</h3>
      <section>
        <div>
          <p>“Animal Farm is the most thought-provoking
          piece of literature I have ever read.”</p>
          <p>- The Guardian</p>
        </div>
        <div>
          <p>“Animal Farm is moving, bitter and a warning
          from history. A score of 9.5/10!”</p>
          <p>- Fantasy Book Reviews</p>
        </div>
      </section>
    </section>

  </main>
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
