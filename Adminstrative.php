<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>Admin Info</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
	<script src="js/jquery-3.1.1.min.js" type="application/javascript"></script>
</head>
<style>
	h5 {
		color: #476BB4;
	}
</style>

<body>
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
				<a href="index.php" ><img src="img/navigate_left.png" width="90" height="70"></a>
				</div>
				<div class="col-md-6" style="margin-top: 20px; border: double;">
					<center>


						<?php

						$student_name = $_GET[ 'name' ];
						$project_title = $_GET[ 'title' ];
							$xml = new SimpleXMLElement('<xml/>');

							$xml->addChild('title', $_GET["title"]);

							print($xml->asXML('DMP.xml'));
						
						
						$student_name = str_replace( ' ', '', $student_name );

						$URL_id = "https://tiss.tuwien.ac.at/api/person/v21/psuche?q=$student_name&max_treffer=1";



						$json = file_get_contents( $URL_id );
						$obj = json_decode( $json );
						$student_id = $obj->results[ 0 ]->id;

						$URL_data = 'https://tiss.tuwien.ac.at/api/person/v21/id/' . $student_id;
						$xml = simplexml_load_file( $URL_data );
						
						$firstname = $xml->person->firstname;
						$lastname = $xml->person->lastname;
						$gender = $xml->person->gender;
						$preceding_titles = $xml->person->preceding_titles;
						$main_email = $xml->person->main_email;
						$organisational_unit = $xml->person->employee->employment->organisational_unit;
						$function_category = $xml->person->employee->employment->function_category;

						echo "<h5>First Name</h5>";
						echo $firstname;
						$_GET[ "firstname" ] = $firstname;
						echo "<br><br><h5>Lastname </h5>";


						echo $xml->person->lastname;
						$_GET[ "lastname" ] = $lastname;

						echo "<br><br><h5>Gender</h5>";

						echo $gender;
						$_GET[ "gender" ] = $gender;

						echo "<br><br><h5>Preceding titles</h5>";


						echo $preceding_titles;
						$_GET[ "preceding_titles" ] = $preceding_titles;

						echo "<br><br><h5>Email</h5>";


						echo $main_email;
						$_GET[ "main_email;" ] = $main_email;

						echo "<br><br><h5>Organisational_unit</h5>";


						echo $organisational_unit;
						$_GET[ "organisational_unit" ] = $organisational_unit;

						echo "<br><br><h5>Function_category</h5>";


						echo $function_category;
						$_GET[ "function_category" ] = $function_category;

						
						//generate part of DMP
	$xml = new SimpleXMLElement('<xml/>');



	$xml->addChild('title', $_GET["title"]);

	$xml->addChild('firstname', $firstname);

	$xml->addChild('lastname', $lastname);

	$xml->addChild('gender', $gender);

	$xml->addChild('organisational_unit', $organisational_unit);

	$xml->addChild('function_category', $function_category);



	print($xml->asXML('DMP.xml'));
						
						?>


					</center>
					<br>
					<br>
				</div>
				<center>
				
				</center>
				<div class="col-md-3" style="margin-top: 200px">
					<div class="col-md-10" style="width: 200px"></div>
					<div class="col-md-2">	
						<a href="Analyse.php"><img src="img/navigate_rightt.png" width="90" height="70"></a>
</div>

				</div>
			</div>

		</div>
	</div>

</body>

</html>