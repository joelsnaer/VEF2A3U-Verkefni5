<?php
include 'connection.php';
include 'query.php';
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>VEF2A3U - Verkefni 5</title>
</head>
<body>
  <h1>VEF2A3U - Verkefni 5</h1>
  <h2>Heildarfjöldi mynda í töflu</h2>
  <?php
    echo getCount($conn);
    $id = getId($conn);
    $notendur = getNotendur($conn);
   ?>
   <!--Listi til að fara á vefsíðu með upplýsingar um mynidr -->
   <h1>Myndir</h1>
   <ul>
     <li><a href="myndir.php?id=<?php echo $id[0][0] ?>">Mynd 1</a></li>
     <li><a href="myndir.php?id=<?php echo $id[1][0] ?>">Mynd 2</a></li>
     <li><a href="myndir.php?id=<?php echo $id[2][0] ?>">Mynd 3</a></li>
     <li><a href="myndir.php?id=<?php echo $id[3][0] ?>">Mynd 4</a></li>
   </ul>
  <h1>Notendur</h1>
  <ul>
    <li><a href="notendur.php?id=<?php echo $notendur[0][0] ?>"><?php echo $notendur[0][1] ?></a></li>
    <li><a href="notendur.php?id=<?php echo $notendur[1][0] ?>"><?php echo $notendur[1][1] ?></a></li>
  </ul>
  <h2>Leita af mynd með myndaheiti</h2>
  <form action="search.php" method="post">
    <input type="search" name="myndaheiti">
    <input type="submit" value="Search">
  </form>
</body>
</html>
