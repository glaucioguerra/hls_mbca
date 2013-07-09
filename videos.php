<html>
<head>
 <title>MBCA - UFRJ | Teste HLS Streaming</title>
<link rel="stylesheet" type="text/css" href="/tema.css">
</head>
<body>
<h1>Teste de video com hls</h1>
<?php
$file_handle = fopen("/data/www/videos.txt", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   if (strlen(trim($line)) > 0){
      echo "<a href=\"./getvideo.php?video=$line\">Video $line</a> <br>";
   }
}
fclose($file_handle);
?>
<table class="reference notranslate">
<tr>
<th width="25%">Browser</th>
<th width="25%">MP4</th>
<th width="25%">WebM</th>
<th width="25%">Ogg</th>
</tr>
<tr>
<td>Internet Explorer 9+</td>
<td>YES</td>
<td>NO</td>
<td>NO</td>
</tr>
<tr>
<td>Chrome 6+</td>
<td>YES</td>
<td>YES</td>
<td>YES</td>
</tr>
<tr>
<td>Firefox 3.6+</td>
<td>NO</td>
<td>YES</td>
<td>YES</td>
</tr>
<tr>
<td>Safari 5+</td>
<td>YES</td>
<td>NO</td>
<td>NO</td>
</tr>
<tr>
<td>Opera 10.6+</td>
<td>NO</td>
<td>YES</td>
<td>YES</td>
</tr>
</table>
<ul>
	<li>MP4 = MPEG 4 files with H264 video codec and AAC audio codec</li>
	<li>WebM = WebM files with VP8 video codec and Vorbis audio codec</li>
	<li>Ogg = Ogg files with Theora video codec and Vorbis audio codec</li>
</ul>
</body>
</html>
