<html>
  <head>
    <meta charset="utf-8">
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
                margin-bottom: 4rem;
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
                font-size: 1.2rem;
                flex-direction: row;
                margin-top: 1rem;
                margin-bottom: 1rem;
                font-weight: bold;
            }
    </STYLE>
  </head>

  <body>

  <div class="title"> Entire Service Area Food Ranking </div>
  <div class="subtitle"> ranking | menu name </div>

        <div class="column">
            <?php
            $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

            if(mysqli_connect_errno())
            {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            else{
                $sql = "select dense_rank() over (
                    order by count(A.menu_id) desc) as ranking, B.menu_name
                    from top A join menu B on A.menu_id=B.menu_id
                    group by A.menu_id";
                $res = mysqli_query($mysqli, $sql);
                if($res){
                    $idx=0;
                    while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){

                        $ranking = $newArray['ranking'];
                        $menu_name = $newArray['menu_name'];
                        echo $ranking." ".$menu_name. "&nbsp";

                        $idx++;

                        if($idx%5==0){
                            echo "<br/>";
                          }
                    }
                }

                else{
                    printf("Could not retreive records: %s\n", mysqli_error($mysqli));
                }
            }

            mysqli_free_result($res);
            ?>
        </div>

    <div class="title"> Monthly Service Area Food Ranking </div>

    <div class="title"> January </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=1
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> February </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=2
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> March </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=3
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> April </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=4
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> May </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=5
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> June </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=6
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> July </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=7
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> August </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=8
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> September </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=9
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

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
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> October </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=10
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

                $idx=1;

                while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                    $ranking = $newArray['ranking'];
                    $menu_name = $newArray['menu_name'];

                    printf("%2d %s", $ranking, $menu_name);

                    $idx++;

                    if($idx%5==0){
                      echo "<br/>";
                    }
                }
                echo "<br/>";
              }
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> November </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=11
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

                $idx=1;

                while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                    $ranking = $newArray['ranking'];
                    $menu_name = $newArray['menu_name'];

                    printf("%2d %s", $ranking, $menu_name);

                    $idx++;

                    if($idx%5==0){
                      echo "<br/>";
                    }
                }
                echo "<br/>";
              }
          mysqli_close($mysqli);
    ?>
    </div>

    <div class="title"> December </div>
    <div class="subtitle"> ranking | menu name </div>

    <div class="column">
    <?php
        $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");

        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        //$monthly = array("January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December");

            $sql = "select dense_rank() over (order by count(A.menu_id) desc) as ranking,
            B.menu_name from top A join menu B on A.menu_id=B.menu_id
            where A.month_code=12
            group by A.menu_id";

            $res = mysqli_query($mysqli, $sql);

            if($res){

                $idx=1;

                while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                    $ranking = $newArray['ranking'];
                    $menu_name = $newArray['menu_name'];

                    printf("%2d %s", $ranking, $menu_name);

                    $idx++;

                    if($idx%5==0){
                      echo "<br/>";
                    }
                }
                echo "<br/>";
                echo "<br/>";
              }
          mysqli_close($mysqli);
    ?>
    </div>
  </body>
</html>