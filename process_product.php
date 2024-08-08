<?php
require_once '../classes/Database.php';
require_once '../classes/Product.php';

// Crear una instancia de la clase Product
$product = new Product();

// Obtener los datos del formulario
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];

// Mover la imagen a la carpeta de imágenes
$target_dir = "../images/";
$target_file = $target_dir . basename($image);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    // Agregar el producto a la base de datos
    $success = $product->addProduct($name, $description, $price, $image);

    if ($success) {
        echo "Producto agregado exitosamente.";
    } else {
        echo "Error al agregar el producto.";
    }
} else {
    echo "Error al subir la imagen.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Canelo - Procesar Producto</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css"> <!-- Ajuste la ruta del CSS -->
</head>
<body>
<br><br>
    <!-- Botón para volver al índice -->
    <a href="../index.php">
        <button>Volver a la página principal</button>
    </a>
</body>
</html>