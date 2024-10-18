<html>
<head><title>PHP Test</title></head>
	<body>
		<form actions="switch.php" method="post">
			
			Grade: <input type="text" name="grade"> <br>
			<input type="submit">

		</form>

		<?php
			$grade = $_POST["grade"];
			$goodOrNot = "";

			switch($grade){
				case "A":
					$goodOrNot = "Very good";
					break;
				case "B":
					$goodOrNot = "Quite good";
					break;
				case "C":
					$goodOrNot = "Poor work";
					break;
				case "D" :
					$goodOrNot = "Failure";
					break;
				default:
					echo "Invalid input";
					break;


			}

			echo $goodOrNot;
		?>








	</body>

</html>