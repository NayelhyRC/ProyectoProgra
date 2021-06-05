<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../iconos/style.css">
    <title>Registrar categoría</title>
</head>
<body>
    <?php include_once '../PaginaBase/nav.php';?>
    <section class="container">
        <div class="group">
            <center><h3>Registrar categoría</h3></center>
            <form action="funCategoria.php" method="post" class="frmCategoria">
            Descripción: 
            <input type="text" name="descripcion" required>
            <div>Estado: <input type="checkbox" name="estado" checked></div>

            <input type="submit" value="Registrar" class="btn-link">
        </form>
        </div>
    </section>
    <?php include_once '../PaginaBase/footer.php';?>
</body>
</html>

<?php 
?>