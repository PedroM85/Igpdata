<!DOCTYPE html>
<html>
<head>
        <title> Carga de Circuitos </title>
</head>
<body>
        <h1> Datos del Circuitos</h1>
        <form action="<?php echo base_url(); ?>ccircuitos/guardar" method="POST">
            <Table>
                <tr>
                    <td><label>Circuitos</label></td>
                    <td><input type="text" name="Circuito" maxlength="20"></td>
                </tr>
                <tr>
                    <td><label>Vueltas</label></td>
                    <td><input type="text" name="Vueltas"></td>
                </tr>
                <tr>
                    <td><label>Suspencion</label></td>
                    <td><input type="text" name="Suspencion"></td>
                </tr>
                <tr>
                    <td><label>altura</label></td>
                    <td><input type="text" name="altura"></td>
                </tr>
                <tr>
                    <td><label>alerones</label></td>
                    <td><input type="text" name="alerones"></td>
                </tr>
                <tr>
                    <td><label>pits</label></td>
                    <td><input type="text" name="pits"></td>
                </tr>
                <tr>
                    <td><label>compatibildiad</label></td>
                    <td><input type="text" name="compatibildiad"></td>
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