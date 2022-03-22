<?php
$accesos = 1;
	if (isset($_COOKIE["num_accesos"])) {
		$accesos = $_COOKIE["num_accesos"] + 1;
	}
	setcookie("num_accesos", 1, time() + 2592000);





	//echo "<div class='row float-right'>" . $_SESSION['sesion'] . "</div>" . "<br/>";

			if ($accesos == 1) echo "<div class='row float-right'>Es la primera vez que accedes a Pizzas el Churco.</div>";
			else echo "<div class='row float-right'>Has accedido a esta página $accesos veces.</div>";

			$_SESSION['sesion'] = 0;

?>