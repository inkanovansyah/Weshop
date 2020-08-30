<?php

	if ($user_id) {
		header ("location: ".BASE_URL);
	}
?>



<div id="container-user-akses">
	
	<form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">
	
		<?php
			// notif ketika email tidak masuk tidak cocok
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			if($notif == true) {
				echo "<div class='notif'>Maaf, email yang anda masukan tidak cocok</div>";
			}
		?>
		
		<!-- code untuk membuat login -->
		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" /></span>
		</div>
		
		<div class="element-form">
			<label>Password</label>
			<span><input type="Password" name="password" /></span>
		</div>
		
		<div class="element-form">
			<span><input type="submit" value="Login" /></span>
		</div>
		
	</form>

</div>