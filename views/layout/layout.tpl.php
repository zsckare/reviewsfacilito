<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

	<title><?=$title ?></title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/styles.css">

	<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body class="grey lighten-3" >
	<header>
		<nav class="primary" >
			<div class="nav-wrapper container ">
				<a href="/" class="brand-logo dosis">ReviewsFacilito</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="/"><i class="material-icons">home</i></a></li>
					</ul>
			</div>
		</nav>
	</header>

	<div class="container">
		<?=$yield ?>
	</div>

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

</body>
</html>
