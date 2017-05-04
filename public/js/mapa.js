
    var clic = 1;
    lotes = "";
    punto="";
    function divLogin(lote) {
        point=$(lote);
        token=$('#token').value;
         punto=$(lote).attr('points');
         
        if (lote != lotes && lotes != "") {
            lotes.style.fill = "white";
            lote.style.fill = "#0195bf";
           
        }
     
    
        lotes = lote;
        //aaaaa
    }

function cargardatos(){
  $("#punto").val(punto.trim());
}


/*
function guardar_lote(){
      $.ajax({
            url:"mapa",
          headers: {'X-CSRF-TOKEN': token},
         type: 'POST',
        dataType: 'json',
    data: {nro_lote:nro_lote,dimension:dimension, estado:estado},
              });
}*/

