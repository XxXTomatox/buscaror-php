<?php 
	//es la linea del codigo que sirve para conecta el servidor 
	$conexion=mysqli_connect('localhost','root','','prueba');
	//esta linea del codigo su funcion es selecionoar id y nombre  de la tabla t_paises
	$sql="SELECT id,nombre from t_paises";
	// esta linea del codigo se encarga de correrlo  
	$result=mysqli_query($conexion,$sql);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- este link y los dos script sirven para llamar a las dependencias -->
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="select2/select2.min.js"></script>
</head>
<body>
	<!-- esto es una seccion que iene un style que alinia el texto en el centro de la paguina  -->
	<section style="text-align: center;">
		<!-- este es en seleccionador que  va a controlBuscador con un tamaño del 50% de la pantalla -->
		<select id="controlBuscador" style="width: 50%">
			<!-- una documentacion php -->
			<?php 
			//un while que crea un objeto que sirve para ver los datos de la base de datos 
			while ($ver=mysqli_fetch_row($result)) {?>

			<!-- el option sirve para ver el contenido de la base de datos -->
			<option value="<?php echo $ver[0] ?>"> 
			<?php echo $ver[1] ?>
			</option>
				<!-- termina el php -->
			<?php  }?>
		</select>
	</section>
</body>
</html>
<!-- este escript te en via text/javascript y tiene adentro una funcion -->
<script type="text/javascript">
	<!-- esta funcion sirve para que corra bien  el id controlBuscador -->
	$(document).ready(function(){
		$('#controlBuscador').select2();
	});
</script>