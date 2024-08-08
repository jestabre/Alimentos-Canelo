<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto - Canelo</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Agregar Nuevo Producto</h1>
    <form action="admin/process_product.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        
        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <input type="submit" value="Agregar Producto">
    </form>
</body>
</html>
