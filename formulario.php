<?php
    // Array que determina si el usuario a llenado el formulario, y crea las variables. 
    if($_POST) {      
        $nombre = $_POST['nombre'];
        $papellido = $_POST['papellido'];
        $sapellido = $_POST['sapellido'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $passw = $_POST['passw'];

        //Creamos la conexión a la base de datos.  
        $servername = "localhost";    
        $username = "yessica";
        $password = "";
        $dbname = "bdform";
        $bd = new mysqli($servername, $username, $password, $dbname);

        // Verificamos la conexion a la BD con el condicional if.
        if ($bd ->connect_error){
            die("Conexion fallida: " . $bd->connect_error);
        }

        //Realizamos una busqueda en la base de datos y con el condicional if verificamos que este correo ya no exista en la tabla.    
        $revquery = "SELECT * FROM `usuario` WHERE `email` = '$email'";
        $result = $bd->query($revquery);

        if ($result->num_rows > 0) {
            echo '<body style="background-color: #95abc0ed; font-family: Verdana">'; //Damos estilo a la página.
            echo "<p>El email ya está registrado. Por favor, utiliza otro email.</p>"; // si el email ya existe, enviamos mensaje de error.
        } else {

            //Verificamos que se llenen todos los campos, ya que son obligatorios.
            if (
                empty($_POST['nombre']) ?? empty($_POST['papellido']) ?? empty($_POST['sapellido']) ?? empty($_POST['email']) ?? empty($_POST['login']) ?? empty($_POST['passw'])
            ) {
                echo '<body style="background-color: #95abc0ed; font-family: Verdana">'; //Damos estilo a la página agregando un fondo de pantalla color azul.
                echo "Todos los campos son obligatorios";
            } else {

                // Creamos un nuevo registro en la base de datos.
                $sql = "INSERT INTO `usuario` (`nombre`,`papellido`,`sapellido`,`email`,`login`,`passw`) VALUES ('$nombre','$papellido','$sapellido','$email','$login','$passw')";

                //Se muestra mensaje de confirmación del registro, y si no, se muestra mensaje de error.
                if ($bd->query($sql) === TRUE) {
                    echo '<body style="background-color: #95abc0ed; font-family: Verdana">'; //Damos estilo a la pagina agregando un fondo de pantalla color azul.
                    echo "<p>¡Registro completado con exito!</p>";
                    
                } else {
                    echo "Error:" .$sql."<br>". $bd->error;
                }  
                $bd->close(); // Se cierra la conexion con la BD.    
            }
        }    
    }   
?>