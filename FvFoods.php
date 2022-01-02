<?php
        session_start();
?>
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
            .rowline{
                width: 100%;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1rem;
                flex-direction: row;
                line-height: 180%;
            }
            #Addbutton {
                font-size: 1rem;
                border:none;
                border-radius: 10px;
                height:4ex;
                outline: none;
                font-weight: bold;
                margin-left: 1.5rem;
                margin-right: 1.5rem;
                background-color: #64A68C;
            }
            #Delbutton {
                font-size: 1rem;
                border:none;
                border-radius: 10px;
                height:2em;
                width: 4em;
                outline: none;
                font-weight: bold;
                margin-left: 1.5rem;
                margin-right: 1.5rem;
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

    <?php
    $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
    if(isset($_POST["add_food"])){
        if(isset($_SESSION["favorite_list"])){
            $item_array_id = array_column($_SESSION["favorite_list"],"ranking");

            if(!in_array($_GET["ranking"], $item_array_id)){
                $cnt = count($_SESSION["favorite_list"]);
                $item_array = array(
                    'ranking' => $_GET["ranking"],
                    'menu_name' => $_POST["menu_name"]
                );

            $_SESSION["favorite_list"][$cnt] = $item_array;

            }else{
            echo '<script>alert("There Is Same Menu")</script>';
            echo '<script>window.location="FvFoods.php"</script>';
            }
        }else{
            $item_array = array(
            'ranking' => $_GET["ranking"],
            'menu_name' => $_POST["menu_name"]
            );
            $_SESSION["favorite_list"][$cnt] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"]=="delete"){
            if(!empty($_SESSION["favorite_list"])){
            foreach($_SESSION["favorite_list"] as $keys => $values){
            if($values["ranking"] == $_GET["ranking"]){
                unset($_SESSION["favorite_list"][$keys]);
                echo '<script>alert("Delete Menu")</script>';
                echo '<script>window.location="FvFoods.php"</script>';
            }
        }
        }
    }

    }
    ?>

  <div class="row">
        <div class="column">
            <div class="title"> Put your favorite Menu </div>

                    <?php
                        $query = "select dense_rank() over (
                            order by count(A.menu_id) desc) as ranking, B.menu_name
                            from top A join menu B on A.menu_id=B.menu_id
                            group by A.menu_id
                            limit 5
                            ";
                        $result = mysqli_query($mysqli, $query);

                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_array($result)){
                    ?>

                    <div class="subtitle">
                    <div class="column">
                        <form method="post" action="FvFoods.php?action=add&ranking=
                            <?php echo $row["ranking"]; ?> ">

                            <?php echo $row["ranking"].". "; ?>
                            <?php echo $row["menu_name"]; ?>

                            <input type="hidden" name="ranking" value="<?php echo $row["ranking"] ?>" />
                            <input type="hidden" name="menu_name" value="<?php echo $row["menu_name"] ?>" />

                            <input type="submit" name="add_food" id="Addbutton"
                            class="btn btn-success" value="Add"/>
                        </form>
                    </div>
                    </div>
                    <?php
                        }
                    }
                    ?>

        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="title"> Your favorite menu </div>
                <div class="subtitle">

                    <?php
                    if(!empty($_SESSION["favorite_list"])){
                        $total = 0;
                        foreach($_SESSION["favorite_list"] as $keys => $values){
                    ?>

                    <tr>
                        <?php echo $values["menu_name"]; ?>
                        <a href="FvFoods.php?action=delete&ranking=
                        <?php echo $values["ranking"]?>">

                        <input type="submit" id="Delbutton" value="Delete"/>
                    </a>
                    </tr>

                    <?php
                        }
                    }
                    ?>
                </div>
        </div>
    </div>

  </body>
</html>
