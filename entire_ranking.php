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

            while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                $ranking = $newArray['ranking'];
                $menu_name = $newArray['menu_name'];
                //echo $ranking." ".$menu_name."<br/>";
                printf("%02d %s", $ranking, $menu_name);
                echo "<br/>";
            }
        }

        else{
            printf("Could not retreive records: %s\n", mysqli_error($mysqli));

        }

        mysqli_free_result($res);
        mysqli_close($mysqli);
    }
?>
