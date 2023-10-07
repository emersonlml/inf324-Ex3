<!DOCTYPE html>
<html>
    <?php
  include "conexion.inc.php";

  // confirmar sesion
  
  session_start();
  
  
  if (!isset($_SESSION['loggedin'])) {
  
      header('Location: index.php');
      exit;
  }
  
echo "Emerson Antonio ibañez Torrez inf-324";

    // Cerrar la conexión a la base de datos
    $con->close();
    ?>
  
<body class="loggedin">
    <nav class="navtop">
        <h1 style="color:black;">ejer 3</h1>
      
    <img src="usuario.jpg" style="height:50px; width:50px;"/>
   
    </div>
        <a href="cerrar-sesion.php" style="color:black;"></>Cerrar Sesión</a>
    </nav>

    <div class="content">
    
        <p>Hola de nuevo, <?= $_SESSION['name'] ?> !!!</p>
        
        <?php
          include "conexion.inc.php";
        // Nombre de usuario proporcionado por el formulario de inicio de sesión
            $tip_us = $_SESSION['name']; 
        //vemos el tipo de rol que tiene el usuario
        $resultado=mysqli_query($con,"select rol.tipo_rol   from usuario INNER JOIN rol  on idRol=Rol_idRol where usuario.username='$tip_us'");

        while ($fila = $resultado->fetch_assoc()) {
        
            echo"<tr>";
            echo "<td>".$fila["tipo_rol"]."</td> <br>" ;
            echo "<td>";
            }
    ?>
    </div>
    <h3>Selecciona un color para el fondo:</h3>

<form id="colorForm">
    <select id="colorSelect" name="color">
        <option value="white">Blanco</option>
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
        <option value="yellow">Amarillo</option>
        <option value="orange">Naranja</option>
    </select>
    <input type="submit" value="Cambiar Color">
</form>

<script>
    // Función para cambiar el color de fondo cuando se selecciona un color
    document.getElementById("colorForm").addEventListener("submit", function (e) {
        e.preventDefault(); // Evitar que el formulario se envíe

        // Obtener el valor seleccionado del <select>
        var color = document.getElementById("colorSelect").value;

        // Cambiar el color de fondo de la página
        document.body.style.backgroundColor = color;
    });
</script>

</body>
</html>
