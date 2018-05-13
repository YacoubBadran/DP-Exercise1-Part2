 <!doctype html>
 
<html>
<head>
<meta charset="utf-8">
<title>index</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
<script src="js/jquery-3.1.1.min.js" type="application/javascript"></script>
</head>
<style>
	 
	</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10" style="margin-top: 10px">
			<img src="TU-Logo-Austria_CMYK.png" height="80">
			</div>
		</div>
		<div class="row">
		<div class="col-md-12" style="height: 60px; border: inset; border-color:#72B0DC; margin-bottom: 3px" >
			<center>
				<div class="col-md-2">
					<img src="img/Sign-Info-icon.png" height="30" width="30">
				<br>
			<a href="index.php">BASIC INFO</a>
 				</div>
			<div class="col-md-2">
				<img src="img/logo_admin.png" height="30" width="30">
				<br>
				<a href="Adminstrative.php">
					ADMINISTRATIVE DATA</a></div>
			<div class="col-md-2">
				<img src="img/analysis-icon-11460.png" height="30" width="40">
				<br>
				<a href="Analyse.php">Analyse Data</a></div>
			<div class="col-md-2">
				<img src="img/icon-data.png" height="30" width="30">
				<br>
				<a href="repo.php">FIND REPOSITORY </a></div>
				<div class="col-md-2">
					<img src="img/Select.png" width="30" height="30">
					<br>
					<a href="select.php">SELECT LICENSE </a></div>
				<div class="col-md-2">
						<img src="img/Easy_ingestion.png" width="30" height="30"><br>
					<a href="GENERATE.php">GENERATE DMP </a>
					</div>
			</center>
			
			</div>
			<div class="col-md-12" style="margin-top: 40px">
 <div class="col-md-3" style="margin-top: 200px">
				<a href="Analyse.php"><img src="img/navigate_left.png" width="90" height="70"></a>
				</div>
				<div class="col-md-6">
			 <center>
				 <form action="showRepo.php" method="get">
  <td align="right">
                <select name="ctID" onchange="submitBrowseform();">
                  <option value="">Any Content Type</option>
                  <option value="1">Articles (2505)</option>
                  <option value="8">Books (1371)</option>
                  <option value="5">Conferences (1278)</option>
                  <option value="9">Datasets (192)</option>
                  <option value="10">Learning Objects (545)</option>
                  <option value="11">Multimedia (785)</option>
                  <option value="13">Patents (109)</option>
                  <option value="4">References (580)</option>
                  <option value="12">Software (51)</option>
                  <option value="14">Special (518)</option>
                  <option value="6">Theses (1991)</option>
                  <option value="7">Unpublished (1233)</option>
                </select>
              </td>
			  
