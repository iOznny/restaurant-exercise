<?php

  $m_name = $_POST['name'];
  $m_description = $_POST['description'];
  $m_price = $_POST['price'];
   
  // Ejemplo de conexión a base de datos MySQL con PHP.
	$server = "school.stregasystem.com";
	$username = "schoolst_demo";
	$password = "Hola2020@@";
	$database = "schoolst_testing";
	
	// Creación de la conexión a la Base de Datos con mysql_connect()
  try {
    	$conexion = new PDO('mysql:host='.$server.';dbname='.$database, $username, $password);
    	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    	$conexion->exec("SET CHARACTER SET utf8");  
      echo "Conexión satisfactoria.";
      
      // Crear menu.
      //insertarMenu();

  } catch (PDOException $e) {
    	echo "Error: " . $e->getMessage();  
    	echo "Conexión sin éxito.";   
	}
     
  
  function insertarMenu() {
    // Ingresar Menu.
    try { 
      // Consulta SQL
      $sql = "INSERT INTO menu VALUES (null, '$m_name', '$m_description', '$m_price');";
      $resultado = $conexion->prepare($sql);
      $resultado->execute();
      echo "Menu registrado exitosamente.";
      
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();  
      echo "Ocurrio un error al registrar el menu, verifique e intente más tarde.";
    }
  }

  
  /* Pedimos la información remota */
	/* $sql = 'SELECT * FROM menus';
  foreach ($conexion->query($sql) as $row) {
    print $row['id'] . ' - ' . $row['name'] . '<br>';
  } */


  



?>
