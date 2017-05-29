<?php


  $link =  mysqli_connect('localhost', 'root', '', 'db');
  $id = mysqli_real_escape_string($link, $_GET['id']);
  $sql = "SELECT imagen FROM gauchada WHERE id_gauchada= $id";
  $sth = mysqli_query($link, $sql);
  $result= mysqli_fetch_assoc($sth);
  echo '<img src="data:image/jpeg;base64,'.base64_encode($result['imagen'] ).'"/>';


  // header("Content-type: image/jpeg");
  //  echo $row['imagen'];
  // echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['imagen'] ).'"/>';

?>
