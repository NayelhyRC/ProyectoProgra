<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registrar categoría</title>
</head>
<body>
    <div class="container">
        <fieldset class="group">
            <legend>Registrar categoría</legend>
            <form action="funCategoria.php" method="post" class="frmCategoria">
            Descripción: 
            <input type="text" name="descripcion" required>
            <div>Estado: <input type="checkbox" name="estado"></div>

            <input type="submit" value="Registrar">
        </form>
        </fieldset>
        <?php VerificarRegistro();?>
    </div>
</body>
</html>

<?php 
    function VerificarRegistro()
    {
        if (isset($_GET['register'])) {
            if ($_GET['register'] == 'yes') {
                echo '<h3>Categoria registrada</h3>';
                header("refresh:4;url=frmCategoria.php");
            }
        }
    }
?>