<?php include "header.php"; ?>
<?php include "save_artist.php";?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Artist</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Artist Details
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Artist saved Successfully!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
											
												<label>Artist Name : </label>
												<input type="text" name="artist_name" class="form-control1 control3" placeholder="Artist Name" >
												
			
							<label>Add Artist Picture</label>
							<input type="file" name="artist_pic" class="form-control1 control3">

                            <label>Artist Nickname : </label>
												<input type="text" name="artist_nickname" class="form-control1 control3" placeholder="Artist Nickname" >
												
							<label>Artist type</label>
							<?php echo"$song_type_err"; ?>
							<select name="artist_type" id="artist_type" class="form-control1 control3">
								<option value="select">-Select-</option>
								<option value="top">Top</option>
                                <option value="feature">Feature</option>
                                <option value="regular">Regular</option>
							</select>
							
											<hr>
											<input type="submit" value="Add Artist">
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
		<?php include "footer.php"; ?>