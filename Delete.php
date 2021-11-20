<?php
  $num = $_GET["num"];

  $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
  if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  else{
    

    $sql1 = "delete from board where text_id = $num";
    $sql2 = "delete from pw where pw_id = $num";
    mysqli_query($mysqli, $sql1);
    mysqli_query($mysqli, $sql2);
    mysqli_close($mysqli);

    echo "<script> location.href = 'BulletinBoard.php';</script>";

  }

?>
