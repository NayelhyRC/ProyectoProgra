<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../iconos/style.css">
    <title>Registrar Curso</title>
</head>
<?php 
    include_once '../Entidades/Categoria.php';
    include_once '../ReglasNegocio/RNCurso.php';
    include_once '../ReglasNegocio/RNCategoria.php';
?>
<body>
    <?php include_once '../PaginaBase/nav.php';?>
    <section class="container">
        <div class="group">
            <center><h3>Registrar Curso</h3></center>
            <form action="funCurso.php" method="post" class="frmCategoria">
                Nombre: 
                <input type="text" name="nombre" required>
                Descripción: 
                <input type="text" name="descripcion" required>
                Precio: 
                <input type="text" name="precio" required>
                Idioma: 
                <select name="idioma" require>
                    <option value="Español" selected>Español</option>
                </select>
                Categoría: 
                <select name="categoria" require>
                    <?php ListarCatergorias();?>
                </select>
                <div>Estado: <input type="checkbox" name="estado" checked></div>

                <input type="submit" value="Registrar" class="btn-link">
            </form>
        </div>
    </section>
    <?php include_once '../PaginaBase/footer.php';?>
</body>
</html>

<?php
    function ListarCatergorias()
    {
        $rn = new RNCategoria;
        $resultado = $rn->Listar();
        while($fila=mysqli_fetch_array($resultado)){
            echo "<option value='".$fila['Id']."'>".$fila['Descripcion']."</option>";
         }
    }
?>