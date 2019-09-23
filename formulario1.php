html>

	<form>
	
		<input name="email" type="email"/>
		<button>SUSCRIBIRSE</button>
	</form>
	
	<?php
	if (isset($_GET))
	print_r($_GET);

	$f=fopen('email.txt','a');
	
	fwrite($f,$_GET['email']."\r\n");
	
	fclose($f)
	
	?>
	
</html>