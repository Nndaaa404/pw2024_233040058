<?php 

echo date('d/F/Y');
echo "<br>";
echo date('l, d F Y');
echo "<br>";
echo time();
echo "<br>";
echo date("l", time() + 24 * 60 * 60 * 100);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", mktime(0, 0, 0, 8, 18, 2005));

?>