<?php
require_once 'Database.php';

class Product {
    private $db;

    public function __construct() {
        // Crear una instancia de la clase Database
        $this->db = new Database();
    }

    public function getAllProducts() {
        // Definir la consulta SQL para obtener todos los productos
        $sql = "SELECT * FROM products";
        $result = $this->db->conn->query($sql);

        // Almacenar los productos en un array
        $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }

    public function addProduct($name, $description, $price, $image) {
        // Directorio donde se guardarán las imágenes
        $target_dir = "../images/";
        $target_file = $target_dir . basename($image);
        
        // Mover el archivo de imagen subido al directorio de destino
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        // Definir la consulta SQL para insertar un nuevo producto
        $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
        
        // Ejecutar la consulta
        return $this->db->conn->query($sql);
    }
}
?>
