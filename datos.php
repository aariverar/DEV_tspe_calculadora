<?php 
$conexion=mysqli_connect('localhost:3307','root','Tsoft2021','tspe_h_estimacion');
$continente=$_POST['continente'];

	$sql="SELECT IdApp,
			 Cod_Cliente,
			 Nombre_App 
		from aplicaciones 
		where Cod_Cliente='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label style='font-family:verdana;margin:20px;'>Aplicación que se va a Probar:</label> 
			<a style='margin:301px;'><select id='lista2' name='lista2' style='text-align:center;font-weight:bold;'></a>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>