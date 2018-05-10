<?php
	ob_start();
	session_start();
	session_destroy();
	//header("Location:../login/index.html");
	echo '<script type="text/javascript">
			window.location.href="../agenda/login";
		</script>';
	ob_end_flush();
?>
