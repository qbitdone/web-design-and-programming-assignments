<!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Obrazac">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; obrazac; borac; boja;">
  <link rel="stylesheet" href="../css/kculina.css">
  <link rel="stylesheet" href="../css-obrazac.php">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <title>Obrazac</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#sadrzajObrazac">OBRAZAC</a></div>
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
      <a href="https://www.facebook.com/" target="_blank"><img src="../multimedija/facebook.png" alt="" class="some">
      </a>
      <a href="../rss.php"><img src="../multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div>


  <div class="obrazacGlavna">

    <section id="sadrzajObrazac">

      <h2 class="tekst">OBRAZAC</h2>
      <h3>Ispunite obrazac i osvojite ulaznicu za sljedeći UFC event</h3>
      <div id="upozorenje"> 
              <p>{$smarty.session.upozorenje}</p>
      </div>
      <form name="obrazac" id="obrazac" method="get"
        action="obrazac.php">
        <fieldset>
        <legend style="text-align: center; padding-bottom: 20px; font-size: 100%; color:#252525; font-family: 'Cairo', sans-serif;" >OPĆI PODATCI O BORBI</legend>
        <label for="prviBorac">PLAVI BORAC: </label> <br>
        <input type="text" id="prviBorac" name="prviBorac" value={$smarty.session.plavi}> <br>
        <label for="drugiBorac">CRVENI BORAC: </label> <br>
        <input type="text" id="drugiBorac" name="drugiBorac" value={$smarty.session.crveni}> <br>
        <label for="datum">DATUM BORBE: </label> <br>
        <input id="datum" type="text" name="datum" value={$smarty.session.datum}><br>
        <label for="vrijeme">VRIJEME BORBE: </label> <br>
        <input id="vrijeme" type="text" name="vrijeme" value={$smarty.session.vrijeme}><br>
      </fieldset>
        <label>KATEGORIJA BORBE: </label>
        <div class="kategorije">
        {if $smarty.session.kategorija == "FLYWEIGHT"}
          <input type="radio" id="FLYWEIGHT" name="kategorija" checked value="FLYWEIGHT">
          <label for="FLYWEIGHT">FLYWEIGHT</label> <br>
        {else}
          <input type="radio" id="FLYWEIGHT" name="kategorija" value="FLYWEIGHT">
          <label for="FLYWEIGHT">FLYWEIGHT</label> <br>
        {/if}
        {if $smarty.session.kategorija == "BANTAMWEIGHT"}
          <input type="radio" id="BANTAMWEIGHT" name="kategorija" checked value="BANTAMWEIGHT">
          <label for="BANTAMWEIGHT">BANTAMWEIGHT</label> <br>
        {else}
          <input type="radio" id="BANTAMWEIGHT" name="kategorija"value="BANTAMWEIGHT">
          <label for="BANTAMWEIGHT">BANTAMWEIGHT</label> <br>  
        {/if}
        {if $smarty.session.kategorija == "FEATHERWEIGHT"}
        <input type="radio" id="FEATHERWEIGHT" name="kategorija" checked value="FEATHERWEIGHT">
          <label for="FEATHERWEIGHT">FEATHERWEIGHT</label> <br>
        {else}
          <input type="radio" id="FEATHERWEIGHT" name="kategorija" value="FEATHERWEIGHT">
          <label for="FEATHERWEIGHT">FEATHERWEIGHT</label> <br>
        {/if}
        {if $smarty.session.kategorija == "LIGHTWEIGHT"}
          <input type="radio" id="LIGHTWEIGHT" name="kategorija" checked value="LIGHTWEIGHT">
          <label for="LIGHTWEIGHT">LIGHTWEIGHT</label> <br>
        {else}
          <input type="radio" id="LIGHTWEIGHT" name="kategorija" value="LIGHTWEIGHT">
          <label for="LIGHTWEIGHT">LIGHTWEIGHT</label> <br>
        {/if}
        {if $smarty.session.kategorija == "WELTERWEIGHT"}
          <input type="radio" id="WELTERWEIGHT" name="kategorija" checked value="WELTERWEIGHT">
          <label for="WELTERWEIGHT">WELTERWEIGHT</label> <br>
        {else}
          <input type="radio" id="WELTERWEIGHT" name="kategorija" value="WELTERWEIGHT">
          <label for="WELTERWEIGHT">WELTERWEIGHT</label> <br>
        {/if}
        {if $smarty.session.kategorija == "MIDDLEWEIGHT"}
          <input type="radio" id="MIDDLEWEIGHT" name="kategorija" checked value="MIDDLEWEIGHT">
          <label for="MIDDLEWEIGHT">MIDDLEWEIGHT</label> <br>
        {else}
          <input type="radio" id="MIDDLEWEIGHT" name="kategorija" value="MIDDLEWEIGHT">
          <label for="MIDDLEWEIGHT">MIDDLEWEIGHT</label> <br>
        {/if}
        {if $smarty.session.kategorija == "LIGHTHEAVYWEIGHT"}
          <input type="radio" id="LIGHTHEAVYWEIGHT" name="kategorija" checked value="LIGHTHEAVYWEIGHT">
          <label for="LIGHTHEAVYWEIGHT">LIGHTHEAVYWEIGHT</label> <br>
        {else}
          <input type="radio" id="LIGHTHEAVYWEIGHT" name="kategorija" value="LIGHTHEAVYWEIGHT">
          <label for="LIGHTHEAVYWEIGHT">LIGHTHEAVYWEIGHT</label> <br>
        {/if}
        {if $smarty.session.kategorija == "HEAVYWEIGHT"}
          <input type="radio" id="HEAVYWEIGHT" name="kategorija" checked value="HEAVYWEIGHT">
          <label for="HEAVYWEIGHT">HEAVYWEIGHT</label> <br>
          {else}
            <input type="radio" id="HEAVYWEIGHT" name="kategorija" value="HEAVYWEIGHT">
          <label for="HEAVYWEIGHT">HEAVYWEIGHT</label> <br>
        {/if}
        </div>
        <label for="Sudci">Sudci koji su bodovali meč:</label> <br>
        <div class="sudci">
          <select id="Sudci" name="Sudci[]" multiple size="3">
            <optgroup label="Amerika">
            {if $smarty.session.eduardo == true}
              <option selected value="Eduardo Herdy">Eduardo Herdy</option>
            {else}
              <option value="Eduardo Herdy">Eduardo Herdy</option>
            {/if}
            {if $smarty.session.glenn == true}
              <option selected value="Glenn Trowbridge">Glenn Trowbridge</option>
            {else}
              <option value="Glenn Trowbridge">Glenn Trowbridge</option>
            {/if}
            {if $smarty.session.osiris == true}
              <option selected value="Osiris Maia">Osiris Maia</option>
            {else}
              <option  value="Osiris Maia">Osiris Maia</option>
            {/if}
            {if $smarty.session.tony == true}
            <option selected value="Tony Weeks">Tony Weeks</option>
            {else}
              <option value="Tony Weeks">Tony Weeks</option>
            {/if}
            {if $smarty.session.jospeh == true}
              <option selected value="Jospeh Terell">Jospeh Terell</option>
            {else}
              <option value="Jospeh Terell">Jospeh Terell</option>
            {/if}
            </optgroup>
            <optgroup label="Europa">
            {if $smarty.session.hallison == true}
              <option selected value="Hallison Potterns">Hallison Potterns</option>
            {else}
              <option value="Hallison Potterns">Hallison Potterns</option>
            {/if}
            {if $smarty.session.otto == true}
            <option selected value="Otto Toriero">Otto Toriero</option>
            {else}
            <option value="Otto Toriero">Otto Toriero</option>
            {/if}
            {if $smarty.session.alessandro == true}
            <option selected value="Alessandro Veirera">Alessandro Veirera</option>
            {else}
            <option  value="Alessandro Veirera">Alessandro Veirera</option>
            {/if}
            {if $smarty.session.leon == true}
            <option selected value="Leon Brid">Leon Brid</option>
            {else}
            <option value="Leon Brid">Leon Brid</option>
            {/if}
            </optgroup>
          </select>
        </div>

        <br>
        <fieldset>
          <legend style="text-align: center; padding-bottom: 20px; font-size: 100%; color:#252525; font-family: 'Cairo', sans-serif;" >OSOBNE INFORMACIJE</legend>
        <label for="ocjenaBorbe">OCJENA BORBE:</label> <br>
        <div class="ocjenaBorbe">
          <input type="range" id="ocjenaBorbe" name="ocjenaBorbe" min="0" max="100" value={$ocjena}><br>
        </div>
        <label for="bojaHlaca">NAJDRAŽA BOJA UFC KRATKIH HLAČA: </label> <br>
        <div class="boja">
          <input type="color" id="bojaHlaca" name="bojaHlaca" value={$smarty.session.boja}> <br>
        </div>
        <label for="pogledaliBorbu">JESTE LI POGLEDALI BORBU VIŠE OD 1 PUT:</label> <br>
        <div class="check">
        {if !empty($smarty.session.borba_pogledana)}
          <input type="checkbox" id="pogledaliBorbu" name="pogledaliBorbu" checked value="da"> <br>
          <label for="pogledaliBorbu"> DA</label> <br>
        {else}
          <input type="checkbox" id="pogledaliBorbu" name="pogledaliBorbu" value="da"> <br>
          <label for="pogledaliBorbu"> DA</label> <br>
        {/if}
        </div>
        <div class="detaljborbe">
          <label for="detalj">NAJZANIMLJIVIJI DETALJ BORBE: </label> <br>
          <textarea id="detalj" name="detalj" cols="30" rows="10">{$smarty.session.detalj_borbe}</textarea> <br>
        </div>
      </fieldset>
        <div class="gumb-posalji">
          <input type="submit" value="Pošalji" name="submit">
        </div>
        <div class="gumb-azuriraj">
         <input type="submit" value="Ažuriraj podatke u tablici" name="azuriraj" class='gumbi'>
        </div>
            <div> 
              <p>{$smarty.session.greskovski}</p>
    </div>
      </form>
    </section>
  </div>

{if $smarty.session.uloga == 4}
    <form class="skripta-container" method="post"> 
  <label for="myfile">Odaberite datoteku:</label>
  <input type="file" id="myfile" name="myfile">
  <label for="email">Unesite mail:</label>
  <input type="email" id="email" name="email">
  <input type="submit" value="Napravi sigurnosnu kopiju" name="napravi-sig-ko" class='gumbi'>
  <input type="submit" value="Vrati sigurnosnu kopiju" name="vrati-sig-ko" class='gumbi'>
  </form>
{/if}

  <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/obrazac.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/obrazac.html">
    <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55"/>
    </a>
  </footer>

</body>

</html>