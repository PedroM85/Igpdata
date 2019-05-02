<html>
<head>
    <title></title>
</head>
<body>
    <form action="<?php echo base_url(); ?>clogin/ingresar" method="POST">
        <table>
            <tr>
                <td><label>Usuario</label></td>
                <td><input type="text" name="txtusuario"></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="pass"></td>
            </tr>
                <td><input type="submit" Value="Ingresar"></td>
        </table>
    </form>
    <h1><?php echo $mensaje; ?></h1>
</body>
</html>