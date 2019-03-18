<?php 
	$page = "skills";
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
 					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					   <h1 class="display-4 animRotate">Skills</h1>
						<div class="mt-4 my-2 progress" style="height: 35px;">
							<div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
								<p class="m-0 lead">HTML</p>
							</div>
						</div>
						<div class="my-3 progress" style="height: 35px;">
							<div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								<p class="m-0 lead">CSS</p>
							</div>
						</div>
						<div class="my-3 progress" style="height: 35px;">
							<div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
								<p class="m-0 lead">Javascript</p>
							</div>
						</div>
						<div class="my-3 progress" style="height: 35px;">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
								<p class="m-0 lead">PHP</p>
							</div>
						</div>
						<div class="my-3 progress" style="height: 35px;">
							<div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
								<p class="m-0 lead">Bootstrap</p>
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