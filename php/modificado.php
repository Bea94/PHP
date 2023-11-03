<html>
	<head>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        <title>Expediente modificado</title>
	</head>

	<body>
		<a href="../html/indice.html"><img src="../img/flecha2.png" id="volver"/></a>
        </br>

<?php
	require_once("conection.php");


    if($_POST['dnibuscado']!="" && ($_POST['dni']!="" || $_POST['nombre']!="" || $_POST['apellidos']!="" || $_POST['email']!="" || $_POST['tel']!="" || $_POST['provincia']!="" || $_POST['paxad']!="" || $_POST['paxkid']!="" || $_POST['paxpet']!="" || $_POST['date']!="" || $_POST['actividad']!="" || $_POST['ppto']!="")){

        $peticion="UPDATE proyecto SET ";



        if(isset($_POST['dni']) && $_POST['dni'] != null && $_POST['dni'] != "" ){
            
            $peticion.="dni='".$_POST['dni']."',";
        
        }


        if(isset($_POST['nombre']) && $_POST['nombre'] != null && $_POST['nombre'] != "" && isset($_POST['nombre'])){
            
            $peticion.="nombre='".$_POST['nombre']."',";
        }


        if(isset($_POST['apellidos']) && $_POST['apellidos'] != null && $_POST['apellidos'] != ""){
            
            
            $peticion.="apellidos='".$_POST['apellidos']."',";
            
        }


        if(isset($_POST['email']) && $_POST['email'] != null && $_POST['email'] != ""){
            
            $peticion.="email='".$_POST['email']."',";
            
        }


        if(isset($_POST['tel']) && $_POST['tel'] != null && $_POST['tel'] != ""){
            
            $peticion.="tel='".$_POST['tel']."',";
            
        }


        if(isset($_POST['provincia']) && $_POST['provincia'] != null && $_POST['provincia'] != ""){
            
            $peticion.="provincia='".$_POST['provincia']."',";
            
        }


        if(isset($_POST['paxad']) && $_POST['paxad'] != null && $_POST['paxad'] != ""){
            
            $peticion.="paxad='".$_POST['paxad']."',";
            
        }


        if(isset($_POST['paxkid']) && $_POST['paxkid'] != null && $_POST['paxkid'] != ""){
            
            $peticion.="paxkid='".$_POST['paxkid']."',";
            
        }


        if(isset($_POST['paxpet']) && $_POST['paxpet'] != null && $_POST['paxpet'] != ""){
            
            $peticion.="paxpet='".$_POST['paxpet']."',";
            
        }


        if(isset($_POST['date']) && $_POST['date'] != null && $_POST['date'] != ""){
            
            $peticion.="date='".$_POST['date']."',";
            
        }


        if(isset($_POST['actividad']) && $_POST['actividad'] != null && $_POST['actividad'] != ""){
            
            $peticion.="actividad='".$_POST['actividad']."',";
            
        }


        if(isset($_POST['ppto']) && $_POST['ppto'] != null && $_POST['ppto'] != ""){
            
            $peticion.="ppto='".$_POST['ppto']."',";
            
        }


        $peticion=substr($peticion,0,-1);

        $peticion.="WHERE DNI='".$_POST['dnibuscado']."'";


        if($conn->query($peticion)){
            
            if($conn->affected_rows>0){
                echo "Todo ha ido bien, se han actualizado ".$conn->affected_rows." registros";
            }else{
                echo "DNI no encontrado.";
            }
        
        }else{
            echo "Algo ha ido mal, registro no actualizado";
        }
        
    }else{
        echo "Debes introducir algún dato nuevo en el formulario y un dni a buscar";
    }
        
    
    $conn->close();
	
?>


    </body>
</html>