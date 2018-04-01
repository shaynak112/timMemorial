<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Shareable -->

		<title>Timothy Patrick</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="../../../../scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<!--<link rel="stylesheet" href="../../../../scripts/ionicons/css/ionicons.min.css">-->
		<!-- Toast -->
		<link rel="stylesheet" href="../../../../scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="../../../../scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../../../../scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="../../../../scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="../../../../scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="../../../../css/style.css">
		<link rel="stylesheet" href="../../../../css/skins/all.css">
		<link rel="stylesheet" href="../../../../css/demo.css">

		<style>

	<?php
		include 'dbConnect.php';

	?>

		table, th, td
		{
 			border: 1px solid black;
		}

		th, td
		{
			padding:8px;
			text-align:left;
		}



		</style>

	</head>



	<body class="skin-purple">




		<section class="home">
			<div class="container">
				<div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12">
							<h1>Tim Patrick - A Celebration Of Life</h1>
					
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
					
						<h2>Guestlist</h2>

						<table>

							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Date</th>
							</tr>

							<?php

							$dbconn = new Dbconnect;
				            $db = $dbconn->getDb();
        					$query = "SELECT * FROM eventAttendees ORDER BY attendeeID";
        					$statement = $db->prepare($query);
				            $statement->execute();
				            $attendeesList = $statement->fetchAll(PDO::FETCH_OBJ);

				            foreach($attendeesList as $g)
				            {
				            	echo "<tr>";
								echo "<td>" . $g->attendeeID . "</td>";
								echo "<td>" . $g->attendeeName . "</td>";
								echo "<td>" . $g->attendeeDate . "</td>";
								echo "</tr>";

				            }



							?>


						</table>




					</div>
					
				</div>
			</div>
		</section>




		<!-- JS -->
		<script src="../../../../js/jquery.js"></script>
		<script src="../../../../js/jquery.migrate.js"></script>
		<script src="../../../../scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="../../../../scripts/jquery-number/jquery.number.min.js"></script>
		<script src="../../../../scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="../../../../scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="../../../../scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="../../../../scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../../../../scripts/toast/jquery.toast.min.js"></script>
		<!--<script src="../../../../js/demo.js"></script>-->
		<script src=../../../../"js/e-magz.js"></script>
	</body>
</html>
