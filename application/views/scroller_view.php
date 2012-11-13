<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  
</head>
	
<body>
	<section class="wrapper">
		<h1>The Social Scroller</h1>
		
		<div class="box">
			<div class="scroll">
			<?php

			if($requests->num_rows() > 0){
				foreach($requests->result() as $row){
					echo "<ul>";
					echo "<li>" . $row->name . "</li>";
					echo "<li>" . $row->request . "</li>";
					echo "<li>" . $row->email . "</li>";
					echo "</ul>";
				}
			}

			?>
			</div>
		</div>
		<button> <?php echo anchor('scrollerForm', 'Submit a Request'); ?> </button>
	</section>
	<footer>
		
	</footer>
<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>

