<?php
echo "<p>reto numero 6<p>";
$ropa = array("camisa","pantalon","cinturon");


sort($ropa);
foreach($ropa as $elemento){
	echo $elemento . " <br>";

}
array_push($ropa, "gorra");
array_push($ropa, "calcetines");
echo "<p>ropa en forma descendente<p>";

rsort($ropa);
foreach($ropa as $elemento){
	echo $elemento . " <br>";
}

?>