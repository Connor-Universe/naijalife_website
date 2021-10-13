<?php include"header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Album</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted an Album!")?>
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
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            <?php
                             $get_song = "select * from album" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['name'];
                               $song_id = $row_song['id'];
                               $artist_name = $row_song['artist'];
                               $song_date = $row_song['date'];
                               $album_detail = $row_song['details'];
                               $album_type = $row_song['type'];
                               $album_img = $row_song['picture'];
                               echo"
                               <tr>
                               <td>$song_id</td>
                               <td>$song_name</td>
                               <td>$song_date</td>
                               <td>$album_detail</td>
                               <td>$artist_name</td>
                               <td>$album_type</td>
                               <td><a href='delete_album.php?id=$song_id&img=$album_img class='remove'>Remove</a></td>
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