<?php
	require 'Includes/common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email_id"])){
		header("location: Index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Flower Power</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
                <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require 'Includes/Header.php';
		?>
        <div class="form-container">
            <div class="alert alert-success">
                <p>You have successfully logged out. Click <a href="Index.php">here</a> to go back to index page.</p>
            </div>
        </div>
		<?php
			require 'Includes/footer.php';
		?>
	</body>
</html>