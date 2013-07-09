<html>
<head>
 <title>Teste HLS Streaming</title>
<link rel="stylesheet" type="text/css" href="/tema.css">
</head>
<body>
<h1>Teste de video com hls</h1>
<video width="800" height="600" controls autoplay>
<?php
$video=$_GET["video"];
echo "<source src=\"../videos/$video/myvideo.m3u8\">";
?>
<b>Your browser does not support the video tag.</b>
</video>
</body>
</html>
