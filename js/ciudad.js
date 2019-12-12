$.post(baseurl+"cciudad/getCiudades",
{
    "sitReg": 1
},
function(data){
    var obj = JSON.parse(data);
    output = '';
    var estilo= 'width:100px;height:100px;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;background:#5cb85c;';
    $.each(obj, function(i, item){
       output +='<li>'+
                '<div style="'+estilo+'" class="clsciudad"></div>'+
                '<input type="text" style="width:50%;" value="'+item.ciudad+'" class="clsnombreCiudad">'+
                '<a class="users-list-name" href="#">'+item.ciudad+'</a>'+
                '<span class="users-list-date">'+item.idCiudad+'</span>'+
                '</li>';
        
    });
    $('#listcuidades').html(output);

//para mostrar los index de los objectos. usando las clases
    $('#listcuidades .clsciudad').click(function(){
       var i = $('.clsciudad').index(this);
       var nc = $('.clsnombreCiudad:eq('+i+')').val();
       alert(nc);  
    })
});

$('#btnGrabar').click(function(){
    var i = 0;
    $('#listcuidades .clsnombreCiudad').each(function(){
        var nc = $('.clsnombreCiudad:eq('+i+')').val();
        i++;
        //alert(nc);

        //implementar el guardado 
        $.post("grabarciudad",
        {ciudad:nc},
        function(data){
            alert('Se grabo correctamente');
        });
        
    })    
});