<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MAIV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $basepath;?>/css/style.css"/>
</head>
<body>
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
    <form action="">
      <input type="text" placeholder="Naam">
      <input type="Password" placeholder="Paswoord">
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
    <form action="">
      <section>
        <p>
          Schrijf je nu in en maak kans op 100 boeken! Maak samen met je klas een boekverslag over animal farm en een orginele klasfoto. Plezier verzekerd in de klas!
        </p>
        <div></div>
      </section>
      <fieldset>
        <input type="text" placeholder="Naam">
        <input type="text" placeholder="Email">
        <input type="password" placeholder="Paswoord">
        <input type="password" placeholder="Herhaal paswoord">
        <label for="">Leerkracht</label>
      </fieldset>
      <fieldset>
        <input type="text" placeholder="School">
        <input type="text" placeholder="Klas">
        <input type="password" placeholder="Gemeente">
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


<!--   <form name="register-form" action="<?php echo $basepath;?>/deelnemen
  " method="get">
    <h4>REGISTER FORM</h4>
    <label for="name">name:<input type="text" name="name" id="name"></label>
    <br />
    <label for="email">E-mail:<input type="email" name="email" id="email"></label>
    <br />
    <label for="password">password:<input type="password" name="password" id="password"></label>
    <br />
    <label for="repeat-password">repeat password:<input type="password" name="repeat-password" id="repeat-password"></label>
    <br />
    <label for="school">school:<input type="text" name="school" id="school"></label>
    <br />
    <label for="klas">klas:<input type="text" name="klas" id="klas"></label>
    <br />
    <label for="gemeente">gemeente:<input type="text" name="gemeente" id="gemeente"></label>
    <input type="submit" name="register" id="register-btn" value="register"/>
  </form> -->


  <script>
    window.app = window.app || {};
    window.app.basePath = '<?php echo $basepath; ?>'
  </script>
  <script src="<?php echo $basepath;?>/js/script.js"></script>
</body>
</html>
