<?php
	include "system/config.php";

	if($maintenance == true){
		echo "The site is currently under maintenance.";		
	}elseif($maintenance == false){
		?>
		<html>
			<head>
				<title><?php echo $title; echo $seperator; echo $description; ?></title>
				<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
				<meta charset="utf-8">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1">
			    <link href="frontend/design/css/bootstrap.min.css" rel="stylesheet">
			    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
			    <link href="frontend/design/css/stylesheet.css" rel="stylesheet" type="text/css">
			</head>
			
			<body>
				<div id="wrapper">
					<div>
						Header
					</div>
					<div>
						Content
					</div>
					<div>
						Footer
					</div>
				</div>
			</body>
		</html>
		<?php
	}
?>