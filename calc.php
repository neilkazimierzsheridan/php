<html>
<head><title>PHP Test</title></head>
	<body>
		<form actions="test.php" method="post">
			First Number: <input type="number" step="0.1" name="num1"> <br>
			Second Number: <input type="number" step="0.1" name="num2"> <br>
			Operator: <input type="text" name="op"> <br>
			<input type="submit">

		</form>

		<?php
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$op = $_POST["op"];

			if($op == "+"){
				echo $num1 + $num2;
			} elseif($op == "-"){
				echo $num1 - $num2;
			} elseif($op == "/"){
				echo $num1 / $num2;
			} elseif($op == "*"){
				echo $num1 * $num2;
			} else {
				echo "Invalid Operation";
			}

		?>








	</body>

</html>