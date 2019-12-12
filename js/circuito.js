$.post(baseurl+"cciudad/getCiudades",
       {
           "sitReg": 1
       },
       function (data) 
       {
            var c = JSON.parse(data);
            $.each(c,function(i,item){
               $('#cbociudad').append('<option value="'+item.idCiudad+'">'+item.ciudad+'</option>');     
            });
        });

$('#cbociudad').change(function(){
    $('#cbociudad option:selected').each(function(){
        var id = $('#cbociudad').val();
       alert(id);
    });
});

$('#btnGetCircuitos').click(function(){
    //alert('Entro al boton');
    //limpiar la tabla para no repetir datos
     $('#tblCircuitos').html(
        '<tr>'+
            '<th style="width: 10px">#</th>'+
            '<th>&nbsp;Circuito</th>'+
            '<th>Pais</th>'+
            '<th>Vueltas</th>'+
            '<th>Suspension</th>'+
            '<th>Altura del Coche</th>'+
            '<th>Nivel de Alerones</th>'+
            '<th>Pits</th>'+
            '<th>compatibilidad</th>'+
        '</tr>'
     );
    $.post(baseurl+"ccircuitos/getCircuitos",
    function(data)
    {
       // alert(data);
       var c = JSON.parse(data);
       $.each(c, function(i, item){
           $('#tblCircuitos').append(
            '<tr>'+
                '<td>1</td>'+
                '<td>'+item.circuito+'</td>'+
                '<td>'+item.ciudad+'</td>'+
                '<td>'+item.vuelta+'</td>'+
                '<td>'+item.suspension+'</td>'+
                '<td>'+item.altucoche+'</td>'+
                '<td>'+item.nivelaleron+'</td>'+
                '<td>'+item.pits+'</td>'+
                '<td>'+item.compa+'</td>'+
            '</tr>'
           );
       });

    });
});

