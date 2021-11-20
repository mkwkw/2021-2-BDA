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
                font-size: 5rem;
                flex-direction: row;
                margin-top: 1rem;
                margin-bottom: 1rem;
                font-weight: bold;
            }
            #button {
                font-size: 2rem;
                border:none;
                border-radius: 10px;
                height:5rem;
                outline: none;
                font-weight: bold;
                margin-left: 1.5rem;
                margin-top: 3rem;
                margin-right: 1.5rem;
                background-color: #64A68C;
            }
    </STYLE>

  </head>
  <body>
  <div class="row">
  <div class="subtitle">
    <?php
      $mysqli = mysqli_connect("127.0.0.1", "root", "jieun", "test");
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
              <form action="BulletinBoard.php" method="POST">
                <input type="submit" value="List" id="button">
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
     </div>
    </div>
  </body>
</html>