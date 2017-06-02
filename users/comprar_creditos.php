
<?php

	//Si el usuario no está logueado lo redirigimos al login
	require_once 'init.php';
	if (!$user->isLoggedIn()) {
		Redirect::to("users/login.php");
	}
	//
	require_once $abs_us_root.$us_url_root.'users/includes/header.php';
	require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';

 	//si POST viene cargado significa que ya llenaron los datos, por lo tanto modificamos los creditos del usuario.
	if ($_POST) {
		$currentID = $user->data()->id;
		$conex= mysqli_connect('localhost', 'root', '', 'db');
		$consulta = "SELECT creditos FROM users WHERE id=$currentID";
		$query= mysqli_query($conex, $consulta);
		$array_credito = mysqli_fetch_assoc($query);
		$saldo_previo = $array_credito['creditos'];
		$saldo_posterior = $saldo_previo + $_POST['cant_creditos'];
		$updateQuery = "UPDATE users SET creditos=$saldo_posterior WHERE id=$currentID";
		mysqli_query($conex, $updateQuery);
	}else{
		echo 'No hay data';
	}

	// $errores='';
	// if(isset($_POST['submit'])){
	//  	$cod= $POST['cod_seg'];
	//
	// 	if($cod < 4){
	// 		$errores .= 'Codigo de seguridad invalido <br />';
	//  	}
	//  }


 ?>

 <div id="page-wrapper">
	<div class="container">
		<?php require 'views/_comprar_creditos.php';?>
	</div>
</div>

<!-- Content Ends Here -->
<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
