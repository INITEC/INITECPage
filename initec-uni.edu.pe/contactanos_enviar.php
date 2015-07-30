<?php
require_once ("conexion1.php");

$sql="insert into consultas values (
		null, '".$_POST["nombre"]."', '".$_POST["apellidos"]."',
		'".$_POST["dni"]."', '".$_POST["correo_electronico"]."', '".$_POST["telefono"]."','".$_POST["movil"]."', '".$_POST["comentarios"]."')";
	if($res=mysql_query($sql,$conexion)){	
		echo "<script type='text/javascript' language='javascript' >
alert ('Su consulta fue enviada con exito, Obtendra respuesta próximamente sobre su consulta.');
		history.back();
</script>";

	}
	else {
		echo "<script type='text/javascript' language='javascript' >
			alert('La consulta no pudo ser enviada, vuelva a intentarlo');
			history.back();
			</script>";}

?>
