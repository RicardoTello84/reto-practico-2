<?php
$host = gethostname();
echo "<h1>Host: $host</h1>";
echo "<p>Contenedor se está ejecutando: <strong>$host</strong></p>";

$servername = "db";
$username = "user";
$password = "userpassword";
$dbname = "mydb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "<h2>Lista de usuarios</h2>";

$result = $conn->query("SELECT id, name, email FROM users");

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row["id"]}</td>";
        echo "<td>{$row["name"]}</td>";
        echo "<td>{$row["email"]}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay usuarios.";
}

$conn->close();
?>
