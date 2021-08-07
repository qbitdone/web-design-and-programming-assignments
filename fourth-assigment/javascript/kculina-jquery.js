$(".detaljiKlik").click(function(e){
  e.preventDefault();
})

$(".detaljiKlik").click(function () {
  var value = $(this).attr("href");
  //alert(value );
  $('#podatci-tab').html("");
  var atributi = "<th>ID<th> <th>Plavi borac<th><th>Crveni borac<th><th>Datum<th><th>Vrijeme<th><th>Kategorija<th><th>Sudac<th><th>Ocjena<th><th>Boja<th><th>Borba pogledana<th><th>Detalj<th></th>";
  $(atributi).appendTo("#podatci-tab");
  $.getJSON('./generiraniajax.php', function(data) {
    console.log(data);
    $.each(data.obrasci, function(i, post)
    {
      if(post.id_obrazac == value)
      {
        var noviRed = "<tr>"+ "<td>"+post.id_obrazac+"<td>" + 
        "<td>"+post.plavi_borac+"<td>" +
        "<td>"+post.crveni_borac+"<td>" +
        "<td>"+post.datum+"<td>" + 
        "<td>"+post.vrijeme+"<td>" +  
        "<td>"+post.kategorija+"<td>" + 
        "<td>"+post.sudac+"<td>" + 
        "<td>"+post.ocjena+"<td>" + 
        "<td>"+post.boja+"<td>"+ 
        "<td>"+post.borba_pogledana+"<td>" + 
        "<td>"+post.detalj_borbe+"<td>" + 
        "</tr>";
       $(noviRed).appendTo("#podatci-tab");
      }
    });
  });
});


