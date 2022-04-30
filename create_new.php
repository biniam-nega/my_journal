<?php include("includes/session_starter.inc"); ?>
<?php
if(isset($_POST['save_button'])){
	include("validate_save_post.php");
}
if(isset($_POST['edit_button'])){
	include("validate_edit_post.php");
}
$edit = false;
if(isset($_GET['id'])){
	$edit = true;
	$id = mysqli_real_escape_string($mysql, $_GET['id']);
	$post = mysqli_fetch_array(perform_query($mysql, "select * from journal where id={$id}", "result"));
}
?>
<!DOCTYPE html>
<html>
<?php include("includes/header.inc") ?>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-1"></div>
	    		<div class="col-sm-8">
	    			<?php if(!$edit){ ?>
	    			<form method="post" action="">
		    			<div class="card mt-2">
		    				<div class="card-header">
		    					<h6>
		    						<?php 
		    						$date = date('jS F');
		    						echo $date;
		    						?>
		    					</h6>
		    					<input type="hidden" value="<?php echo $date; ?>" name="date"/>
		    					<span id="post-title"><input type="text" name="title" placeholder="Enter the title..." class="form-control"></span>
		    				</div>
		    				<div class="card-body">
		    					<span id="journal-text"><textarea name="text" class="form-control" placeholder="Place your journal..." style="height: 500px"></textarea></span>
		    				</div>
		    				<div class="card-footer">
		    					<button type="submit" name="save_button" class="btn float-right btn-info"><span id="login_button">Save</span></button>
		    					<button type="reset" name="reset" class="btn float-right btn-danger mr-2"><span id="login_button">Reset</span></button>
		    				</div>
		    			</div>
		    		</form>
		    		<?php } else{ ?>
		    		<form method="post" action="">
		    			<div class="card mt-2">
		    				<div class="card-header">
		    					<h6>
		    						<?php 
		    						$date = date('jS F');
		    						echo $date;
		    						?>
		    					</h6>
		    					<input type="hidden" value="<?php echo $date; ?>" name="date"/>
		    					<span id="post-title"><input type="text" name="title" placeholder="Enter the title..." class="form-control" value="<?php echo $post['title']?>"></span>
		    				</div>
		    				<div class="card-body">
		    					<span id="journal-text"><textarea name="text" class="form-control" placeholder="Place your journal..." style="height: 500px"><?php echo $post['text'];?></textarea></span>
		    				</div>
		    				<div class="card-footer"> 
		    					<input type="hidden" name="post_id" value="<?php echo $post['id']; ?>"/>
		    					<button type="submit" name="edit_button" class="btn float-right btn-info"><span id="login_button">Save</span></button>
		    				</div>
		    			</div>
		    		</form>
		    		<?php } ?>
	    		</div>
	    	</div>
    	</div>
    </body>
</html>