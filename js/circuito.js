$.post(baseurl+"cciudad/getCiudades",
       {
           sitReg: 1
       },
       function (data) {
            alert(data);
       });