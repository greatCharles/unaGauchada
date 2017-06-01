<?php

  function getPicName($id){
    $link =  mysqli_connect('localhost', 'root', '', 'db');
    // $id = mysqli_real_escape_string($link, $_GET['id']);
    $sql = "SELECT imagen FROM gauchada WHERE id_gauchada= $id";
    $sth = mysqli_query($link, $sql);
    $result= mysqli_fetch_assoc($sth);
    // var_dump ($result);
    return ($result['imagen']);
  }

?>
