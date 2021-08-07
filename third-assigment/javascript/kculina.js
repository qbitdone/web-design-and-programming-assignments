var brojac = 0;

function myFunction() {
  if (brojac == 0) {
    document.getElementById("pravokutnik").style.visibility = "hidden";
    document.getElementById("pravokutnik2").style.visibility = "visible";
    brojac++;
  }

  /*if (brojac >= 1)
  {
    document.getElementById("pravokutnik2").style.visibility = "hidden";
  } */

  else if (brojac == 1) {
    document.getElementById("pravokutnik2").style.visibility = "hidden";
    document.getElementById("pravokutnik3").style.visibility = "visible";
    brojac++;
  }

  else if (brojac == 2) {
    document.getElementById("pravokutnik3").style.visibility = "hidden";
    document.getElementById("pravokutnik4").style.visibility = "visible";
    brojac++;
  }
  else if (brojac == 3) {
    document.getElementById("pravokutnik4").style.visibility = "hidden";
    document.getElementById("pravokutnik5").style.visibility = "visible";
    brojac++;
  }
  else if (brojac == 4) {
    document.getElementById("pravokutnik5").style.visibility = "hidden";
  }
  // console.log(brojac);
}


var pravokutnik = document.getElementById("pravokutnik");
pravokutnik.addEventListener('click', myFunction, false);

var pravokutnik2 = document.getElementById("pravokutnik2");
pravokutnik2.addEventListener('click', myFunction, false);

var pravokutnik3 = document.getElementById("pravokutnik3");
pravokutnik3.addEventListener('click', myFunction, false);

var pravokutnik4 = document.getElementById("pravokutnik4");
pravokutnik4.addEventListener('click', myFunction, false);

var pravokutnik5 = document.getElementById("pravokutnik5");
pravokutnik5.addEventListener('click', myFunction, false);


/*
function Pristupacnost()
{
  document.getElementById("pristupacnost").addEventListener('click')
} */


//const forma = document.getElementById('obrazac')

document.getElementById("obrazac").addEventListener('submit', function (event) {
  var brojacGreski = 0;
  if (provjeraDatuma() == false) {
    event.preventDefault();
    brojacGreski++;
  }
  if (provjeriDatumVrijeme() == false) {
    event.preventDefault();
    brojacGreski++;
  }
  if (provjeriPadajuci() == false) {
    event.preventDefault();
    brojacGreski++;
  }
  if (brojacGreski > 0) {
    if (popUp() == true) {
      brojac = 0;
      document.getElementById("pravokutnik").style.visibility = "visible";
      document.getElementById("pravokutnik2").style.visibility = "hidden";
      document.getElementById("pravokutnik3").style.visibility = "hidden";
      document.getElementById("pravokutnik4").style.visibility = "hidden";
      document.getElementById("pravokutnik5").style.visibility = "hidden";
      //console.log(brojac);
    }
  }
}, false);


//document.getElementById("obrazac").addEventListener('submit', provjeriPadajuci, false);



