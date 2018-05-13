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
	.button {
		display: inline-block;
		border-radius: 4px;
		background-color: #5C6EDB;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 18px;
		padding: 5px;
		width: 200px;
		transition: all 0.5s;
		cursor: pointer;
		height: 40px;
	}
	
	.button span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}
	
	.button span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
	}
	
	.button:hover span {
		padding-right: 25px;
	}
	
	.button:hover span:after {
		opacity: 1;
		right: 0;
	}
</style>
<!--<script>
function myFunction() {
    document.getElementById("demo").style.backgroundColor ="red";
}
</script>-->

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10" style="margin-top: 10px">
				<img src="TU-Logo-Austria_CMYK.png" height="80">
			</div>
		</div>
		<div class="row" style="margin-top: 3px">
			<div class="col-md-12" style="height: 60px; border: inset; border-color:#72B0DC; margin-bottom: 3px; margin-top: 2px">
				<div class="row" style="height: 2px"></div>
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
			<div class="col-md-12" style="margin-top: 110px;">
				<div class="col-md-4">
					<form action="Adminstrative.php" method="get">
						
						Name of researcher: &shy; &shy;
						<input type="text" name="name" style="margin-top: 5px" placeholder=" Name">
						<br><br> Title of the project: &shy; &shy; &shy; &shy; &shy;
						<input type="text" name="title" placeholder="Title of project">
						
						<center>
							<br><br>
							<button class="button" style="vertical-align:middle"><span>Get From Tiss</span></button>
						</center>
					</form>
				</div>
				<img src="img/Bigta.png">
				<div class="col-md-8">

				</div>

			</div>

		</div>

</body>

</html>