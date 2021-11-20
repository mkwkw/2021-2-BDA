<html>
  <head>

  </head>
  <body>
    <section>
      <h3>
        One Line Bulletin Board
      </h3>
      <ul id="bulletin_board">
        <li>
          <span class="col1"> ID </span>
          <span calss="col2"> Board </span>
          <span class="col3"> Hit </span>
          <span class="col4"> Edit/Delete </span>
        </li>

        <?php
          $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
          if(mysqli_connect_errno()){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
          }
          else{
            $sql = "select * from board order by text_id";
            $res = mysqli_query($mysqli, $sql);

            if($res){
              $total_records = mysqli_num_rows($res);
              while( $row = mysqli_fetch_array( $res ) ) {
                $num = $row['text_id'];
                $content = $row['text'];

                $hit = $row['view'];
                $edit_delete = '
                  <form action="EditDeletePage.php" method="get">
                    <input type="hidden" name="num" value=" ' . $row['text_id'] . '">
                    <input type="submit" value="Edit/Delete">
                  </form>
                ';
        ?>
              <li>
                <span class="col1"><?=$num?></span>
                <span calss="col2"><a href="HitCount.php?num=<?=$num?>"><?=$content?></a></span>
                <span class="col3"><?=$hit?></span>
                <span class="col4"><?=$edit_delete?></span>
              </li>

        <?php
                }
                mysqli_close($mysqli);
              }
            }

         ?>
         <ul>
           <li><button onclick="location.href='WritePage.html'">Write</button></li>
         </ul>
       </section>
  </body>
</html>
