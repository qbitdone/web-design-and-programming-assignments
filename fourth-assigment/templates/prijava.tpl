<!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Prijava">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; prijava; lozinka; korisničko">
  <link rel="stylesheet" href="../css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
  <title>Prijava</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#sadrzaj">PRIJAVA</a></div>
    <div class="nav">
        <a href="../plan.html">PLAN</a>
    <a href="../testBrzine.html">TEST</a>
    {if $smarty.session.uloga == 1}
      <a href="registracija.php">REGISTRACIJA</a>
      <a href="prijava.php">PRIJAVA</a>
    {/if}
    {if $smarty.session.uloga > 1}
      <a href="../galerija.php">GALERIJA</a>
      <a href="../autor.php">AUTOR</a>
      <a href="../odjava.php">ODJAVI SE</a>
    {/if}
    {if $smarty.session.uloga > 2}
      <a href="../index.php">POČETNA</a>
      <a href="obrazac.php">OBRAZAC</a>
    {/if}
    </div>
    <div class="logo">
      <a href="https://www.instagram.com/" target="_blank"><img src="../multimedija/instagram.png" alt="" class="some">
      </a>
      <a href="https://www.facebook.com/" target="_blank"><img src="../multimedija/facebook.png" alt="" class="some"> </a>
      <a href="../rss.php"><img src="../multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div>  
  
  <div class="obrazacc">
    <section id="sadrzaj">
      <h2 class="tekst">PRIJAVA</h2>
      <form name="prijava" id="prijava" method="get" action="../prijava.php">
        <label for="korime">KORISNIČKO IME: </label> <br>
        <input id="korime" name="korime" type="text" placeholder="Unesite korisničko ime" /><br>
        <label for="lozinka">LOZINKA: </label> <br>
        <input id="lozinka" name="lozinka" type="password" placeholder="Unesite lozinku" /><br>
        <div class="gumbiRegistracija">
          <input id="prvi" name="submit" type="submit" value="Prijavi se" />
          <input name="reset" type="reset" value="Inicijaliziraj" />

          <div> 
              <p>{$smarty.session.greska}</p>
          </div>
          
        </div>
      </form>
    </section>
  </div>


<form method="get" action="" class="gumb-container" action="">
<input id="korisnik" name="korisnik" type="submit" value="Prijava korisnik" action="index.php"/>
<input id="moderator" name="moderator" type="submit" value="Prijava moderator" />
<input id="admin" name="admin" type="submit" value="Prijava admin"/>
 </form>
  

    <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/prijava.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/prijava.html">
      <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55" />
    </a>
  </footer>

</body>

</html>