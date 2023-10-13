<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>cierre</title>
</head>

<body>

  <?php
  session_start();
  session_destroy();
  header("location:index4.php");
  ?>

</body>

</html>