		<?php
		include 'head.php';
		include 'header.php';
		include 'dbConnect.php';

		?>

		<section class="home">
			<div class="container">
				<div class="row">

					<div class="headline">
							<h2>Guestbook</h2>
						</div>


					<div class="col-md-12 col-sm-12 col-xs-12">
						

					<h3>Add a comment</h3>

					<form enctype="multipart/form-data" method="post" action="">
					  <div class="form-group">
					    <label for="gbName">Name:</label>
					    <input type="text" class="form-control" id="gbName" name="gbName">
					  </div>

					  <div class="form-group">
					  <label for="gbComment">Comment:</label>
					  <textarea class="form-control" rows="5" name='gbComment' id="gbComment"></textarea>
					</div>
					  <br/>
					  <input class="btn btn-primary" type="submit" value="Submit" name="submitComment" id="submitComment" />
       <br/>
					  <!--<button type="submit" class="btn btn-default" name='submitComment' id='submitComment'>Submit</button>-->
					</form>



 <?php

    //on submission of form
    if(isset($_POST["submitComment"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $gbName = $_POST['gbName'];
        $gbComment = $_POST['gbComment'];
  
    
    //database query
        $query1 = "INSERT INTO guestbook (gbName, gbComment) VALUES (:gbName, :gbComment)";



      $statement1 = $db1->prepare($query1);

      
      $statement1->bindValue(':gbName', $gbName, PDO::PARAM_STR);
      $statement1->bindValue(':gbComment', $gbComment, PDO::PARAM_STR);

      $statement1->execute();

      $conn1=null;

      echo "<br/>Comment submitted for review.<br/>";

}
?>
<br/><br/>

					<h3>Guestbook comments</h3>
					<br/>
<div style='height:10px;background-color:purple;margin-bottom:10px;margin-top:10px;'> </div>

				<?php

				            $dbconn = new Dbconnect;
				            $db = $dbconn->getDb();
				            $query = "SELECT * FROM guestbook WHERE gbApprove='yes' ORDER BY id DESC";
				            $statement = $db->prepare($query);
				            $statement->execute();
				            $guestbookComments = $statement->fetchAll(PDO::FETCH_OBJ);

					foreach($guestbookComments as $g)
					{
						echo "<div>";
						echo "<div class='guestbookName' style='font-size:1.2em;font-weight:bold;'>" . $g->gbName . "</div>";
						echo "<div class='guestbookDate'>" . $g->gbDate . "</div><br/>";
						echo "<div class='guestbookComment'>" . $g->gbComment . "</div>";
						echo "<div style='height:10px;background-color:purple;margin-bottom:10px;margin-top:10px;'> </div>";
						echo "</div>";
					}
				?>
						
					
						

					</div>
					
				</div>
			</div>
		</section>


		<?php

		include 'footer.php';

		?>

