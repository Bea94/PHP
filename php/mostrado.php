<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<title>Expedientes mostrados</title>
	</head>

	<body>
		<a href="../indice.html"><img src="../img/flecha2.png" id="volver"/></a>
	</br>
	
<?php

	
	require_once("conection.php");

	$peticion="SELECT * FROM proyecto";
	
	if($result=$conn->query($peticion)){
		echo "<h3>Datos guardados:</h3>";
		echo "Se han devuelto <b>".$result->num_rows."</b> registros";
		"</br></br>";
	
		echo "<table border='1'>";

		
		echo "<th>DNI</th>";
		echo "<th>NOMBRE</th>";
		echo "<th>APELLIDOS</th>";
		echo "<th>EMAIL</th>";
		echo "<th>TELÉFONO</th>";
		echo "<th>PROCEDENCIA</th>";
		echo "<th>Nº ADULTOS</th>";
		echo "<th>Nº NIÑOS</th>";
		echo "<th>Nº MASCOTAS</th>";
		echo "<th>FECHA</th>";
		echo "<th>ACTIVIDAD</th>";
		echo "<th>PRESUPUESTO</th>";
	
	
			while($fila=$result->FETCH_ASSOC()){              //fetch_assoc nos saca una fila; él solo irá sacando filas dentro del bucle; no es necesario especificar más
				echo "<tr>";
					echo "<td>".$fila['dni']."</td>";
					echo "<td>".$fila['nombre']."</td>";
					echo "<td>".$fila['apellidos']."</td>";
					echo "<td>".$fila['email']."</td>";
					echo "<td>".$fila['tel']."</td>";
					echo "<td>".$fila['provincia']."</td>";
					echo "<td>".$fila['paxad']."</td>";
					echo "<td>".$fila['paxkid']."</td>";
					echo "<td>".$fila['paxpet']."</td>";
					echo "<td>".$fila['date']."</td>";
					echo "<td>".$fila['actividad']."</td>";
					echo "<td>".$fila['ppto']."</td>";
				echo "</tr></br>";
				
			}
	
			echo "</table>";
	
	
	}else{
		echo "Algo ha ido mal, registro no borrado";
	}
	
	$conn->close();
	
?>

	</body>
</html>