<html>
  <head>
    <script>
    function check_input(){
      if(!document.board_form.pw.value){
        alert("Enter your password");
        doocument.board_form.pw.focus();
        return;
      }
      if(!document.board_form.content.value){
        alert("Enter text");
        document.board_form.content.focus();
        return;
      }
      document.board_form.submit();
    }
    </script>
  </head>
  <body>

    Edit/Delete
    <?php
    $mysqli = mysqli_connect("localhost", "team01", "team01", "team01");
    if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
    else{
      $num = $_GET["num"]; //글 번호

      $sql1 = "select * from board where text_id=$num";
      $sql2 = "select * from pw where pw_id=$num";
      $res1 = mysqli_query($mysqli, $sql1);
      $res2 = mysqli_query($mysqli, $sql2);

      $row1 = mysqli_fetch_array($res1);
      $row2 = mysqli_fetch_array($res2);
      $content = $row1["text"];
      $pw = $row2["password"];

    }
    #mysqli_close($mysqli);

    ?>

    <form name="board_form" action="Edit.php?num=<?=$num?>" method="post" enctype="multipart/form-data">
      <ul id="board_form">
      <li>
      <span class="col1">Password(Integer): </span>
      <span class="col2"><input type="text" name="pw" value="<?=$pw?>"></span>
      </li>
      <li>
      <span class="col3">Content: </span>
      <span class="col4"><input type="text" name="content" value="<?=$content?>"></span>
      </li>
      </ul>
      <ul>
      <li><button type="button" onclick="check_input()">Edit</button></li>
      <li><button type="button" onclick="location.href='Delete.php?num=<?=$num?>'">Delete</button></li>
      </ul>
    </form>
  </body>
</html>
