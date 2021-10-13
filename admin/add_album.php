<?php include "header.php"; ?>
<?php include "save_album.php";?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Album</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Album Details
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Album saved Successfully!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
											
												<label>Album Name : </label>
												<input type="text" name="album_name" class="form-control1 control3" placeholder="Album Title" required >
												<label>Album Detail : </label>
												<textarea rows="6" cols="20" id="body" name="album_detail" class="form-control1 control2" required></textarea>
												 <script>
                CKEDITOR.replace( 'body' );
            </script>
			
							<label>Add Album Cover</label>
							<input type="file" name="album_pic" class="form-control1 control3" required>

							<label>Add Album Date</label>
							<input type="date" name="album_date" class="form-control1 control3" required>
							<label>Add Artist</label>
							<?php echo"$artist_name_err"; ?>
							<select name="artist_name" id="artist" class="form-control1 control3">
								<option value="select"selected>-Select-</option>
								<?php
                             $get_song = "select * from artist" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['name'];
                               $song_id = $row_song['id'];
                       
                               $song_date = $row_song['nickname'];
                               echo"
							   <option value='$song_name'>$song_name</option>
                               ";
                             }
                             
                            ?>
								<?php
								
								?>
							</select>
						
							<label>Album type</label>
							<?php echo"$song_type_err"; ?>
							<select name="album_type" id="album" class="form-control1 control3">
								<option value="select">-Select-</option>
								<option value="feature">Feature</option>
								<option value="regular">Regular</option>
							</select>
							
											<hr>
											<input type="submit" value="Add Album">
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