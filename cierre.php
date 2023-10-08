<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>cierre</title>
</head>

<body>
<!--mandar a index-->
  <?php 
  session_start();
  session_destroy();
  header("location:index.php");

  ?>

</body>

</html>