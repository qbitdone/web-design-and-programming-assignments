<!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Prijava">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; prijava; lozinka; korisničko">
  <link rel="stylesheet" href="./css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script defer src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script defer src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script defer src="./javascript/kculina-jquery.js"></script>
  <title>POČETNA</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#sadrzaj">POČETNA</a></div>
    <div class="nav">
    <a href="plan.html">PLAN</a>
    <a href="testBrzine.html">TEST</a>
    {if $smarty.session.uloga == 1}
      <a href="obrasci/registracija.php">REGISTRACIJA</a>
      <a href="obrasci/prijava.php">PRIJAVA</a>
    {/if}
    {if $smarty.session.uloga > 1}
      <a href="galerija.php">GALERIJA</a>
      <a href="autor.php">AUTOR</a>
      <a href="odjava.php">ODJAVI SE</a>
    {/if}
    {if $smarty.session.uloga > 2}
      <a href="index.php">POČETNA</a>
      <a href="obrasci/obrazac.php">OBRAZAC</a>
    {/if}
    </div>
    <div class="logo">
      <a href="https://www.instagram.com/" target="_blank"><img src="./multimedija/instagram.png" alt="" class="some">
      </a>
      <a href="https://www.facebook.com/" target="_blank"><img src="./multimedija/facebook.png" alt="" class="some"> </a>
      <a href="rss.php"><img src="./multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div>



<section id="pocetni-sadrzaj">
      <div class="tablica">
        <table>
          <tr>
          <th>ID</th>
          <th>Prvi borac</th>
          <th>Drugi borac</th>
          <th>Vrijeme</th>
          <th>Detalji</th>
          </tr>
             {for $i=0 to $smarty.session.brojac-1}
     <tr>
        <td>
            <form>
               <input type='submit' name={$smarty.session.arrayID[$i]} value={$smarty.session.arrayID[$i]}>
            </form> 
        </td>
        <td>
          {$smarty.session.arrayPlavi[$i]}
        </td>
        <td>
          {$smarty.session.arrayCrveni[$i]}
        </td> 
        <td>
          {$smarty.session.arrayVrijeme[$i]}
        </td>
        <td> 
          <a href={$smarty.session.arrayID[$i]} class='detaljiKlik'>Detalji</a>
          </td>
    </tr>
   {/for}
        </table>
      </div>


  </section>
  <table id="podatci-tab" class="druga-tablica">
  <tr>
  <th>ID<th>
  <th>Plavi borac<th>
  <th>Crveni borac<th>
  <th>Datum<th>
  <th>Vrijeme<th>
  <th>Kategorija<th>
  <th>Sudac<th>
  <th>Ocjena<th>
  <th>Boja<th>
  <th>Borba pogledana<th>
  <th>Detalj<th>
  </tr>
  </table>
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