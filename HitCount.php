<?php
  $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
  if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  else{
    $num=$_GET['num'];
    $sql="update board set view=view+1 where text_id=$num";
    $res=mysqli_query($mysqli, $sql);

    $list = '
        <form action="BulletinBoard.php" method="POST">
          <input type="submit" value="List">
        </form>
      ';
    echo $list;

    mysqli_close($mysqli);
  }

 ?>
