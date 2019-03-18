<?php 
	$page = "werk";
 ?>
<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Vincent Goedhart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<style type="text/css"><?php include "include/style.css"; ?></style>

		<main>
			<?php include "include/navbar.php"; ?>
    		<?php include "include/carousel.php"; ?>

 			<div class="container container-fluid pt-5">
 				<div class="row">
 					<div id="werk" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					   <h1 class="display-4 animRotate">Opdrachten</h1>
					   <p class="lead">U kunt al mijn opdrachten vinden op <a href="https://www.linkedin.com/in/vincent-goedhart/" target="_blank">GitHub</a></p>
					</div>

 					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					   <div class="card mt-4 mx-auto" style="width: 18rem;">
							<img class="card-img-top" src="img/cards/responsive.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Responsive website</h5>
								<p class="card-text">In deze opdracht moesten we leren een responsive website maken die op alles functioneerd.</p>
								<a href="#" class="btn btn-primary">Bekijken...</a>
							</div>
						</div>
 					</div>

 					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					   <div class="card mt-4 mx-auto" style="width: 18rem;">
							<img class="card-img-top" src="img/cards/lingo.png" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Lingo</h5>
								<p class="card-text">Hier moesten we Lingo namaken met Javascript. We hebben geleerd om met arrays te werken.</p>
								<a href="#" class="btn btn-primary">Bekijken...</a>
							</div>
						</div>
 					</div>

 					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					   <div class="card mt-4 mx-auto" style="width: 18rem;">
							<img class="card-img-top" src="img/cards/handy.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Handy</h5>
								<p class="card-text">Bij deze opdracht moesten we met positions werken en dropdown menus.</p>
								<a href="#" class="btn btn-primary">Bekijken...</a>
							</div>
						</div>
 					</div>
 				</div>
			</div>

			<?php include "include/footer.php"; ?>
		</main>

		<script type="text/javascript"><?php include "include/script/date.js" ?></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>