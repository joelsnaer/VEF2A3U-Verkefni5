<?php
include 'connection.php';
include 'query.php';
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>VEF2A3U - Notendur</title>
</head>
<body>
  <?php
  $id = $_GET['id'];
  $upp = getNotandaImageId($conn, $id);
  $mynd1 = getNotandaImage($conn, $upp[0][0]);
  $mynd2 = getNotandaImage($conn, $upp[1][0]);
   ?>
   <h1>Myndir sem þessi notandi á</h1>
   <img src="/myndir/<?php echo $mynd1[0][0] ?>" style="width:540px;height:650px;">
   <img src="/myndir/<?php echo $mynd2[0][0] ?>" style="width:540px;height:650px;">
</body>
</html>
