<?php
include 'connection.php';
include 'query.php';
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>VEF2A3U - Myndir</title>
</head>
<body>
  <?php
  $id = $_GET['id'];
  $upp = getImageInfo($conn, $id);
  ?>
  <img src="/myndir/<?php echo $upp[0] ?>" style="width:540px;height:650px;">
  <br></br>
  <?php
  echo "Nafn af mynd: " . $upp[1];
  echo "<br></br>";
  echo "Lýsing af mynd: " . $upp[2];
   ?>
</body>
</html>
