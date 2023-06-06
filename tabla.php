<?php
  //Creamos la conexion a la base de datos.  
  $servername = "localhost";    
  $username = "yessica";
  $password = "";
  $dbname = "bdform";
  $bd = new mysqli($servername, $username, $password, $dbname);

  // Verificamos la conexion a la BD con el condicional if.
  if ($bd->connect_error) {
    die("Conexion fallida: " . $bd->connect_error);
  }

  echo '<body style="background-color: #95abc0ed">'; //Damos estilo a la pagina cambiando el color de fondo de la pantalla.
  
  // Consultamos a la base de datos con una query.
  $query = "SELECT * FROM `usuario`";          
  $result = $bd->query($query); 

  //Mostramos los resultados en una tabla a la que le dimos estilos con ccs.
  if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 100%; font-family: Verdana; font-size: 12px;'>";
    echo "<tr>
        <th style='border: 1px solid #ddd; padding: 8px;'>Nombre</th>
        <th style='border: 1px solid #ddd; padding: 8px;'>Primer Apellido</th>
        <th style='border: 1px solid #ddd; padding: 8px;'>Segundo Apellido</th>
        <th style='border: 1px solid #ddd; padding: 8px;'>Email</th>
        <th style='border: 1px solid #ddd; padding: 8px;'>Usuario</th>
        <th style='border: 1px solid #ddd; padding: 8px;'>Contraseña</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td style='border: 1px solid #ddd; padding: 8px; background-color: #f8f7f7;'>" . $row['nombre'] . "</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px; background-color: #f8f7f7;'>" . $row['papellido'] . "</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px; background-color: #f8f7f7;'>" . $row['sapellido'] . "</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px; background-color: #f8f7f7;'>" . $row['email'] . "</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px; background-color: #f8f7f7;'>" . $row['login'] . "</td>";
      echo "<td style='border: 1px solid #ddd; padding: 8px; background-color: #f8f7f7;'>" . $row['passw'] . "</td>";
      echo "</tr>";
  }
    echo "</table>";
    
  //Mensaje de error. 
  } else {
    echo '<body style="background-color: #95abc0ed; font-family: Verdana">';
    echo "No se encontraron registros.";
  }
  $bd->close(); // Se cierra la conexion con la BD.
?>