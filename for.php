<html>
<head><title>PHP Test</title></head>
	<body>
		
		

		<?php
			// for loop
			echo "THE FOR LOOP <br>";
			
			
			for($i = 1; $i <=10; $i++){
				echo "index= $i <br>";

			}
			// for loop in an array
			echo "THE FOR LOOP IN AN ARRAY <br>";
			$Numbers = array(4,8, 32, 82, 88, 90, 102);
			for($i = 0; $i < count($Numbers); $i++){
				echo "$Numbers[$i] <br>";
			}

		?>








	</body>

</html>