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
  <nav class="topnav">
  <div class="navigation-wrapper">
     <ul>
      <li class="logo"><a href="<?php echo $basepath;?>/"><img src="/assets/svg/logo.svg" alt=""></a></li>
      <li><a href="<?php echo $basepath;?>/boek">Het Boek</a></li>
      <li><a href="<?php echo $basepath;?>/deelnemers">Concurenten</a></li>
      <li class="deelnemen-nav"><a href="<?php echo $basepath;?>/deelnemen">Deelnemen</a></li>
    </ul>
  </div>
</nav>

  <div class='cms-list'>
    <table>
      <thead>
        <tr>
          <th class="foto">Foto</th>
          <th>School</th>
          <th>Gemeente</th>
          <th>Klas</th>
          <th>Leerkracht Naam</th>
          <th>Email</th>
          <th>Status</th>
          <th>Accept</th>
          <th>Remove</th>
        </tr>
      </thead>

      <tbody>
        <?php
          if (!empty($deelnemers)) {
            foreach ($deelnemers as $deelnemer) {
        ?>
          <tr>
            <td><img class="foto-img"src="assets/img/boek.png" alt="foto"></td>
            <td><?php  echo $deelnemer['school']; ?></td>
            <td><?php  echo $deelnemer['gemeente']; ?></td>
            <td><?php  echo $deelnemer['klas']; ?></td>
            <td><?php  echo $deelnemer['naam']; ?></td>
            <td><?php  echo $deelnemer['email']; ?></td>

            <td header="Status"><?php
            if ($deelnemer['status'] == 0) {
              echo 'PENDING';
            }

            if ($deelnemer['status'] == 1) {
              echo 'ACCEPTED';
            }

             ?></td>
             <?php
                if ($deelnemer['status'] == 0) {
                  echo '<td>accept</td><td>remove</td>';
                }
              ?>

          </tr>


        <?php
            }
          }
         ?>
      </tbody>

    </table>
  </div>


<!--   <div class="element">
      <img src="/assets/img/boek.png" alt="foto"/>
      <p>School Naam</p>
      <p>KlasNaam</p>
      <p>Gemeente</p>
      <p>Leerkracht Naam</p>
      <p>Email</p>
      <p>Status</p>
    </div> -->

  <!-- <footer>
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
  </footer> -->
  <script>
    window.app = window.app || {};
    window.app.basePath = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
