<?php 
	$page = "contact";
	if (isset($_POST["submit"])){
		$name = $_POST["naam"];
		$surname = $_POST["achternaam"];
		$email = $_POST["email"];
		$message = $_POST["bericht"];

		$mailTo = "vcgoedhart@hotmail.com";
		$header = "Van: " . $email;
		$txt = "Je hebt een mail ontvangen van " . $name . " " . $surname;

		mail($mailTo, $txt, $message, $header);
		header("Location: contact.php?mailsend");
	}
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
					   <h1 class="display-4 animRotate">Contact formulier</h1>
					   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
						    <div class="messages"></div>
						    <div class="controls">
						        <div class="row">
						            <div class="col-md-6">
						                <div class="form-group">
						                    <label for="form_name">Voornaam *</label>
						                    <input id="form_name" type="text" name="naam" class="form-control" placeholder="Vul hier uw voornaam in" required="required" data-error="Dit veld is verplicht.">
						                    <div class="help-block with-errors"></div>
						                </div>
						            </div>
						            <div class="col-md-6">
						                <div class="form-group">
						                    <label for="form_lastname">Achternaam *</label>
						                    <input id="form_lastname" type="text" name="achternaam" class="form-control" placeholder="Vul hier uw achternaam in" required="required" data-error="Dit veld is verplicht.">
						                    <div class="help-block with-errors"></div>
						                </div>
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-6">
						                <div class="form-group">
						                    <label for="form_email">Email *</label>
						                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Vul hier uw email in" required="required" data-error="Dit veld is verplicht.">
						                    <div class="help-block with-errors"></div>
						                </div>
						            </div>
						        	<div class="col-md-6">  
						        		<label for="form_file">Bestand</label>
										<div class="custom-file">
											<input name="form_file" type="file" class="custom-file-input" id="validatedCustomFile" required>
											<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
											<div class="invalid-feedback">Example invalid custom file feedback</div>
										</div>
						        	</div>
						        </div>
						        <div class="row">
						            <div class="col-md-12">
						                <div class="form-group">
						                    <label for="form_message">Bericht *</label>
						                    <textarea id="form_message" name="bericht" class="form-control" placeholder="Vul hier uw bericht in" rows="4" required="required" data-error="Dit veld is verplicht."></textarea>
						                    <div class="help-block with-errors"></div>
						                </div>
						            </div>
						            <div class="col-md-12">
						                <input name="submit" type="submit" class="btn btn-success btn-send" value="Send message">
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-12">
						                <p class="text-muted"><strong>*</strong> Deze velden zijn verplicht.</p>
						            </div>
						        </div>
						    </div>
					   </form>
					</div>
 				</div>
			</div>

			<?php include "include/footer.php"; ?>
		</main>

		<script type="text/javascript"><?php include "include/script/date.js" ?></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>
            $('#validatedCustomFile').on('change', function(){
                var fileName = $(this).val().replace('C:\\fakepath\\', " ")
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
	</body>
</html>