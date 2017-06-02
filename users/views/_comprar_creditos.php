<!-- <form class="form-signup" action="<?=$form_action;?>" method="<?=$form_method;?>" id="payment-form"> -->
<form name="formulario" class="form-signup" action="comprar_creditos.php" method="POST" id="payment-form" onsubmit="<return revisar()">
  	<h1 class= form-signin-heading>Compra de créditos</h1>
  	<br>
 	<div class="form-group">
 		<label for="cant">Cuantos créditos desea comprar?</label>
 		<input  class="form-control" min="1" max="500" type="number" id="cant_creditos" name="cant_creditos" placeholder="Ejemplo: 100 créditos" required="true"><br>
 		<label for="num_tarj">Número de tarjeta de crédito: </label><br>
 		<input type="number" id="num_tarjeta" class="form-control" name="num_tarjeta" placeholder="Ejemplo: 1234567812345678" required="true"><br>
 		<label for="venc">Mes de Vencimiento</label>
 		<select name="mes" id="" class="form-control">
 			<option value="1">1</option>
 			<option value="2">2</option>
 			<option value="3">3</option>
 			<option value="4">4</option>
 			<option value="5">5</option>
 			<option value="6">6</option>
 			<option value="7">7</option>
 			<option value="8">8</option>
 			<option value="9">9</option>
 			<option value="10">10</option>
 			<option value="11">11</option>
 			<option value="12">12</option>
 		</select><br>
 		<label for="anio">Año de Vencimiento</label>
 		<select name="anio" id="" class="form-control">
 			<option value="2017">2017</option>
 			<option value="2018">2018</option>
 			<option value="2019">2019</option>
 			<option value="2020">2020</option>
 			<option value="2021">2021</option>
 			<option value="2022">2022</option>
 			<option value="2023">2023</option>
 		</select><br>
 		<label for="seg_cod">Código de seguridad</label>
 		<input type="number"id="cod_seg" class="form-control" placeholder="Ejemplo:4772" name="cod_seg" required="true"><br>

    <!-- <?php if (!empty($errores)):?>
          <div class="alert_error">
            <?php echo $errores ?>
          </div>
    <?php endif ?> -->

		<!-- <button class="submit btn btn-primary " type="submit" id="next_button"><i class="fa fa-plus-square"></i> Comprar</button> -->
		<input type="submit" value="Submit">
 	</div>
