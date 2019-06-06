<?php
$x="Saurabh";
$y= array(10,2,3,21,23,45,65,22,45);
$age=array("amit"=>20,"Shivam"=>21,"Nikita"=>20,"Saumya"=>21);
$w="Hello PHP Users";
$l=strlen($w);
 ?>
 <?php
 $n=$_POST['User'];
 $a=$_POST['age'];
 echo "Hello $n, Your age is $a";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>website</title>
    <style>
    h1{
      color: red;
    }
    p{
      color: blue;
    }
    </style>
  </head>
  <body>
    <script type='text/javascript'>
                alert('JavaScript is awesome!');
                document.write("Ax Shivam Sharma");
    </script>
    <h1>This is a paragraph and it is <?php echo $y[2]; ?></h1>
    <h1>This is a paragraph and it is <?php echo $y[0]; ?></h1>
    <h1>This is a paragraph and it is <?php echo $age['amit']; ?></h1>
    <p>Hii This is shivam sharma</p>
    <h1>This is a paragraph and it is <?php echo "Hello\n $l"; ?></h1>
    <ul>
      <?php
      for($i=0;$i<=8;$i++)
      {
        ?>
        <li><?php echo $y[$i] ?></li>
        <?php
      }
       ?>
    </ul>
    <ul>
      <?php
      foreach ($age as $v) {
        ?>
        <li><?php echo $v ?></li>
        <?php
      }
       ?>
    </ul>
  </body>
</html>
