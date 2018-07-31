<div id="testimonial">
	<div class="container">
		<?php
			include_once ('./controller/coDB.php');
			$co = new connexion();
			$co->connect();
			$co->para("commentaire", " comments ORDER BY RAND() LIMIT 3");
		?>

	</div>
</div>