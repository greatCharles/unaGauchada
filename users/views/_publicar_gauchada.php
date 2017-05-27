<script type="text/javascript">
    function showMe (box) {
        var chboxs = document.getElementsByName("c1");
        var vis = "none";
        for(var i=0;i<chboxs.length;i++) { 
            if(chboxs[i].checked){
             vis = "block";
                break;
            }
        }
        document.getElementById(box).style.display = vis;
    
    
    }
</script>




<form action= "<?=$form_action;?>" method="POST" name="" id="" class="form_signup" >
    
    <h2 class="form-signin-heading">Publicación de la gauchada</h2>

    <div class="form-group">
        
        <label>Título</label>
        <input class="form-control" type="text" placeholder="Título: " name=""><br>

        <label>Descripción</label>
        <textarea class="form-control" style="height: 200px" type="text" placeholder="Escribe una descripción de la gauchada que necesites." name=""></textarea><br>

        <label>Categoría</label><br>
        <!-- <select name="Categoría" id="categoría" class="input-medium"> -->

        <select>
            <?php while($fila= mysqli_fetch_array($result)):;?>
            <option value="<?php echo $fila[0];?>"><?php echo $fila[0];?></option>
            <?php endwhile; ?>
        </select>

        <br><br>

        <input type="checkbox" name="c1" onclick="showMe('div1')">La gauchada debe ser realizada en alguna fecha específica
        <div id="div1" style="display: none">
                <label>Fecha</label><br>
                <input type="date" name="" class="">
                <br><br>
        </div>
        <br>


        <input type="submit" class= "btn btn-primary" value="Enviar">
    </div>

</form>

