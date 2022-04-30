<?php include("includes/session_starter.inc"); ?>
<?php
if(isset($_POST['delete_button'])){
	$post_id = $_POST['post_id'];
	perform_query2($mysql, "delete from journal where id={$post_id}");
}
$journals = perform_query($mysql, "select * from journal where poster_id = {$user_id} order by id desc", "all");
$journals_count = $journals[0];
?>
<!DOCTYPE html>
<html>
	<?php include("includes/header.inc"); ?>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-1"></div>
	    		<div class="col-sm-8">
	    			<?php if($journals_count == 0){?>
	    			<div class="card mt-2">
	    				<div class="card-header">
	    					<h3>You don't have journals</h3>
	    				</div>
	    				<div class="card-body">
	    					<span id="journal-text"><a href="create_new.php" class="text-info"><h2>Click here</a> to create new</h2></span>
	    				</div>
	    			</div>
	    			<?php 
	    			} 
	    			else { 
	    				while($journal = mysqli_fetch_array($journals[1])){
	    					$text = substr($journal['text'], 0, 480);
	    			?>
	    			<div class="card mt-2">
	    				<div class="card-header">
	    					<h6><?php echo $journal['date']; ?></h6>
	    					<span id="post-title"><?php echo $journal['title']; ?></span>
	    					<a href="create_new.php?id=<?php echo $journal['id']; ?>"> <img src="img/icons/edit-icon.png" height="30", width="30" class="rounded-circle float-right"/></a></div>
	    				<div class="card-body">
	    					<span id="journal-text" class="<?php 
	    						if(strlen($text) == 0){
	    							$style = "text-secondary";
	    						}
	    						echo $style; 
	    						?>">
	    						<?php 
	    						if(strlen($text) == 0){
	    							$text = "No text added...";
	    						}
	    						echo $text . "..."; 
	    						?></span>
	    				</div>
	    				<div class="card-footer">
	    					<form method="post" action="">
		    					<input type="hidden" name="post_id" value="<?php echo $journal['id'];?>"/>
		    					<a href="read.php?id=<?php echo $journal['id'];?>" name="login_button" class="btn float-right btn-info"><span id="login_button">Read</span></a>
		    					<button type="submit" name="delete_button" class="btn float-right btn-danger mr-2"><span id="login_button">Delete</span></button>
		    				</form>
	    				</div>
	    			</div>
	    			<?php } }?>
	    		</div>
	    	</div>
    	</div>
    </body>
</html>