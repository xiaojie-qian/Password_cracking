<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $md5 = hash('md5', $_GET['encode']);
}
?>
<!DOCTYPE html>
<head><title>Xiaojie Severance MD5</title></head>
<body>
<h1>MD5 Maker</h1>
<p>Please enter a four-digital key for encoding.</p>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
<footer>
<p><a href="https://www.wa4e.com">Reference from Web Application For Everyone</a></p>
</footer>
</body>
</html>
