
<html>
<head>
    <title></title>
</head>
<body>

    <form action="<?php echo base_url();?>cpersona/actualizar" method="POST">
        <?php echo "Usuario: ".$this->session->userdata('s_usuario');?>

        <h3>Actualiza Datos</h3>

        <input type="text" name="Nombre" placeholder="Nombre"></input><br><br>
        <input type="text" name="Apellido" placeholder="Apellido"></input><br><br>
        <input type="email" name="email" placeholder="Direccion de correo"></input><br><br>
        <input type="submit" value="Actualizar">
    </form>

    <form action="<?php echo base_url();?>cpersona/eliminar" method="POST">
    
        <h3>Eliminar por ID</h3>

        <input type="text" name="txteliminar" placeholder="ID"></input><br><br>
        <input type="submit" value="Eliminar">
    </form>

</body>
</html>