function provjeraDatuma() {
  var vrijednost = document.getElementById("datum").value;

  if (vrijednost[0] >= 0 && vrijednost[0] <= 3) {
    if (vrijednost[0] == 3) {
      if (vrijednost[1] == 0 || vrijednost[1] == 1) {
        if (vrijednost[2] == '.') {
          if (vrijednost[3] == 0 || vrijednost[3] == 1) {
            if (vrijednost[3] == 1) {
              if (vrijednost[4] == 0 || vrijednost[4] == 1 || vrijednost[4] == 2) {
                if (vrijednost[5] == '.') {
                  if (vrijednost[6] >= 0 && vrijednost[6] <= 9) {
                    if (vrijednost[7] >= 0 && vrijednost[7] <= 9) {
                      if (vrijednost[8] >= 0 && vrijednost[8] <= 9) {
                        if (vrijednost[9] >= 0 && vrijednost[9] <= 9) {
                          if (vrijednost[10] == '.') {
                            if (vrijednost.length == 11) {
                              if ((vrijednost[0] == 0 && vrijednost[1] == 0) || (vrijednost[3] == 0 && vrijednost[4] == 0)) {
                                return false;
                              }
                              else {
                                return true;
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
            else {
              if (vrijednost[4] >= 0 || vrijednost[4] <= 9) {
                if (vrijednost[5] == '.') {
                  if (vrijednost[6] >= 0 && vrijednost[6] <= 9) {
                    if (vrijednost[7] >= 0 && vrijednost[7] <= 9) {
                      if (vrijednost[8] >= 0 && vrijednost[8] <= 9) {
                        if (vrijednost[9] >= 0 && vrijednost[9] <= 9) {
                          if (vrijednost[10] == '.') {
                            if (vrijednost.length == 11) {
                              if ((vrijednost[0] == 0 && vrijednost[1] == 0) || (vrijednost[3] == 0 && vrijednost[4] == 0)) {
                                return false;
                              }
                              else {
                                return true;
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }

          }
        }
      }
    }
    else {
      if (vrijednost[1] >= 0 && vrijednost[1] <= 9) {
        if (vrijednost[2] == '.') {
          if (vrijednost[3] == 0 || vrijednost[3] == 1) {
            if (vrijednost[3] == 1) {
              if (vrijednost[4] == 0 || vrijednost[4] == 1 || vrijednost[4] == 2) {
                if (vrijednost[5] == '.') {
                  if (vrijednost[6] >= 0 && vrijednost[6] <= 9) {
                    if (vrijednost[7] >= 0 && vrijednost[7] <= 9) {
                      if (vrijednost[8] >= 0 && vrijednost[8] <= 9) {
                        if (vrijednost[9] >= 0 && vrijednost[9] <= 9) {
                          if (vrijednost[10] == '.') {
                            if (vrijednost.length == 11) {
                              if ((vrijednost[0] == 0 && vrijednost[1] == 0) || (vrijednost[3] == 0 && vrijednost[4] == 0)) {
                                return false;
                              }
                              else {
                                return true;
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
            else {
              if (vrijednost[4] >= 0 || vrijednost[4] <= 9) {
                if (vrijednost[5] == '.') {
                  if (vrijednost[6] >= 0 && vrijednost[6] <= 9) {
                    if (vrijednost[7] >= 0 && vrijednost[7] <= 9) {
                      if (vrijednost[8] >= 0 && vrijednost[8] <= 9) {
                        if (vrijednost[9] >= 0 && vrijednost[9] <= 9) {
                          if (vrijednost[10] == '.') {
                            if (vrijednost.length == 11) {
                              if ((vrijednost[0] == 0 && vrijednost[1] == 0) || (vrijednost[3] == 0 && vrijednost[4] == 0)) {
                                return false;
                              }
                              else {
                                return true;
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
            if (vrijednost[4] >= 0 || vrijednost[4] <= 9) {
              if (vrijednost[5] == '.') {
                if (vrijednost[6] >= 0 && vrijednost[6] <= 9) {
                  if (vrijednost[7] >= 0 && vrijednost[7] <= 9) {
                    if (vrijednost[8] >= 0 && vrijednost[8] <= 9) {
                      if (vrijednost[9] >= 0 && vrijednost[9] <= 9) {
                        if (vrijednost[10] == '.') {
                          if (vrijednost.length == 11) {
                            if ((vrijednost[0] == 0 && vrijednost[1] == 0) || (vrijednost[3] == 0 && vrijednost[4] == 0)) {
                              return false;
                            }
                            else {
                              return true;
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

  }
}


function promjeniPozadinu() {
  if (provjeraDatuma() == true) {
    document.getElementById("datum").style.backgroundColor = "green";
    document.getElementById("datum-label").innerHTML = "DATUM BORBE";
    document.getElementById("datum").style.borderColor = "green";
  }
  else {
    document.getElementById("datum").style.backgroundColor = "red";
    document.getElementById("datum-label").innerHTML = "*DATUM BORBE";
    document.getElementById("datum").style.borderColor = "red";
  }
}

function promjeniVrijeme()
{
  var vrijeme = document.getElementById("vrijeme").value;
  if (vrijeme == '' || vrijeme == null )
  {
    document.getElementById("vrijeme").style.backgroundColor = "red";
    document.getElementById("vrijeme-label").innerHTML = "*VRIJEME BORBE";
    document.getElementById("vrijeme").style.borderColor = "red";
  }
  else{
    document.getElementById("vrijeme").style.backgroundColor = "green";
    document.getElementById("vrijeme-label").innerHTML = "VRIJEME BORBE";
    document.getElementById("vrijeme").style.borderColor = "green";
  }
}

var vrijeme = document.getElementById("vrijeme");
vrijeme.addEventListener('input' , promjeniVrijeme);


//onkeyup="promjeniPozadinu()"

var datum = document.getElementById("datum");
datum.addEventListener('keyup', promjeniPozadinu, false);

function provjeriDatumVrijeme() {
  var datum = document.getElementById("datum").value;
  var vrijeme = document.getElementById("vrijeme").value;
  if (datum == '' || datum == null || vrijeme == '' || vrijeme == null) {
    return false;
  }
}

/*

document.getElementById("submitForme").onclick = function(){
  var padajuci = [];
  for (var option of document.getElementById('Sudci').options) {
    if (option.selected) {
      padajuci.push(option.value);
    }
  }
  alert(padajuci);
} */

/*
var padajuci = document.getElementById("Sudci");
padajuci.addEventListener('selectionchange', provjeriPadajuci, false); */

var vrijeme = document.getElementById("Sudci");
vrijeme.addEventListener('input' , promjeniPadajuci);

function promjeniPadajuci()
{
  if(provjeriPadajuci() == false)
  {
    document.getElementById("Sudci").style.backgroundColor = "red";
    document.getElementById("Sudci").style.borderColor = "red";
    document.getElementById("Sudci-label").innerHTML = "*Sudci koji su bodovali meč:";
  }
  else{
    document.getElementById("Sudci").style.backgroundColor = "green";
    document.getElementById("Sudci-label").innerHTML = "Sudci koji su bodovali meč:";
    document.getElementById("Sudci").style.borderColor = "green";
  }
}

function provjeriPadajuci() {
  var padajuci = [];
  for (var option of document.getElementById('Sudci').options) {
    if (option.selected) {
      padajuci.push(option.value);
    }
  }
  if (padajuci.length >= 2) {
    return true;
  }
  return false;
}




document.getElementById("pristupacnost").addEventListener('click', () => {
  if (document.getElementById('obrazacGlavna').classList.contains('obrazacGlavna-acces')) {
    document.getElementById('obrazacGlavna').classList.remove('obrazacGlavna-acces');
  }
  else {
    document.getElementById('obrazacGlavna').classList.add('obrazacGlavna-acces');
  }
})

function popUp() {
  if (confirm("Trebate li pomoć?")) {
    return true;
  }
  return false;
}