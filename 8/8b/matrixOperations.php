<!-- Q.8) Write a PHP program to - 
	     a) Find the transpose of a matrix.
	     b) Multiplication of two matrices.
	     c) Addition of two matrices -->

<?php 
	// Form 2D matrices
	$a = array(array(1,2,3), array(4,5,6), array(7,8,9));
	$b = array(array(7,8,9), array(4,5,6), array(1,2,3));
	// Get the dimensions of matrix a and b
	$m = count($a); 	// count() returns the number of elements in an array (here returns 3)
	$n = count($a[2]);	// returns number of elements in second last array element (returns 3)
	$p = count($b);
	$q = count($b[2]);

	echo "The first matrix ="."<br/>";
	for($row=0; $row<$m; $row++) {
		for($col=0; $col<$n; $col++) {
			echo " ". $a[$row][$col];
		}
		echo "<br/>";
	}

	echo "The second matrix ="."<br/>";
	for($row=0; $row<$m; $row++) {
		for($col=0; $col<$n; $col++) {
			echo " ". $b[$row][$col];
		}
		echo "<br/>";
	}

	//Transpose of matrix
	echo "The transpose of first matrix is= <br/>";
	for($row=0; $row<$m; $row++) {
		for($col=0; $col<$n; $col++) {
			echo " ". $a[$col][$row];
		}
		echo "<br/>";
	}

	//Addition of two matrices
	if(($m == $p) and ($n == $q))
	{
		echo "The addition of matrices is= <br/>";
		for($row=0; $row<$m; $row++) {
			for($col=0; $col<$n; $col++) {
				echo " ". $a[$row][$col] + $b[$row][$col]." ";
			}
			echo "<br/>";
		}
	}
	
	//Multiplication of two matrices
	if($n == $p)
	{
		echo "The multiplication of matrices is= <br/>";
		$result = array();

		for($i=0; $i<$m; $i++) {
			for($j=0; $j<$q; $j++) {
				$result[$i][$j] = 0;
				for($k=0; $k<$n; $k++) {
					$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
				}
			}
		}

		for($row=0; $row<$m; $row++) {
			for($col=0; $col<$n; $col++) {
				echo " ". $result[$row][$col];
			}
			echo "<br/>";
		}
	}
?>