<td>
                <select name="cID" onchange="submitBrowseform()">
                  <option value="">Any Country</option>
                  <option value="Africa">Africa (158)</option>
                  <option value="4">&nbsp;&nbsp;Algeria (13)</option>
                  <option value="29">&nbsp;&nbsp;Botswana (2)</option>
                  <option value="39">&nbsp;&nbsp;Cameroon (1)</option>
                  <option value="41">&nbsp;&nbsp;Cape Verde (2)</option>
                  <option value="64">&nbsp;&nbsp;Egypt (5)</option>
                  <option value="69">&nbsp;&nbsp;Ethiopia (2)</option>
                  <option value="82">&nbsp;&nbsp;Ghana (5)</option>
                  <option value="112">&nbsp;&nbsp;Kenya (29)</option>
                  <option value="121">&nbsp;&nbsp;Lesotho (1)</option>
                  <option value="145">&nbsp;&nbsp;Morocco (2)</option>
                  <option value="146">&nbsp;&nbsp;Mozambique (1)</option>
                  <option value="148">&nbsp;&nbsp;Namibia (2)</option>
                  <option value="157">&nbsp;&nbsp;Nigeria (21)</option>
                  <option value="179">&nbsp;&nbsp;Rwanda (2)</option>
                  <option value="189">&nbsp;&nbsp;Senegal (2)</option>
                  <option value="198">&nbsp;&nbsp;South Africa (33)</option>
                  <option value="201">&nbsp;&nbsp;Sudan (9)</option>
                  <option value="209">&nbsp;&nbsp;Tanzania (11)</option>
                  <option value="216">&nbsp;&nbsp;Tunisia (1)</option>
                  <option value="221">&nbsp;&nbsp;Uganda (2)</option>
                  <option value="237">&nbsp;&nbsp;Zambia (1)</option>
                  <option value="238">&nbsp;&nbsp;Zimbabwe (11)</option>
                  <option value="Asia">Asia (705)</option>
                  <option value="2">&nbsp;&nbsp;Afghanistan (1)</option>
                  <option value="12">&nbsp;&nbsp;Armenia (2)</option>
                  <option value="16">&nbsp;&nbsp;Azerbaijan (2)</option>
                  <option value="19">&nbsp;&nbsp;Bangladesh (12)</option>
                  <option value="46">&nbsp;&nbsp;China (40)</option>
                  <option value="80">&nbsp;&nbsp;Georgia (3)</option>
                  <option value="96">&nbsp;&nbsp;Hong Kong (4)</option>
                  <option value="99">&nbsp;&nbsp;India (79)</option>
                  <option value="100">&nbsp;&nbsp;Indonesia (69)</option>
                  <option value="101">&nbsp;&nbsp;Iran (11)</option>
                  <option value="102">&nbsp;&nbsp;Iraq (1)</option>
                  <option value="108">&nbsp;&nbsp;Japan (217)</option>
                  <option value="111">&nbsp;&nbsp;Kazakhstan (7)</option>
                  <option value="115">&nbsp;&nbsp;Korea, Republic of (34)</option>
                  <option value="116">&nbsp;&nbsp;Kuwait (1)</option>
                  <option value="117">&nbsp;&nbsp;Kyrgyzstan (2)</option>
                  <option value="118">&nbsp;&nbsp;Laos (1)</option>
                  <option value="120">&nbsp;&nbsp;Lebanon (2)</option>
                  <option value="131">&nbsp;&nbsp;Malaysia (22)</option>
                  <option value="147">&nbsp;&nbsp;Myanmar (2)</option>
                  <option value="150">&nbsp;&nbsp;Nepal (1)</option>
                  <option value="163">&nbsp;&nbsp;Pakistan (3)</option>
                  <option value="165">&nbsp;&nbsp;Palestinian Territory, Occupied (4)</option>
                  <option value="170">&nbsp;&nbsp;Philippines (7)</option>
                  <option value="175">&nbsp;&nbsp;Qatar (1)</option>
                  <option value="188">&nbsp;&nbsp;Saudi Arabia (9)</option>
                  <option value="193">&nbsp;&nbsp;Singapore (5)</option>
                  <option value="200">&nbsp;&nbsp;Sri Lanka (13)</option>
                  <option value="207">&nbsp;&nbsp;Taiwan (60)</option>
                  <option value="210">&nbsp;&nbsp;Thailand (12)</option>
                  <option value="217">&nbsp;&nbsp;Turkey (76)</option>
                  <option value="223">&nbsp;&nbsp;United Arab Emirates (1)</option>
                  <option value="231">&nbsp;&nbsp;Viet Nam (1)</option>
                  <option value="Australasia">Australasia (70)</option>
                  <option value="14">&nbsp;&nbsp;Australia (58)</option>
                  <option value="154">&nbsp;&nbsp;New Zealand (12)</option>
                  <option value="Caribbean">Caribbean (19)</option>
                  <option value="56">&nbsp;&nbsp;Cuba (10)</option>
                  <option value="62">&nbsp;&nbsp;Dominican Republic (3)</option>
                  <option value="87">&nbsp;&nbsp;Guadeloupe (1)</option>
                  <option value="107">&nbsp;&nbsp;Jamaica (3)</option>
                  <option value="174">&nbsp;&nbsp;Puerto Rico (1)</option>
                  <option value="215">&nbsp;&nbsp;Trinidad and Tobago (1)</option>
                  <option value="Central America">Central America (19)</option>
                  <option value="54">&nbsp;&nbsp;Costa Rica (6)</option>
                  <option value="65">&nbsp;&nbsp;El Salvador (7)</option>
                  <option value="95">&nbsp;&nbsp;Honduras (3)</option>
                  <option value="155">&nbsp;&nbsp;Nicaragua (3)</option>
                  <option value="Europe">Europe (1618)</option>
                  <option value="3">&nbsp;&nbsp;Albania (1)</option>
                  <option value="15">&nbsp;&nbsp;Austria (31)</option>
                  <option value="21">&nbsp;&nbsp;Belarus (26)</option>
                  <option value="22">&nbsp;&nbsp;Belgium (25)</option>
                  <option value="28">&nbsp;&nbsp;Bosnia and Herzegovina (2)</option>
                  <option value="34">&nbsp;&nbsp;Bulgaria (8)</option>
                  <option value="55">&nbsp;&nbsp;Croatia (55)</option>
                  <option value="57">&nbsp;&nbsp;Cyprus (4)</option>
                  <option value="58">&nbsp;&nbsp;Czech Republic (18)</option>
                  <option value="59">&nbsp;&nbsp;Denmark (12)</option>
                  <option value="68">&nbsp;&nbsp;Estonia (7)</option>
                  <option value="73">&nbsp;&nbsp;Finland (17)</option>
                  <option value="74">&nbsp;&nbsp;France (125)</option>
                  <option value="81">&nbsp;&nbsp;Germany (204)</option>
                  <option value="84">&nbsp;&nbsp;Greece (36)</option>
                  <option value="97">&nbsp;&nbsp;Hungary (37)</option>
                  <option value="98">&nbsp;&nbsp;Iceland (3)</option>
                  <option value="103">&nbsp;&nbsp;Ireland (24)</option>
                  <option value="106">&nbsp;&nbsp;Italy (126)</option>
                  <option value="242">&nbsp;&nbsp;Kosovo (1)</option>
                  <option value="119">&nbsp;&nbsp;Latvia (3)</option>
                  <option value="125">&nbsp;&nbsp;Lithuania (12)</option>
                  <option value="126">&nbsp;&nbsp;Luxembourg (4)</option>
                  <option value="128">&nbsp;&nbsp;Macedonia (3)</option>
                  <option value="134">&nbsp;&nbsp;Malta (1)</option>
                  <option value="141">&nbsp;&nbsp;Moldova (7)</option>
                  <option value="151">&nbsp;&nbsp;Netherlands (36)</option>
                  <option value="161">&nbsp;&nbsp;Norway (55)</option>
                  <option value="172">&nbsp;&nbsp;Poland (95)</option>
                  <option value="173">&nbsp;&nbsp;Portugal (55)</option>
                  <option value="177">&nbsp;&nbsp;Romania (4)</option>
                  <option value="178">&nbsp;&nbsp;Russian Federation (29)</option>
                  <option value="241">&nbsp;&nbsp;Serbia (12)</option>
                  <option value="195">&nbsp;&nbsp;Slovenia (11)</option>
                  <option value="199">&nbsp;&nbsp;Spain (133)</option>
                  <option value="204">&nbsp;&nbsp;Sweden (42)</option>
                  <option value="205">&nbsp;&nbsp;Switzerland (19)</option>
                  <option value="222">&nbsp;&nbsp;Ukraine (78)</option>
                  <option value="224">&nbsp;&nbsp;United Kingdom (257)</option>
                  <option value="North America">North America (614)</option>
                  <option value="40">&nbsp;&nbsp;Canada (81)</option>
                  <option value="140">&nbsp;&nbsp;Mexico (32)</option>
                  <option value="225">&nbsp;&nbsp;United States (501)</option>
                  <option value="Oceania">Oceania (4)</option>
                  <option value="72">&nbsp;&nbsp;Fiji (2)</option>
                  <option value="153">&nbsp;&nbsp;New Caledonia (1)</option>
                  <option value="160">&nbsp;&nbsp;Northern Mariana Islands (1)</option>
                  <option value="South America">South America (312)</option>
                  <option value="11">&nbsp;&nbsp;Argentina (45)</option>
                  <option value="27">&nbsp;&nbsp;Bolivia (2)</option>
                  <option value="31">&nbsp;&nbsp;Brazil (99)</option>
                  <option value="45">&nbsp;&nbsp;Chile (22)</option>
                  <option value="49">&nbsp;&nbsp;Colombia (47)</option>
                  <option value="63">&nbsp;&nbsp;Ecuador (26)</option>
                  <option value="89">&nbsp;&nbsp;Guatemala (1)</option>
                  <option value="168">&nbsp;&nbsp;Paraguay (1)</option>
                  <option value="169">&nbsp;&nbsp;Peru (49)</option>
                  <option value="226">&nbsp;&nbsp;Uruguay (4)</option>
                  <option value="230">&nbsp;&nbsp;Venezuela (16)</option>
                  <option value="[Unspecified]">[Unspecified] (1)</option>
                  <option value="239">&nbsp;&nbsp;[Unknown] (1)</option>
                </select>
              </td>
  
  <br><br>
  
  
  
  <input type="submit" name="submit" value="Submit" onclick="calc()">  
</form>


<br>
				 <img src="img/Bigta.png">

<?php

			
						//$xml = new SimpleXMLElement('<xml/>');
				 		$xml = simplexml_load_file('DMP.xml');


						$xml->addChild('file_name1', $_GET["file_name1"]);
						$xml->addChild('file_format1', $_GET["file_format1"]);
						$xml->addChild('file_size1', $_GET["file_size1"]);
						$xml->addChild('file_input_output1', $_GET["file_input_output1"]);
						$xml->addChild('file_name2', $_GET["file_name2"]);
						$xml->addChild('file_format2', $_GET["file_format2"]);
						$xml->addChild('file_size2', $_GET["file_size2"]);
						$xml->addChild('file_input_output2', $_GET["file_input_output2"]);




						print($xml->asXML('DMP.xml'));


?>


				</center>
				</div>
				<div class="col-md-3" style="margin-top: 200px">
					<div class="col-md-10" style="width: 200px"></div>
					<div class="col-md-2">	
						<a href="select.php"><img src="img/navigate_rightt.png" width="90" height="70"></a>
</div>

				</div>
 			</div>
		
		</div>
	</div>
	
</body>
</html>
