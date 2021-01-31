<!-- Q.10) Write a PHP program to sort the student records which are stored in the database using selection sort. -->

<!DOCTYPE html>
<html>
	<body>
		<style>
			table, td, th {
				border: 1px solid black;
				width: 33.3%;
				text-align: center;
				background-color: lightblue;
				border-collapse: collapse;
			}

			table {
				margin: auto;
			}
		</style>

		<?php 
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="weblab";
			$a = [];

			// Create a connection
			// Opens a new connection to the MySQL server
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection and return the error description from the last connection error, if any.
			if($conn->connect_error)
				die("Connection failed: " . $conn->connect_error());

			$sql = "SELECT * FROM student";
			// Performs a query against the database
			$result = $conn->query($sql);

			echo "<br>";
			echo "<center> BEFORE SORTING </center>";
			echo "<table border='2'>";
			echo "<tr>";
			echo "<th> USN </th> <th> Name </th> <th> Address </th>";
			echo "</tr>";

			if($result->num_rows > 0)	// If returned result has some data
			{
				// Outputs data of each row and fetches result row as an associative array
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["usn"] . "</td>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["addr"] . "</td>";
					echo "</tr>";

					array_push($a, $row["usn"]);		// Insert element to end of array
				}
			}
			else 
				echo "Table is empty";

			echo "</table>";

			$n = count($a);
			$b = $a;

			// Perform selection sort
			for($i=0; $i<($n-1); $i++) {
				$pos = $i;
				for($j=$i+1; $j<$n; $j++) {
					if($a[$pos] > $a[$j])
						$pos = $j;
				}
				if($pos != $i) {
					$temp = $a[$i];
					$a[$i] = $a[$pos];
					$a[$pos] = $temp;
				}
			}

			$c = [];
			$d = [];
			$result = $conn->query($sql);

			// Output data of each row
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					for($i=0; $i<$n; $i++) {
						if($row["usn"] == $a[$i]) {
							$c[$i] = $row["name"];
							$d[$i] = $row["addr"];
						}
					}
				}
			}

			echo "<br>";
			echo "<center> AFTER SORTING </center>";
			echo "<table border='2'>";
			echo "<tr>";
			echo "<th> USN </th> <th> Name </th> <th> Address </th>";
			echo "</tr>";

			for($i=0; $i<$n; $i++) {
				echo "<tr>";
				echo "<td>" . $a[$i] . "</td>";
				echo "<td>" . $c[$i] . "</td>";
				echo "<td>" . $d[$i] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			// Close the connection
			$conn->close();
		?>
	</body>
</html>
