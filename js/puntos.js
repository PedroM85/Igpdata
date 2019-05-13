$.post(baseurl+"cpuntos/getPuntos",
    function(data){
        //alert(data);
        var obj = JSON.parse(data);
        var estilo = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
        $.each(obj, function(i, item){
            $('#tblCircuitos tbody').append(
                '<tr class="filapunto">'+
                '    <td>1</td>                                                                                        '+
                '    <td><div class="alum" id="'+item.idPersona+'"></div>'+item.alumno+'</td>                                                                          '+
                '    <td><input type="text" value="'+item.a+'" style="'+estilo+'" maxlength="2" class="punto1"></td>   '+
                '    <td><input type="text" value="'+item.b+'" style="'+estilo+'" maxlength="2" class="punto2"></td>   '+
                '    <td><input type="text" value="'+item.c+'" style="'+estilo+'" maxlength="2" class="punto3"></td>   '+
                '    <td><input type="text" value="'+item.d+'" style="'+estilo+'" maxlength="2" class="punto4"></td>   '+
                '    <td><input type="text" value="'+item.e+'" style="'+estilo+'" maxlength="2" class="puntofinal"></td>'+             
                '</tr>'
            );
        });
        
        $('input[type=text]').focus(function(){
            $(this).select();
        });        

        $('input[type=text]').focusout(function(){
            var tx = $(this);
            if ($(tx).val()>20) {
                $('#mensaje').val('valor no valido');
                setTimeout(function(){
                    $(tx).focus();
                    $(tx).select();
                },10)
            }
        });

         //Calcula parado en el 1 items
         $('#tblCircuitos .punto1').keyup(function(){
            var i = $('.punto1').index(this);

            var n1 =$('.punto4:eq('+i+')').val();
            var n2 =$('.punto2:eq('+i+')').val();
            var n3 =$('.punto3:eq('+i+')').val();

            var promedio = (parseFloat(n1)+parseFloat(n2)+parseFloat(n3)+parseFloat($(this).val()))/4;

            $('.puntofinal:eq('+i+')').val(promedio);

            //alert('punto4:' + i);
        });
         //Calcula parado en el 2 items
         $('#tblCircuitos .punto2').keyup(function(){
            var i = $('.punto2').index(this);

            var n1 =$('.punto1:eq('+i+')').val();
            var n2 =$('.punto4:eq('+i+')').val();
            var n3 =$('.punto3:eq('+i+')').val();

            var promedio = (parseFloat(n1)+parseFloat(n2)+parseFloat(n3)+parseFloat($(this).val()))/4;

            $('.puntofinal:eq('+i+')').val(promedio);

            //alert('punto4:' + i);
        });
         //Calcula parado en el 3 items
         $('#tblCircuitos .punto3').keyup(function(){
            var i = $('.punto3').index(this);

            var n1 =$('.punto1:eq('+i+')').val();
            var n2 =$('.punto2:eq('+i+')').val();
            var n3 =$('.punto4:eq('+i+')').val();

            var promedio = (parseFloat(n1)+parseFloat(n2)+parseFloat(n3)+parseFloat($(this).val()))/4;

            $('.puntofinal:eq('+i+')').val(promedio);

            //alert('punto4:' + i);
        });
        //Calcula parado en el 4 items
        $('#tblCircuitos .punto4').keyup(function(){
            var i = $('.punto4').index(this);

            var n1 =$('.punto1:eq('+i+')').val();
            var n2 =$('.punto2:eq('+i+')').val();
            var n3 =$('.punto3:eq('+i+')').val();

            var promedio = (parseFloat(n1)+parseFloat(n2)+parseFloat(n3)+parseFloat($(this).val()))/4;

            $('.puntofinal:eq('+i+')').val(promedio);

            //alert('punto4:' + i);
        });
    });

        $('#btngrabar').click(function(){
            var i = 0;
            $('#tblCircuitos .filapunto').each(function(){
                var idper =$('.alum:eq('+i+')').attr('id');
                var n1 =$('.punto1:eq('+i+')').val();
                var n2 =$('.punto2:eq('+i+')').val();
                var n3 =$('.punto3:eq('+i+')').val();
                var n4 =$('.punto4:eq('+i+')').val();
                var nf =$('.puntofinal:eq('+i+')').val();
                
                $.post(baseurl+"cpuntos/grabarpunto",
                {
                    idper:idper,
                    n1:n1,
                    n2:n2,
                    n3:n3,
                    n4:n4,
                    nf:nf
                },
                function(data){
                    alert(data);
                });
            
            i++;
                
            });
          alert(data);
        });
