<html>
<head>
	<link rel="stylesheet" type="text/css" href="php-in-action.css">
	<title>PHP in Action</title>
</head>
<body>
	<img src ='http://placehold.it/150x150' />
	<div class='header'>
		<h1>
			<?php
			$welcome = 'Lets get started with PHP!';
			echo welcome;
			?>
		</h1>
	</div> <!-- end of header -->
		<p>Generate a list:
			<?php
			for ($number=1; $number <= 10; $number++) 
				{ 
					if ($number <= 9) {
						echo $number . ", ";
				}	else {
						echo $number . "!";
				}
			}; ?>
		</p>
		<p>Things you can do:
			<?php 
				$things = array("talk to databases", "send cookies", "evaluate form data", "build dynamic webpages");
				foreach ($things as $thing) 
				{
				 	echo '<li>$thing</li>';
				} 
				unset($thing);
			?>
		</p>
			

</body>
</html>