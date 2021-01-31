<!-- Q.8) Write a PHP program to implement simple calculator operations. -->

<!DOCTYPE html>
<html>
	<head>
		<style>
			table, td, th {
				border: 1px solid black;
				width: 33.3%;
				text-align: center;
				background-color: DarkGray;
				border-collapse: collapse;
			}

			table {
				margin: auto;
			}

			input {
				text-align: right;
			}

			p {
				text-align: center;
			}
		</style>
	</head>

	<body>
		<form method="POST">
			<table>
				<caption>
					<h2> SIMPLE CALCULATOR </h2>
				</caption>

				<tr>
					<td> First number: </td>
					<td> <input type="text" name="num1"/> </td>
					<td rowspan="2"> <input type="submit" name="submit" value="Calculate"></td>
				</tr>

				<tr>
					<td> Second number: </td>
					<td> <input type="text" name="num2"> </td>
				</tr>
			</table>
		</form>

		<?php 
			if(isset($_POST['submit'])) //Checks if the form is submitted
			{
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				if(is_numeric($num1) and is_numeric($num2))	//Check the variable is number or numeric string
				{
					echo "<table>";
					echo "<tr><td> Addition: </td><td><p>".($num1 + $num2)."</p></td></tr>";
					echo "<tr><td> Subtraction: </td><td><p>".($num1 - $num2)."</p></td></tr>";
					echo "<tr><td> Multiplication: </td><td><p>".($num1 * $num2)."</p></td></tr>";
					echo "<tr><td> Division: </td><td><p>".($num1 / $num2)."</p></td></tr>";
					echo "</table>";
				}
				else 
				{
					echo "<script> alert('Please enter a valid number.') </script>";
				}
			}
		?>
	</body>
</html>
