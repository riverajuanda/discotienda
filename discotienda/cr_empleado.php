<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CR_EMPLEADO</title>
 <link rel="stylesheet" href="css/master.css">
</head>
<body>
  <header>
    <img src="images/logo.png" alt="logo">
    <h1>Discotienda Mary Macho</h1>
    <div class="menu-icon" onclick="toggleSidebar()">☰</div>
  </header>

  <div class="main-content">
    <nav class="sidebar" id="sidebar">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="artista.php">Artista</a></li>
        <li><a href="genero.php">Género</a></li>
        <li><a href="empleado.php">Empleado</a></li>
        <li><a href="m_inventario.php">Movimiento Inventario</a></li>
        <li><a href="proveedor.php">Proveedor</a></li>
        <li><a href="producto.php">Producto</a></li>
        </ul>
    </nav>

    <div class="content">
      <h1>Bienvenido</h1>
      <p>Este es el contenido principal. El menú se puede ocultar o mostrar con el botón ☰ en cualquier tamaño de pantalla.</p>
    </div>
  </div>

  <footer>
    Discotienda
  </footer>

  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('hidden');
    }
  </script>
</body>
</html>
