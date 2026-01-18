<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario Retro</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f0f0f0; }
        h1 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { background: white; margin: 5px 0; padding: 10px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>🎮 Listado de Consolas Retro</h1>
    <ul>
        <?php
        // ATENCIÓN: El host se llama 'db', usuario 'root', contraseña 'secret'
        $conn = new mysqli("db", "root", "secret", "retro_games");

        if ($conn->connect_error) {
            echo "<p class='error'>Error de conexión: " . $conn->connect_error . "</p>";
            echo "<p>Asegúrate de que el contenedor de base de datos se llame 'db' en tu red.</p>";
        } else {
            $sql = "SELECT * FROM consolas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li><strong>" . $row["nombre"] . "</strong> (" . $row["fabricante"] . ") - " . $row["anio_lanzamiento"] . "</li>";
                }
            } else {
                echo "<li>No hay consolas en el inventario.</li>";
            }
            $conn->close();
        }
        ?>
    </ul>
</body>
</html>