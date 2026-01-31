<!DOCTYPE html>
<html>
	<head>
    		<title>Comprobar WAF</title>
	</head>
	<body>

		<h2>Prueba de ModSecurity</h2>

		<?php
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
    			$data = $_POST["data"] ?? '';
    			echo "<p>Se ha recibido lo siguiente: <strong>$data</strong></p>";
		}
		?>

		<form method="post">
    			<label>Añade un texto:</label><br>
    			<input type="text" name="data" required>
    			<br><br>
    			<button type="submit">Enviar</button>
		</form>

	</body>
</html>
