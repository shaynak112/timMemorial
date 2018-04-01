		<?php
		include 'head.php';
		include 'header.php';

		?>

		<section class="home">
			<div class="container">
				<div class="row">

					<div class="headline">
							<h2>Photo Gallery</h2>
						</div>


					<div class="col-md-12 col-sm-12 col-xs-12">

						<?php

						$inc=1;

						while($inc<129)
						{
							if($inc<10)
							{
								echo "<div style='width:30%;margin-left:1%;margin-right:1%;margin-bottom:50px;display:inline-block;vertical-align:top;'>";
								echo "<img src='photos/img0" . $inc . ".jpg' style='width:100%;'>";
								echo "</div>";
								$inc++;
							}
							else
							{
								echo "<div style='width:30%;margin-left:1%;margin-right:1%;margin-bottom:50px;display:inline-block;vertical-align:top;'>";
								echo "<img src='photos/img" . $inc . ".jpg' style='width:100%;'>";
								echo "</div>";
								$inc++;
							}


						}



						?>



					</div>
					
				</div>
			</div>
		</section>


		<?php

		include 'footer.php';

		?>

