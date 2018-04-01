		<?php
		include 'head.php';
		include 'header.php';
		include 'dbConnect.php';

		?>

		<section class="home">
			<div class="container">
				<div class="row">

					<div class="headline">
							<h2>Photo Gallery</h2>
						</div>


					<div class="col-md-12 col-sm-12 col-xs-12">

						<?php

				            $dbconn = new Dbconnect;
				            $db = $dbconn->getDb();
				            $query = "SELECT * FROM photos WHERE approved='yes' ORDER BY imgOrder ASC";
				            $statement = $db->prepare($query);
				            $statement->execute();
				            $approvedPics = $statement->fetchAll(PDO::FETCH_OBJ);

					foreach($approvedPics as $g)
					{
						echo "<div style='width:30%;margin-left:1%;margin-right:1%;margin-bottom:50px;display:inline-block;vertical-align:top;'>";
						echo "<img src='". $g->url . "' style='width:100%;border:solid 1px purple;border-radius:20px;'>";
						echo "</div>";
					}
				?>


					
				</div>
			</div>
		</section>


		<?php

		include 'footer.php';

		?>

