if (document.title == "Pocetna") {
  $("#tablica-prikaz").dataTable();
}

function dohvatiPostaviKolacice() {
  if (document.cookie != "") {
    var ca = document.cookie.split(';');
    var un = ca[0].split("=");
    var im = ca[1].split("=");
    var pr = ca[2].split("=");
    var postoji = false
    if (im[1] != "") {
      $('#ime').val(im[1]);
      $('#ime').attr('readonly', true);
      postoji = true;
    }
    if (un[1] != "") {
      $('#korime').val(un[1]);
      $('#korime').attr('readonly', true);
      postoji = true;
    }
    if (pr[1] != "") {
      $('#prezime').val(pr[1]);
      $('#prezime').attr('readonly', true);
      postoji = true;
    }
    if (postoji) {
      var json = new Array();
      $.getJSON("https://barka.foi.hr/WebDiP/2020/materijali/zadace/dz3/korisnici.json",
        function (data) {
          $.each(data, function (key, val) {
            if (val.korisnicko_ime == un[1]) {
              $('#lozinka').val(val.lozinka);
              $('#lozinka').attr('readonly', true);
              $('#potvrdaLozinka').val(val.lozinka);
              $('#potvrdaLozinka').attr('readonly', true);
            }
          });
        });
    }
  }
}

if (document.title == "Registracija") {
  document.onload = dohvatiPostaviKolacice();
  var imena = new Array();
  var prezimena = new Array();

  $.getJSON("../json/imena.json",
    function (data) {
      $.each(data, function (key, val) {
        console.log(val);
        imena.push(val);
        prezimena.push(val);
      });
    });

  $('#ime').autocomplete({
    source: imena
  });

  $('#prezime').autocomplete({
    source: prezimena
  });

  $('#datum').keyup(function (event) {
    var value = $('#datum').val();
    var re = new RegExp((/^(19[0-9][0-9]|[2-9][0-9][0-9][0-9])[/](0[1-9]|[1-2][0-9]|3[01])[/](0[1-9]|1[012])[ ]((12[:]00)|([1][01][:][0-5][0-9]))[ ]([AP][M])/));
    var re2 = new RegExp((/^((0[1-9])|([12][0-9])|3[01])[.](0[1-9]|1[012])[.](19[0-9][0-9]|[2-9][0-9][0-9][0-9])[.][ ]([012][0123])[:]([0-5][0-9])$/));
    var ok = re.test(value);
    var ok2 = re2.test(value);
    if (!ok && !ok2) {
      $('#datum').attr('style', 'background-color: red');
    }
    else {
      $('#datum').attr('style', 'background-color: green');
    }

  })
}


if (document.title == "Galerija") {
  $("button").click(function () {

    $.ajax({
      url: 'https://barka.foi.hr/WebDiP/2020/materijali/zadace/dz3/userNameSurname.php?all',
      success: function (data) {
        $(data).find('korisnik').each(function () {
          var putanja = $(this).find("slika").attr("url");
          var putanjaSplit = putanja.split("/");

          var ime = $(this).find("imePrezime").text();
          var orginal = "./multimedija/" + putanjaSplit[2]
          $.ajax({
            url: orginal,
            type: 'HEAD',
            async: false,
            success: function () {
              var datas = "<div class=\"image novesl\" >"
              datas += "<h1>" + ime + "</h1>"
              datas += "<img src=\"./multimedija/" + putanjaSplit[2] + "\"  alt=\"\" title=\"" + ime + "\" />"
              datas += '</div>'
              $('.gcontainer').append(datas);
            }
          })
        })

        $('img').click(function () {
          // $(this).find("img").css("border-color", "blue");
          var img = $(this);
          var tittle = $(this).attr('title');
          var titleSplit = tittle.split(" ");

          var urlovski = "https://barka.foi.hr/WebDiP/2020/materijali/zadace/dz3/userNameSurname.php" + "?ime=" + titleSplit[0] + "&prezime=" + titleSplit[1];
          $.ajax({
            url: urlovski,
            success: function (data) {
              $(data).find('korisnici').each(function () {

                var tipovski = $(this).find('tip').text();
                var ime = $(this).find('ime').text();
                var prezime = $(this).find('prezime').text();
                var username = $(this).find('username').text();
                // console.log(tipovski);

                if (tipovski == -1) {
                  alert("Greška kume!");
                }
                else {
                  var velicina = tipovski * 2;

                  $(img).css({
                    'border-width': velicina
                  })
                  //  alert(ime);
                  // alert(prezime);
                  document.cookie = "username=" + username + ";path=/";
                  document.cookie = "ime=" + ime + ";path=/";
                  document.cookie = "prezime=" + prezime + ";path=/";
                }
              })
            }
          })
        })
      }
    })
  })
}


