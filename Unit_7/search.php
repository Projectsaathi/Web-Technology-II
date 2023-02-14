<!DOCTYPE html>
  <html>
  <head>
     <title>BIM 4 Search Demo</title>
  </head>
  <body>
     <h1>Search Demo</h1>
    <form action="" method="post">
      <input type="text" name="search">
      <input type="submit" name="submit" 
        value="Search">
    </form>
    
  <strong>Search Results...</strong> <br>
  <?php
        $server_name = "localhost";
        $user_name = "root";
        $password = "password";
        $db_name = "SPC";
  $con=new mysqli($server_name, $user_name, $password, $db_name);
  if ($con->connect_error) {
      echo 'Connection Faild: '.$con->connect_error;
  } else {
      $search_value=$_POST["search"];
  }

  $sql="select * from Students where firstname like '%$search_value%' OR 
         lastname LIKE '%$search_value%'";
  $res=$con->query($sql);
  while ($row=$res->fetch_assoc()) {
      echo "<strong>ID </strong>".$row['id']." <strong>Firstname:</strong> ".$row['firstname']." <strong>Lastname</strong> ".$row['lastname']."<br />";
  }
  ?>
</body>
  </html>