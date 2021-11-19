<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
      $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

      if(mysqli_connect_errno())
      {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
    }

      else{
          $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking, B.menu_name from top A join menu B on A.menu_id=B.menu_id group by A.menu_id";
          $res = mysqli_query($mysqli, $sql);
          if($res){
              echo "Entire Service Area Food Ranking<br/>";
              echo"ranking | menu name</br>";

              $idx=1;
              while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){

                  $ranking = $newArray['ranking'];
                  $menu_name = $newArray['menu_name'];
                  //echo $ranking." ".$menu_name."<br/>";
                  printf("%02d %s", $ranking, $menu_name);

                  $idx++;

                  if($idx%5==0){
                    echo "<br/>";
                  }

              }
              echo "<br/>";
          }

          else{
              printf("Could not retreive records: %s\n", mysqli_error($mysqli));

          }

          mysqli_free_result($res);

          $monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");
          for($i=1; $i<=12; $i++){
              $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking, B.menu_name from top A join menu B on A.menu_id=B.menu_id where A.month_code=$i group by A.menu_id";
              $res = mysqli_query($mysqli, $sql);

              if($res){
                echo "<br/>";
                echo "Monthly Service Area Food Ranking<br/>";
                //echo "<br/>";
                echo $monthly[$i-1]."</br>";
                echo"ranking | menu name</br>";

                $idx=1;

                while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                    $ranking = $newArray['ranking'];
                    $menu_name = $newArray['menu_name'];

                    printf("%02d %s", $ranking, $menu_name);

                    $idx++;

                    if($idx%5==0){
                      echo "<br/>";
                    }
                }
                echo "<br/>";
              }
          }


          mysqli_close($mysqli);
      }
  ?>

  </body>
</html>
