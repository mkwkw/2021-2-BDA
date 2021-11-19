<html>
  <head>

  </head>
  <body>
    <?php
      $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
      if(mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
      }
      else{
        $sql1 = "insert into Board (text) values ('".$_POST["content"]."')";
        $sql2 = "insert into PW (password) values ('".$_POST["pw"]."')";
        $res1 = mysqli_query($mysqli, $sql1);
        $res2 = mysqli_query($mysqli, $sql2);
        if($res1===TRUE && $res2===TRUE){
          echo "A record has been inserted.";
          $list = '
              <form action="bulletin_board.php" method="POST">
                <input type="submit" value="List">
              </form>
            ';

          echo $list;

        }
        else{
          printf("Could not insert record: %s\n",mysqli_error($mysqli));

        }


        mysqli_close($mysqli);
      }

     ?>

  </body>
</html>
