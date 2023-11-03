<?php
/*
	$conn es la forma en la que establecemos la conexión a nuestra base de datos.

    $conn=mysqli_connect();
        Dentro de los paréntesis:
			- localhost (donde está nuestro servidor sql, nuestro caso es localhost)
			- root (el usuario en base de datos, nosotros root porque no lo hemos cambiado)
			- contraseña (ahora vacía)
			- base de datos: nombre de documento de base de datos con el que vamos a trabajar(proyecto)

	Hacemos después un if que nos devuelve el mensaje de error, en caso de que haya habido fallo con la conexión.

	Nota para mí: al hacer la prueba, esto no da error, por lo que OK.

*/

	$conn=mysqli_connect("localhost","root","","proyecto");

	if($conn->connect_error){									
		echo "<h1>Error al conectar a la base de datos</h1>";
		exit;
	}
	
?>