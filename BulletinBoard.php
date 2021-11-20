<html>
  <head>
  <STYLE>
            .column{
                width: 100%;
                text-align: center;
                display: flex;
                font-size: 1rem;
                flex-direction: column;
                line-height:160%;
            }
            .row{
                width: 100%;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1rem;
                flex-direction: row;
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
            .title{
                width: 100%;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 2rem;
                flex-direction: row;
                margin-top: 5rem;
                margin-bottom: 5rem;
                font-weight: bold;
            }
            .subtitle{
                width: 100%;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.5rem;
                flex-direction: row;
                margin-top: 1rem;
                margin-bottom: 1rem;
                font-weight: bold;
            }
            #button {
                font-size: 16;
                border:none;
                border-radius: 10px;
                height:6ex;
                outline: none;
                font-weight: bold;
                margin-left: 1.5rem;
                margin-right: 1.5rem;
                background-color: #64A68C;
            }
            #subbutton {
                font-size: 16;
                border:none;
                border-radius: 10px;
                height:2rem;
                outline: none;
                font-weight: bold;
                margin-left: 1.5rem;
                margin-right: 1.5rem;
                margin-top: 1.5rem;
                background-color: #64A68C;
            }
    </STYLE>

  </head>
  <body>
  <div class="row">
                <form action="BestFood.php">
                    <input type="submit" value="Best 5 foods" id="button" >
                </form>

                <form action="EntireRanking.php">
                    <input type="submit" value="Ranking of all menus" id="button">
                </form>

                <form action="FvFoods.php">
                    <input type="submit" value="My favorite food" id="button">
                </form>

                <form action="Bulletinboard.php">
                    <input type="submit" value="Food recommendation board" id="button" >
                </form>
  </div>
  <div class="column">
    <section>
        <div class="title"> One Line Bulletin Board </div>
        <div class="subtitle">
      <ul id="bulletin_board">

          <span class="col1"> ID </span>
          <span calss="col2"> Board </span>
          <span class="col3"> Hit </span>
          <span class="col4"> Edit/Delete </span>

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
                    <input type="submit" value="Edit/Delete" id="subbutton" >
                  </form>
                ';

        ?>
        <div class="row">
                <span class="col1"><?=$num?></span>
                <a>.&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <span calss="col2"><a href="HitCount.php?num=<?=$num?>"><?=$content?></a></span>
                <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <span class="col3"><?=$hit?></span>
                <a>&nbsp;&nbsp;</a>
                <span class="col4"><?=$edit_delete?></span>
        </div>

        <?php
                }
                mysqli_close($mysqli);
              }
            }

         ?>
         <button onclick="location.href='WritePage.html'" id="subbutton">Write</button>

         </div>
       </section>
      </div>
  </body>
</html>
