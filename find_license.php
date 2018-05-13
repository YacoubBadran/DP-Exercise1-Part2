


<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  
	<center>	<img src="img/yes.png">
</center>


<?php

$license = $_GET["license"];


$obj = json_decode($license);
$license_name = $obj->name;
$license_description = $obj->description;

	//$xml = new SimpleXMLElement('<xml/>');
	$xml = simplexml_load_file('DMP.xml');



	$xml->addChild('license_name', $license_name);
	$xml->addChild('license_description', $license_description);





	print($xml->asXML('DMP.xml'));
echo "<center>DMP is generated with name DMP.xml</center>";
/*
echo $name;
echo "<br>";
echo $description;
*/

?>

</body>
</html>
 