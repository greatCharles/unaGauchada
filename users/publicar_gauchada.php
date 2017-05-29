<?php
ini_set("allow_url_fopen", 1);
?>
<?php require_once 'init.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/header.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/navigation.php'; ?>
<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>

<?php $form_action = 'publicar_gauchada.php' ?>

<?php

//conexion a la bd y categorias
$conex= mysqli_connect('localhost', 'root', '', 'db');
$consulta= "SELECT nombre FROM categoria";
$result= mysqli_query($conex, $consulta);

//Esto es todo lo que se hace cuando se envía el formulario
$query_locali = "SELECT localidad, provincia FROM localidades";
$result_locali = mysqli_query($conex, $query_locali);

// if(isset($_POST['titulo'])){
// 	$titulo= $_POST['titulo'];	
// }

// if(isset($_POST['descripcion'])){
// 	if(!empty($_POST['descripcion'])){
// 		$descripcion= $_POST['descripcion'];	
// 	}
// 	else{
// 	echo 'Debe completar el campo descripcion';
// 	}
// }

// if(isset($_POST['ubicacion'])){
// 	$ubicacion= $_POST['ubicacion'];
// 	$ubicacion_explode= explode(' - ', $ubicacion);
// 	$localidad= $ubicacion_explode[0];
// 	$provincia= $ubicacion_explode[1];
// }
// else{
// 	echo 'Debe completar el campo ubicación';
// }

// if(isset($_POST['titulo'])){
// 	$titulo= $_POST['titulo'];	
// }

// if(isset($_POST['categoria'])){
// 	$categoria= $_POST['categoria'];
// }

// if(isset($_POST['fecha'])){
// 	$fecha_exacta= $_POST['fecha'];	
// }else{
// 	$fecha_exacta= NULL;
// }

// $id_usuario= $user->data()->id;

// $consulta_categoria= 'SELECT id_categoria FROM categoria WHERE nombre= $categoria';
// $id_categoria= mysqli_query($conex, $consulta_categoria);
// $consulta_insertar= 'INSERT INTO gauchada(titulo, descripcion, provincia, ciudad, id_usuario, id_categoria, fecha_exacta) VALUES($titulo, $descripcion, $provincia, $localidad, $id_usuario, $id_categoria, $fecha_exacta)';
// mysqli_query($conex, $consulta_insertar);

?>

<?php header('X-Frame-Options: DENY'); ?>
<div id="page-wrapper">
<div class="container">
<?php require 'views/_publicar_gauchada.php';?>
</div>
</div>


<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>