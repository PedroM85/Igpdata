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
        var id= $('#cbociudad').val();
       //alert(id);

    })
})

