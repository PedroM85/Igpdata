$.post(baseurl+"cpuntos/getPuntos",
    function(data){
        //alert(data);
        var obj = JSON.parse(data);
        var estilo = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
        $.each(obj, function(i, item){
            $('#tblCircuitos').append(
                '<tr>'+
                '    <td>1</td>    '+
                '    <td>'+item.alumno+'</td>    '+
                '    <td><input type="text" value="'+item.a+'" style="'+estilo+'" maxlength="2"></td>    '+
                '    <td><input type="text" value="'+item.b+'" style="'+estilo+'" maxlength="2"></td>    '+
                '    <td><input type="text" value="'+item.c+'" style="'+estilo+'" maxlength="2"></td>    '+
                '    <td><input type="text" value="'+item.d+'" style="'+estilo+'" maxlength="2"></td>    '+
                '    <td><input type="text" value="'+item.puntofinal+'" style="'+estilo+'" maxlength="2"></td>    '+             
                '</tr>'
            );
        });

        $('input[type=text]').focusout(function(){
            if ($(this).val()>20) {
               alert('valor no valido');
                $(this).focus();
                $(this).select();
            }
        });
    });