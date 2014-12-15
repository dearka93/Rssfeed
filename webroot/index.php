<?php
require '../src/Rssfeed/Rssfeed.php';

    $feed = new Protein\Rssfeed\Rssfeed([
    		'http://www.aftonbladet.se/rss.xml'
    ]);
?>

<!doctype html>
<html lang="en">

<head>
<meta charset=utf8>
<title>Rssfeed example</title>
</head>

<body>
<h1>RSS example</h1>
<h2>Rss feed with pictures</h2>
<?=$feed->picRss()?> 
<h2>Single line off one latest Rss</h2>
<?=$feed->singleRss()?> 
<h2>Rss feed without pictures</h2>
<?=$feed->nopicRss()?> 
</body>
</html>