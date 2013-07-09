<html>
<body>
<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  move_uploaded_file($_FILES["file"]["tmp_name"], "/data/www/tmp/" . $_FILES["file"]["name"]);
  echo "Stored in: " . "/data/www/tmp/" . $_FILES["file"]["name"];
  }
?>
<a href="index.html">Home</a>
</body>
</html>
