<HTML>

    <HEAD>
        <STYLE>
            .column{
                width: 100%;
                text-align: center;
                display: flex;
                font-size: 1rem;
                flex-direction: column;
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
                font-size: 1.2rem;
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
        </STYLE>
    </HEAD>

    <BODY>
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

        <div class="title"> Best 5 foods by service area </div>

        <div class="row">
        <div class="column">
            <div class="subtitle"> Gyeongbu Expressway - Manghyang (Busan) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 13???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=13
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>

            <div class="column">
            <div class="subtitle"> Gyeongbu Expressway - Anseong (Seoul) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 7???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=7
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>


            <div class="column">
            <div class="subtitle"> Gyeongbu Expressway - Cheonan Intersection (Seoul) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ??????????????? ????????? 15???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=7
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>
        </div>

        <div class="row">
        <div class="column">
        <div class="subtitle"> Honam Expressway - Yeosan (Cheonan) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 15???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=556
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>

            <div class="column">
            <div class="subtitle"> Honam Expressway - Hwangjeon (Suncheon) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 15???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=364
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>

            <div class="column">
            <div class="subtitle"> Honam Expressway - Beolgok (Daejeon) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 15???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=238
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>
            </div>


            <div class="row">
            <div class="column">
            <div class="subtitle"> Yeongdong Expressway - Munmak (Gangneung) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 201???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=201
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>

            <div class="column">
            <div class="subtitle"> Yeongdong Expressway - Pyeongchang (Gangneung) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 459
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=459
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
           </div>

            <div class="column">
            <div class="subtitle"> Yeongdong Expressway - Yeoju (Gangneung) Rest Area </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 203???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT (A.menu_id), count(A.menu_id), B.menu_name
                        FROM TOP A join menu B on A.menu_id=B.menu_id
                        WHERE service_code=203
                        GROUP BY A.menu_id
                        ORDER BY count(A.menu_id) DESC
                        LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>
            </div>

            <div class="title"> Best 5 foods by highway </div>

            <div class="row">
            <div class="column">
            <div class="subtitle"> Gyeongbu Expressway </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");

                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                //WHERE  service_code=7 OR service_code=13 OR service_code=15
                else{
                    $sql = "SELECT A.line_id, B.menu_id, C.menu_name
                    from service A
                    join top B on A.service_code = B.service_code
                    join menu C on B.menu_id=C.menu_id
                    group by A.line_id, B.menu_id
                    having A.line_id=1
                    order by count(B.menu_id) desc
                    LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>

            <div class="column">
            <div class="subtitle"> Honam Expressway </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 7???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT A.line_id, B.menu_id, C.menu_name
                    from service A
                    join top B on A.service_code = B.service_code
                    join menu C on B.menu_id=C.menu_id
                    group by A.line_id, B.menu_id
                    having A.line_id=2
                    order by count(B.menu_id) desc
                    LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>

            <div class="column">
            <div class="subtitle"> GYeongdong Expressway </div>
                <?php
                $conn= mysqli_connect("localhost", "team01", "team01", "team01");
                    // ?????? ????????? 7???
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n",mysqli_connect_error());
                    exit();
                }
                else{
                    $sql = "SELECT A.line_id, B.menu_id, C.menu_name
                    from service A
                    join top B on A.service_code = B.service_code
                    join menu C on B.menu_id=C.menu_id
                    group by A.line_id, B.menu_id
                    having A.line_id=3
                    order by count(B.menu_id) desc
                    LIMIT 5
                    ";

                    $res = mysqli_query($conn,$sql);
                    $cnt=1;
                    if($res->num_rows>0){
                        while($row=$res->fetch_assoc()){
                            echo $cnt.". ". $row["menu_name"]."<br>";
                            $cnt++;
                        }
                    }

                    echo "<br>";

                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
                ?>
            </div>
            </div>


        </BODY>
    </HTML>
