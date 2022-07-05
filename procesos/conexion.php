
<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'lavaderobd';

	$conection = @mysqli_connect($host,$user,$password,$db);
     //mysqli_close($conection);
	if(!$conection){
		echo "Error en la conexión";
	}

?>
