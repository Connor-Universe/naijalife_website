<?php include "header.php"; ?>
<?php include "save_ads.php";?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Ads</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Ads Details
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Ad saved Successfully!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
											
												<label>Ads Name : </label>
                                                <?php echo"$ads_name_err";?>
												<input type="text" name="ads_name" class="form-control1 control3" placeholder="Ads Name" required>
												<label>Ads Link : </label>
                                                <?php echo"$ads_link_err";?>
                                                <input type="text" name="ads_link" class="form-control1 control3" placeholder="Ads Link" required>
											    
			
							<label>Ads Image</label>
                            <?php echo"$ads_image_err";?>
							<input type="file" name="ads_image" class="form-control1 control3" required>

							
											<hr>
											<input type="submit" value="Add Ads">
										</form>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
		<?php include "footer.php"; ?>