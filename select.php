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
			<div class="col-md-4">

				
				
				
				
	<form action="find_license.php" method="get">
		Go to license selector and choose the license and after that copy the JSON code thet will appear in the page and past it in the text field below.
		<br>
		<a target="_blank" href="https://ufal.github.io/public-license-selector/">License Selector</a>
			<br><br>

		put the JSON code here:
		<br>
		<input type="text" name="license" style="margin-top: 5px">
			<br><br>
		<input type="submit">
	</form>
				
				
				
			</div>
		
		</div>
	</div>
	
</body>
</html>
