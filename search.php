<?php
include 'connection.php';
include 'query.php';
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>VEF2A3U - Search</title>
</head>
<body>
<h1>Myndinn sem þú leitaðir af er</h1>
  <?php
    $myndheiti = $_POST["myndaheiti"];
    $prenta = strtolower($myndheiti);

    if (file_exists("myndir/" . $prenta . ".jpg")) {?>
      <img src="/myndir/<?php echo $prenta ?>.jpg" style="width:540px;height:650px;">
    <?php }
    else {
      echo "<h2>Þessi mynd er ekki til</h2>";
    }
  ?>
</body>
</html>
