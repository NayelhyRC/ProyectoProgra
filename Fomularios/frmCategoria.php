<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar categoría</title>
</head>
<body>
    <div class="container">
        <form action="funCategoria.php" method="post">
            Descripción: 
            <input type="text" name="descripcion" required>
            Estado: 
            <input type="radio" name="estado" required>

            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>