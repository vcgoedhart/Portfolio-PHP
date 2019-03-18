<?php 
	$title = "Welkom op mijn website";
	if ($page == "contact"){
		$title = "Bent u geïnteresseerd in contact?";
	} else if ($page == "personalia"){
		$title = "Een stukje over mezelf";
	} else if ($page == "skills"){
		$title = "Dit is wat ik kan";
	} else if ($page == "werk"){
		$title = "Hier kunt u over mij lezen";
	}
 ?>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
	    <li data-target="#carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel" data-slide-to="1"></li>
	    <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-caption">
    	<h1 class="display-4 animated fadeInLeft"><?= $title ?></h1>
    </div>
    <div class="carousel-inner">
	    <div class="carousel-item active">
		    <div style="background: url('https://picsum.photos/1920/900?image=110'); background-repeat: no-repeat; background-size: cover; background-position: center;" class="d-block w-100"></div>
		</div>
		<div class="carousel-item">
		    <div style="background: url('https://picsum.photos/1890/1260?image=191'); background-repeat: no-repeat; background-size: cover; background-position: center;" class="d-block w-100"></div>
		</div>
		<div class="carousel-item">
		    <div style="background: url('https://picsum.photos/1920/900?image=916'); background-repeat: no-repeat; background-size: cover; background-position: center;" class="d-block w-100"></div>
	    </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
    </a>
</div>