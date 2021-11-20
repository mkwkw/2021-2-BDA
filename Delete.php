<?php
  $num = $_GET["num"];
  $pw = $_POST["pw2"];

  $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
  if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  else{
   $mysqli->autocommit(FALSE);

   $sql = "select * from pw where pw_id = '$num'";
   $res = mysqli_query($mysqli, $sql);
   $newArray = mysqli_fetch_array($res, MYSQLI_ASSOC);
   $pwd = $newArray['password'];

   $mysqli->query("delete from board where text_id = '$num'");
   $mysqli->query("delete from pw where pw_id = '$num' and password='$pwd'");

   if($pw!=$pwd){
     $mysqli -> rollback();
   }
   else{
     $mysqli -> commit();
   }
   
    $mysqli -> close();

    echo "<script> location.href = 'BulletinBoard.php';</script>";
  }

?>
