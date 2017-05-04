
    var clic = 1;
    lotes = "";
    function divLogin(lote) {
        point=$(lote);
        if (lote != lotes && lotes != "") {
            lotes.style.fill = "white";
            lote.style.fill = "#0195bf";
            alert($(lote).attr('points'));
        }
       $.ajax({
            url:"mapa",
                headers: {'X-CSRF-TOKEN': token},
                 type: 'POST',
                  dataType: 'json',
                   data: {email:email, password:password},
              });
    
        lotes = lote;
        if (clic == 1) {
            document.getElementById("caja").style.display = "block";
            lote.style.fill = "#0195bf";
            clic = clic + 1;
        } else {
            document.getElementById("caja").style.display = "block";
            clic = 1;
        }
    }


