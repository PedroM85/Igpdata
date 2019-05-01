<!DOCTYPE html>
<html>
<head>
        <title> Carga de Persona </title>
</head>
<body>
        <h1> Datos Personas</h1>
        <form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
            <Table>
                <tr>
                    <td><label>Nombre</label></td>
                    <td><input type="text" name="Nombre" maxlength="20"></td>
                </tr>
                <tr>
                    <td><label>Apellido</label></td>
                    <td><input type="text" name="Apellido"></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label>usuario</label></td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td><label>Contraseña</label></td>
                    <td><input type="text" name="pass"></td>
                </tr>
                <tr>
                    <td><label>fecha</label></td>
                    <td><input type="date" name="fecha"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Ingresar"></td>
                </tr>
            </table>
        </form>
</body>
</html>