<?php 
require_once 'classes/Database.php';
require_once 'classes/Product.php';

// Crear una instancia de la clase Product
$product = new Product();

// Obtener todos los productos
$products = $product->getAllProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Canelo - Tienda de comida para mascotas</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Bienvenido a Canelo</h1>
     <!-- Botón para agregar un nuevo producto -->
     <a href="add_product.php">
        <button>Agregar Nuevo Producto</button>
    </a>
    <div class="product-list">
        <?php
        if (count($products) > 0) {
            foreach ($products as $product) {
                echo "<div class='product'>";
                echo "<h2>" . $product["name"] . "</h2>";
                echo "<p>" . $product["description"] . "</p>";
                echo "<p>Precio: $" . $product["price"] . "</p>";
                echo "<img src='images/" . $product["image"] . "' alt='" . $product["name"] . "'>";
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles.";
        }
        ?>
    </div>
</body>
</html>


