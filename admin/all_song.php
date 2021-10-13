<?php include"header.php"; ?>

	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Song</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted a Song!")?>
                                            </div>
                                            <?php endif;?>
                        <div class="table1">
					   <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Details</th>
                                <th>Artist</th>
                                <th>Feature</th>
                                <th>Album</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            <?php
                             $get_song = "select * from song" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['song_name'];
                               $song_id = $row_song['id'];
                               $song_detail = $row_song['detail'];
                               $song_date = $row_song['song_date'];
                           
                               $song_artist = $row_song['artist'];
                           
                               $song_feature = $row_song['feature'];
                               $song_img = $row_song['picture'];
                               $song_mp3 = $row_song['song'];
                               $song_album = $row_song['album'];
                           
                               $song_type = $row_song['song_type'];
                               echo"
                               <tr>
                               <td>$song_id</td>
                               <td>$song_name</td>
                               <td>$song_date</td>
                               <td>$song_detail</td>
                               <td>$song_artist</td>
                               <td>$song_feature</td>
                               <td>$song_album</td>
                               <td>$song_type</td>
                               <td><a href='delete_song.php?id=$song_id&img=$song_img&song=$song_mp3' class='remove'>Remove</a></td>
                               </tr>
                               ";
                             }
                             
                            ?>
                        </table>
                        </div>
						</div>
						</div>
				</div>
			</div>
		</div>
		<?php include"footer.php"; ?>