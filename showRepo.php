<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$country = $_GET['ctID'];
$dataType = $_GET['cID'];

$url = "http://opendoar.org/api.php?co=$country&ct=$dataType";
$xml = simplexml_load_file($url);

echo $xml->repositories->repository[0]->rName;
echo $xml->repositories->repository[0]->rUrl;
echo $xml->repositories->repository[0]->rOaiBaseUrl;
echo $xml->repositories->repository[1]->rName;
echo $xml->repositories->repository[1]->rUrl;
echo $xml->repositories->repository[1]->rOaiBaseUrl;
echo $xml->repositories->repository[2]->rName;
echo $xml->repositories->repository[2]->rUrl;
echo $xml->repositories->repository[2]->rOaiBaseUrl;
	?>
</body>
</html>