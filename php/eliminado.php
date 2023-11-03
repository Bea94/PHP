<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<title>Expediente eliminado</title>
	</head>

	<body>
		<a href="../indice.html"><img src="../img/flecha2.png" id="volver"/></a>
		</br>

<?php
	require_once("conection.php");

	$peticion="DELETE FROM proyecto WHERE dni='".$_POST['dni']."'";


	if($conn->query($peticion)){
		
		if($conn->affected_rows>0){
			echo "Todo ha ido bien, se han borrado ".$conn->affected_rows." registros";
		}else{
			echo "La petición a ido bien, pero no se ha borrado ningún registro.";
		}
	
	}else{
		echo "Algo ha ido mal, registro no borrado";
	}
	
	$conn->close();
	
?>

</body>
</html>