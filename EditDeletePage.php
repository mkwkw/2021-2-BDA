<html>
  <head>
    <script>
    function check_input1(){
      if(!document.board_form1.pw1.value){
        alert("Enter your password");
        doocument.board_form1.pw1.focus();
        return;
      }
      if(!document.board_form1.content1.value){
        alert("Enter text");
        document.board_form1.content1.focus();
        return;
      }
      document.board_form1.submit();
    }

    function check_input2(){
      if(!document.board_form2.pw2.value){
        alert("Enter your password");
        doocument.board_form2.pw2.focus();
        return;
      }
      document.board_form2.submit();
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
      $num = $_GET["num"];

      $sql1 = "select * from board where text_id=$num";
      $sql2 = "select * from pw where pw_id=$num";

      $res1 = mysqli_query($mysqli, $sql1);
      $res2 = mysqli_query($mysqli, $sql2);

      $row1 = mysqli_fetch_array($res1);
      $row2 = mysqli_fetch_array($res2);
    }

    ?>

    <form name="board_form1" action="Edit.php?num=<?=$num?>" method="post" enctype="multipart/form-data">
      <ul id="board_form1">
        <li>
        <span class="col1">Password(Integer): </span>
        <span class="col2"><input type="text" name="pw1"></span>
        </li>

        <li>
        <span class="col3">Content: </span>
        <span class="col4"><input type="text" name="content1"></span>
        </li>
      </ul>

      <ul>
        <li><button type="button" onclick="check_input1()">Edit</button></li>
      </ul>
    </form>
    <br>
    <form name="board_form2" action="Delete.php?num=<?=$num?>" method="post" enctype="multipart/form-data">
      <ul id="board_form2">
        <li>
        <span class="col5">Password(Integer): </span>
        <span class="col6"><input type="text" name="pw2"></span>
        </li>
      </ul>
      <ul>
        <li><button type="button" onclick="check_input2()">Delete</button></li>
      </ul>
    </form>
  </body>
</html>
