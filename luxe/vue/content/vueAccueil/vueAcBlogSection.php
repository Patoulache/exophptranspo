<div id="fh5co-blog-section">
	<div class="container">
		<?php
		include_once ('./controller/coDB.php');
		$co = new connexion();
		$co->connect();
		$co->para("articles", " blog ORDER BY RAND() LIMIT 3");
		?>
		
	</div>
</div>