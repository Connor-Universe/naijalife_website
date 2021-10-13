<?php include "header.php"; ?>
<?php include "save_song.php";?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Songs</h3>
					<div class="xs">
						
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Song Details
									</div>
									 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Song saved Successfully!")?>
                                            </div>
                                            <?php endif;?>
									<div class="panel-body panel-body-com-m">
										
										<form class="com-mail" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
											
												<label>Song Name : </label>
												<input type="text" name="song_name" class="form-control1 control3" placeholder="Song Title" required>
												<label>Song Detail : </label>
												<textarea rows="6" cols="20" id="body" name="song_detail" class="form-control1 control2"required></textarea>
												 <script>
                CKEDITOR.replace( 'body' );
            </script>
			
							<label>Add Song Cover</label>
							<input type="file" name="song_pic" class="form-control1 control3" required>

							<label>Add Song Date</label>
							<input type="date" name="song_date" class="form-control1 control3" required>
							<label>Add Artist</label>
							<?php echo"$artist_name_err"; ?>
							<select name="artist_name" id="artist" class="form-control1 control3">
								<option value="select" selected>-Select-</option>
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
							</select>
							<label> Add Featured Artist(optional)</label>
							<select name="feature" id="feature" class="form-control1 control3">
							<option value="select" selected>-Select-</option>
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
							</select>
							<label> Add Album</label>
							<?php echo"$album_err"; ?>
							<select name="album" id="album" class="form-control1 control3">
							<option value="select" selected>-Select-</option>
						
							<?php
                             $get_song = "select * from album" ;
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
							</select>
							<label>Add Song file</label>
							<input type="file" name="song" class="form-control1 control3" required>
							
							<label>Song type</label>
							<?php echo"$song_type_err"; ?>
							<select name="song_type" id="album" class="form-control1 control3">
								<option value="select">-Select-</option>
								<option value="feature">Feature</option>
								<option value="regular">Regular</option>
							</select>
							
											<hr>
											<input type="submit" value="Add Song">
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