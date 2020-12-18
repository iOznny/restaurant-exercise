<?php

  // Variables de View.
  $m_name = $_POST['name'];
  $m_description = $_POST['description'];
  $m_price = $_POST['price'];
   
  // Ejemplo de conexión a base de datos MySQL con PHP.
	$server = "school.stregasystem.com";
	$username = "schoolst_demo";
	$password = "Hola2020@@";
	$database = "schoolst_testing";
	
	// Creación de la conexión a la Base de Datos con mysql_connect().
  try {
    	$conexion = new PDO('mysql:host='.$server.';dbname='.$database, $username, $password);
    	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    	$conexion->exec("SET CHARACTER SET utf8");  
      echo "Conexión satisfactoria." . '<br>';

      // Crear menu.
      $query = "INSERT INTO menus VALUES (null, '$m_name', '$m_description', '$m_price');";
      $resultado = $conexion->prepare($query);
      $resultado->execute();
      echo "Menu registrado exitosamente.";
  } catch (PDOException $e) {
    	echo "Error: " . $e->getMessage();  
    	echo "Conexión sin éxito." . '<br>';   
	}
     
?>
