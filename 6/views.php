<?php

/* Q.6) Write a PHP program to keep track of the number of visitors visiting the web page and to display the count of
   visitors, with proper headings */

print "<h3> REFRESH PAGE </h3>";
$fname = "counter.txt";
$fp = fopen($fname, "r");
$hits = fscanf($fp,"%d");
fclose($fp);

$hits[0]++;
$fp = fopen($fname, "w");
fprintf($fp, "%d", $hits[0]);
fclose($fp);

print "Total number of views: ".$hits[0];

?>
