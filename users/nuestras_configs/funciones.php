<?php

function conexion($bd_config){
  try{
    $conexion= mysqli_connect('localhost', $bd_config['usuario'], '', $bd_config['basedatos']);
    return $conexion;
  }catch(PDOException $e){
      echo "ERROR: ". $e->getMessage();
      return false;
  }
}

function limpiarDatos($datos){
  $datos= trim($datos);
  $datos= stripslashes($datos);
  $datos= htmlspecialchars($datos);
  return $datos;
}

function pagina_actual(){
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function getGauchada($post_por_pagina, $conexion){
  $inicio= (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
  $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM gauchada LIMIT $inicio, $post_por_pagina";
  $result= mysqli_query($conexion, $consulta);
  return mysqli_fetch_all($result);
}

function numero_paginas($post_por_pagina, $conexion){
  $consulta= "SELECT COUNT(*) FROM gauchada as total";
  $total_post= mysqli_query($conexion, $consulta);
  $total_post= mysqli_fetch_all($total_post);
  $numero_paginas= ceil($total_post['0']['0'] / $post_por_pagina);
  return $numero_paginas;
}


function id_gauchada($id){
  return (int)limpiarDatos($id);
}

function obtener_gauchada_por_id($conex, $id){
  $result=$conex->query("SELECT * FROM gauchada WHERE id_gauchada= $id LIMIT 1");
  $result= mysqli_fetch_all($result);
  return ($result) ? $result : false;
}
function obtener_usuario_por_id($conex, $id){
  $result=$conex->query("SELECT username FROM users WHERE id= $id LIMIT 1");
  $result= mysqli_fetch_all($result);
  return $result['0']['0'];
}

?>
