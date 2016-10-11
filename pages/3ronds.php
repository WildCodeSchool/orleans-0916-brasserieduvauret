<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>La Brasserie du vauret</title>
		<link rel="stylesheet" type="text/css" href="../css/3ronds.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body>
<header>

	<script>
	$(document).ready(function(){
		// set up hover panels
		// although this can be done without JavaScript, we've attached these events
		// because it causes the hover to be triggered when the element is tapped on a touch device
		$('.hover').hover(function(){
			$(this).addClass('flip');
		},function(){
			$(this).removeClass('flip');
		});
	});
    </script>
   
<div class="container-fluid">
	<div class="row">
<div class="wrapper col-lg-offset-2 col-lg-2">
      <div class="col_third">
        <div class="hover panel">
          <div class="front">
            <div class="box1">
              <p>Front Side</p>
            </div>
          </div>
          <div class="back">
            <div class="box2">
              <p>Back Side</p>
            </div>
          </div>
        </div>
		</div>

		<div class="col_third">
        <div class="hover panel">
          <div class="front">
            <div class="box1">
              <p>Front Side</p>
            </div>
          </div>
          <div class="back">
            <div class="box2">
              <p>Back Side</p>
            </div>
          </div>
        </div>
		</div>

		<div class="col_third end">
        <div class="hover panel">
          <div class="front">
            <div class="box1">
              <p>Front Side</p>
            </div>
          </div>
          <div class="back">
            <div class="box2">
              <p>Back Side</p>
            </div>
          </div>
        </div>
      </div>
	 </div>
	 </div>
	 </div>
<div class="container-fluid">
	<div class="row espace">


	</div>	
	</div>
</html>
