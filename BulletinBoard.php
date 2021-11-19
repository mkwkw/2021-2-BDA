<html>
  <head>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
        text-align: center;
      }
    </style>
  </head>
  <body>
    One Line Bulletin Board
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Board</th>
          <th>View</th>
          <th>Edit/Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $mysqli = mysqli_connect( "localhost", "team01", "team01", "team01" );
          $sql = "select * from board";
          $res = mysqli_query( $mysqli, $sql );

          if($res){
            while( $row = mysqli_fetch_array( $res ) ) {
              $edit_delete = '
              <form action="edit_delete.php" method="post">
                <input type="hidden" name="text_id" value=" ' . $row['text_id'] . '">
                <input type="submit" value="Edit/Delete">
              </form>
              ';
              echo '<tr><td>' .$row['text_id']. '</td><td>'.$row['text']. '</td><td>' .$row['view']. '</td><td>' .$edit_delete. '</td></tr>';
            }
          }
        ?>
      </tbody>
    </table>


    <form action="write_page.html">
      <input type="submit" value="Write">
    </form>


  </body>
</html>
