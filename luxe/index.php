<!DOCTYPE html>
<?php
	require_once ('vue/common/head.php');

	require_once ('controller/classRouter.php');

	if (isset($_GET["vueA"])) {
		
		$page = new router();

	} else {
		
		require_once ('vue/vueAccueil.php');
	}

	require_once ('vue/common/footer.php');
?>