
<div class="col-md-6">
  <img class="img-thumbnail" src="<?php echo 'img_gauchadas/'.$gauchada['10']; ?>"  >
  <h2 >
    <?php echo $gauchada['1'] ?>
  </h2>
  <p><?php echo $gauchada['2'] ?></p>
</div>
<div class="col-md-6">
  <div class="jumbotron">
    <h3> Detalles de la gauchada </h3> <br>
    <p>
    <h4>Dueño: <?php echo $usuario ?></h4>
    <h4>Ubicación: <?php echo $gauchada['8']?> , <?php echo $gauchada['7'] ?></h4>
    <h4>Fecha de la publicación: <?php echo $gauchada['3'] ?></h4>


    <br><br><br><br><br>
    <div class="btn btn-danger btn-lg btn-block" role="button">Quiero Postularme</div><br>
    <div class="btn btn-success btn-lg btn-block" role="button">Enviar un comentario</div>

    </p>
  </div>



</div>
