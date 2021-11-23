<?php
  $num = $_GET["num"];
  $content = $_POST["content1"];
  $password = $_POST["pw1"];

  $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
  if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  else{
    $sql1 = "update board set text='$content' where text_id=$num";
    $sql2 = "update pw set password='$password' where pw_id=$num";
    mysqli_query($mysqli, $sql1);
    mysqli_query($mysqli, $sql2);
    mysqli_close($mysqli);

    echo "<script>location.href = 'BulletinBoard.php';</script>";

  }

 ?>
