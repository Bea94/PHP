<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<title>Expedientes buscados</title>
	</head>

	<body>
		<a href="../html/indice.html"><img src="../img/flecha2.png" id="volver"/></a>
		</br>

<?php
	require_once("conection.php");

	$peticion="SELECT * FROM proyecto WHERE ";


	if(isset($_POST['dni']) && $_POST['dni'] != null && $_POST['dni'] != "" ){
		
		$peticion.="dni='".$_POST['dni']."' AND";
	
	}


	if(isset($_POST['nombre']) && $_POST['nombre'] != null && $_POST['nombre'] != "" && isset($_POST['nombre'])){
		
		$peticion.="nombre='".$_POST['nombre']."' AND";
	}


	if(isset($_POST['apellidos']) && $_POST['apellidos'] != null && $_POST['apellidos'] != ""){
		
		
		$peticion.="apellidos='".$_POST['apellidos']."' AND";
		
	}


	if(isset($_POST['email']) && $_POST['email'] != null && $_POST['email'] != ""){
		
		$peticion.="email='".$_POST['email']."' AND";
		
	}


    if(isset($_POST['tel']) && $_POST['tel'] != null && $_POST['tel'] != ""){
		
		$peticion.="tel='".$_POST['tel']."' AND";
		
	}


    if(isset($_POST['provincia']) && $_POST['provincia'] != null && $_POST['provincia'] != ""){
		
		$peticion.="provincia='".$_POST['provincia']."' AND";
		
	}


    if(isset($_POST['paxad']) && $_POST['paxad'] != null && $_POST['paxad'] != ""){
		
		$peticion.="paxad='".$_POST['paxad']."' AND";
		
	}


    if(isset($_POST['paxkid']) && $_POST['paxkid'] != null && $_POST['paxkid'] != ""){
		
		$peticion.="paxkid='".$_POST['paxkid']."' AND";
		
	}


    if(isset($_POST['paxpet']) && $_POST['paxpet'] != null && $_POST['paxpet'] != ""){
		
		$peticion.="paxpet='".$_POST['paxpet']."' AND";
		
	}


    if(isset($_POST['date']) && $_POST['date'] != null && $_POST['date'] != ""){
		
		$peticion.="date='".$_POST['date']."' AND";
		
	}


	if(isset($_POST['actividad']) && $_POST['actividad'] != null && $_POST['actividad'] != ""){
		
		$peticion.="actividad='".$_POST['actividad']."' AND";
		
	}


    if(isset($_POST['ppto']) && $_POST['ppto'] != null && $_POST['ppto'] != ""){
		
		$peticion.="ppto='".$_POST['ppto']."' AND";
		
	}




	$peticion=substr($peticion,0,-3);



	if($result=$conn->query($peticion)){

		echo "<h3>Hemos encontrado ".$result->num_rows." registro/s</h3>";
		
		echo "<table border='1'>";
		
		echo "<tr>";
		
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
		
		echo "</tr>";
		
		while($fila=$result->fetch_assoc()){
			echo "<tr>";
				foreach($fila as $elemento){
					echo "<td>".$elemento."</td>";
				}
			echo "</tr>";
		}
		echo "</table>";
	

	}else{
		echo "Algo ha ido mal, registros no encontrados";
	}
	
	$conn->close();
	
?>

	</body>
</html>