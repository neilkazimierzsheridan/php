<html>
<head><title>PHP Test</title></head>
	<body>

	<?php

		class Chef {
			function makeChicken(){
				echo "The chef make chicken";
			}

			function makeSalad(){
				echo "The chef make salads";
			}

			function makeSpecialDish(){
				echo "The chef make special";
			}
		}

		class ItalianChef extends Chef {

			function makePasta(){
				echo "The chef makes pasta";
			}


		}

		$chef = new Chef();
		$chef->makeChicken();

		$ItalianChef = new ItalianChef();
		$ItalianChef->makeSalad();
		$ItalianChef->makePasta();




















	?>

</body>
</html>