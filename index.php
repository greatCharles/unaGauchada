<?php

if(file_exists("install/index.php")){
	//perform redirect if installer files exist
	//this if{} block may be deleted once installed
	header("Location: install/index.php");
}

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
require $abs_us_root.$us_url_root.'users/nuestras_configs/funciones.php';
require $abs_us_root.$us_url_root.'users/nuestras_configs/config.php';


if($user->isLoggedIn()){
    $publica="users/publicar_gauchada.php";
}else{
    $publica="users/login.php";
}

$conexion= conexion($bd_config);
$gauchadas= getGauchada($blog_config['post_por_pagina'], $conexion);

?>

<div id="page-wrapper">
<div class="container">
<div class="row">
	<div class="col-xs-12">
		<div class="jumbotron">
			<h1>Bienvenido a <?php echo $settings->site_name;?></h1>
			<p class="text-muted">Tu sitio para dar y recibir. <?php //print_r($_SESSION);?></p>
			<p>
			<a class="btn btn-primary" href=<?php echo $publica?> role="button">Publica tu gauchada &raquo;</a>
			<a class="btn btn-primary" href="users/comprar_creditos.php">Comprar creditos &raquo;</a>
			<!-- <?php if($user->isLoggedIn()){$uid = $user->data()->id;?>
				<a class="btn btn-default" href="users/account.php" role="button">Cuenta de usuario &raquo;</a>
			<?php }else{?>
				<a class="btn btn-primary" href="#" role="button">Publica tu gauchada &raquo;</a>
				<a class="btn btn-info" href="users/join.php" role="button">Registrarse &raquo;</a>
			<?php } ?> -->
			</p>
		</div>
		<div class="text-center">
			<h1>Publicaciones</h4>
		</div><br><br>

		<!-- Projects Row -->
		<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
								<?php foreach($gauchadas as $gauchada): ?>
									<div class="col-md-4">
										<div class="thumbnail">
											<a href="users/single_view.php?id=<?php echo $gauchada['0']?>">
													<img class="img-responsive" src="<?php echo 'users/img_gauchadas/'. $gauchada['10']; ?>">
											</a>
											<div class="caption">
													<h3>
															<a href="users/single_view.php?id=<?php echo $gauchada['0']?>"><?php echo $gauchada['1']?></a>
													</h3>
													<p><?php echo substr($gauchada['2'],0, 200).'...'?></p>
													<a href="users/single_view.php?id=<?php echo $gauchada['0']?>">Ver más...</a><br><br>
										  </div>
										</div>
									</div>
								<?php endforeach; ?>
						</div>
					</div>
				</div>
		</div>

<?php require $abs_us_root.$us_url_root.'paginacion.php';?>

</div>
</div>
</div>
</div>

<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>
