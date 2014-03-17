<h2>
	esta es la salida de datos del sistema
</h2>
<?php foreach ($usuarios as $item) {
	echo $item['nombre'];
	echo $item['apellido'];
	echo $item['edad'];
} ?>