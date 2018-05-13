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
											<?php
	/*
					function save_data () {
						echo "aaaaaaaaaaaaaaaaaaa";
						$xml = new SimpleXMLElement('<xml/>');



						$xml->addChild('name', $_GET["file_name1"]);
						$xml->addChild('name', $_GET["file_format1"]);
						$xml->addChild('name', $_GET["file_size1"]);
						$xml->addChild('name', $_GET["file_input_output1"]);
						$xml->addChild('name', $_GET["file_name2"]);
						$xml->addChild('name', $_GET["file_format2"]);
						$xml->addChild('name', $_GET["file_size2"]);
						$xml->addChild('name', $_GET["file_input_output2"]);




						print($xml->asXML('DMP.xml'));
					}
	*/
					?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10" style="margin-top: 10px">
				<img src="TU-Logo-Austria_CMYK.png" height="80">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="height: 60px; border: inset; border-color:#72B0DC; margin-bottom: 3px">
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
					ADMINISTRATIVE DATA</a>
					</div>
					<div class="col-md-2">
						<img src="img/analysis-icon-11460.png" height="30" width="40">
						<br>
						<a href="Analyse.php">Analyse Data</a>
					</div>
					<div class="col-md-2">
						<img src="img/icon-data.png" height="30" width="30">
						<br>
						<a href="repo.php">FIND REPOSITORY </a>
					</div>
					<div class="col-md-2">
						<img src="img/Select.png" width="30" height="30">
						<br>
						<a href="select.php">SELECT LICENSE </a>
					</div>
					<div class="col-md-2">
						<img src="img/Easy_ingestion.png" width="30" height="30"><br>
					<a href="GENERATE.php">GENERATE DMP </a>
					</div>
				</center>

			</div>
			<div class="row">
				<div class="col-md-3" style="margin-top: 200px">
				<a href="Adminstrative.php"><img src="img/navigate_left.png" width="90" height="70"></a>
				</div>
			<div class="col-md-6" style="margin-top: 40px">
				<form action="repo.php" method = "get">
				<center>
					<!--<form action="upload.php" method="post" enctype="multipart/form-data">
						Select image to upload:
						<input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="Upload Image" name="submit">
					</form>-->
	 
					<table width="500" border="1" style="margin-top: 120px">
						<tbody>
							<tr>
								<th scope="col">Name</th>
								<th scope="col">Format</th>
								<th scope="col">Size</th>
								<th scope="col">input/output</th>
							</tr>
							<tr>
								<td><input type="text" name="file_name1"></td>
								<td><input type="text" name="file_format1"></td>
								<td><input type="text" name="file_size1"></td>
								<td><input type="text" name="file_input_output1"></td>
							</tr>
							<tr>
								<td><input type="text" name="file_name2"></td>
								<td><input type="text" name="file_format2"></td>
								<td><input type="text" name="file_size2"></td>
								<td><input type="text" name="file_input_output2"></td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<input type="submit" onclick="save_data()">
				</center>
				
</form>
					
				<center>
					

	
				</center>
			</div>
				<div class="col-md-3" style="margin-top: 200px">
					<div class="col-md-10" style="width: 200px"></div>
					<div class="col-md-2">	
						<a href="repo.php"><img src="img/navigate_rightt.png" width="90" height="70"></a>
</div>

				</div>
			</div>

		</div>
	</div>

</body>

</html>