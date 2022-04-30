<?php include("includes/session_starter.inc"); ?>
<?php
if(isset($_POST['delete_button'])){
	$post_id = $_POST['post_id'];
	perform_query2($mysql, "delete from journal where id={$post_id}");
}
$post_id = mysqli_real_escape_string($mysql, $_GET['id']);
$post_result = perform_query($mysql, "select * from journal where id = {$post_id}", "result");
$post = mysqli_fetch_array($post_result);
?>
<!DOCTYPE html>
<html>
<?php include("includes/header.inc") ?>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-1"></div>
	    		<div class="col-sm-8">
	    			<form method="post" action="">
		    			<div class="card mt-2">
		    				<div class="card-header">
		    					<h6>
		    						<?php 
		    						echo $post['date'];
		    						?>
		    					</h6>
		    					<span id="post-title"><?php echo $post['title'];?></span>
		    				</div>
		    				<div class="card-body">
		    					<span id="journal-text"><?php echo $post['text'];?></span>
		    				</div>
		    				<div class="card-footer">
		    					<form method="post" action="">
		    						<input type="hidden" name="post_id" value="<?php echo $post['id'];?>"/>
			    					<a href="create_new.php?id=<?php echo $post['id'];?>" name="login_button" class="btn float-right btn-info"><span id="login_button">Edit</span></a>
			    					<button type="reset" name="reset" class="btn float-right btn-danger mr-2"><span id="login_button">Delete</span></button>
			    				</form>
		    				</div>
		    			</div>
		    		</form>
	    		</div>
	    	</div>
    	</div>
    </body>
</html>