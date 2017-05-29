<form action= "<?=$form_action;?>" method="post" name="" id="" class="form_signup" >
    
    <h2 class="form-signin-heading">Publicación de la gauchada</h2>

    <div class="form-group">
        
        <label for= titulo>Título</label>
        <input class="form-control" type="text" placeholder="Título" name="titulo" id="titulo"><br>

        <label for="descripcion">Descripción</label>
        <textarea class="form-control" style="height: 200px" type="text" placeholder="Escribe una descripción de la gauchada que necesites." name="descripcion" id="descripcion"></textarea><br>

        <label for="ubicacion">Ubicación</label><br>
        <label>Localidad - Provincia</label>
            <select name="ubicacion">
               <?php while($fila= mysqli_fetch_array($result_locali)):;?>
                   <option value="<?php echo $fila[0]; echo ' - ' ;echo $fila[1]?>">
                        <?php echo $fila[0]; echo ' - ' ;echo $fila[1]?></option>
               <?php endwhile; ?>
            </select>
        </form><br><br>

        <label for= "categoria">Categoría</label><br>
        <select name="categoria" id="categoria">
            <?php while($fila= mysqli_fetch_array($result)):;?>
            <option value="<?php echo $fila[0];?>"><?php echo $fila[0];?></option>
            <?php endwhile; ?>
        </select>

        <br><br>

        <input type="checkbox" name="c1" onclick="showMe('div1')">La gauchada debe ser realizada en una fecha específica<br>
        <div id="div1" style="display: none">
                <br>
                <label for= "fecha">Fecha: </label>
                <input type="date" name="fecha" class="">
                <br>
        </div>
        <br>

        <input type="submit" class= "btn btn-primary" value="Enviar">
    </div>

</form>

