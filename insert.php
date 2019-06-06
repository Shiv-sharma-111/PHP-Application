<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Create connection
    $conn = new mysqli('localhost','root','');
    if($conn->connect_error)
    {
      die("Connection Failed:" . $conn->connect_error);
    }
    echo "DB Connected Succesfully";
    mysqli_close($conn);
    ?>
  </body>
</html>
