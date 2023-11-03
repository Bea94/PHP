<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<title>Expedientes creados</title>
	</head>

	<body>
		<a href="../indice.html"><img src="../img/flecha2.png" id="volver"/></a>
		</br>

<?php

	require_once("conection.php");

	$solicitud="INSERT INTO proyecto VALUES('".$_POST['dni']."','".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."','".$_POST['tel']."','".$_POST['provincia']."','".$_POST['paxad']."','".$_POST['paxkid']."','".$_POST['paxpet']."','".$_POST['date']."','".$_POST['actividad']."','".$_POST['ppto']."')";


	if($conn->query($solicitud)){
		echo "Todo ha ido bien, registro insertado";
	}else{
		echo "Algo ha ido mal, registro no insertado";
	}
	
	$conn->close();

?>

	</body>
</html>