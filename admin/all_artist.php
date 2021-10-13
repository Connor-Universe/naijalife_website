<?php include"header.php"; ?>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Artist</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted an Artist!")?>
                                            </div>
                                            <?php endif;?>
                        <div class="table1">
					   <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
								<th>Nickname</th>
								<th>Action</th>

                            </tr>
                            <?php
                             $get_song = "select * from artist" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['name'];
                               $song_id = $row_song['id'];
                               $artist_img = $row_song['picture'];
                               $song_date = $row_song['nickname'];
                               echo"
                               <tr>
                               <td>$song_id</td>
                               <td>$song_name</td>
                               <td>$song_date</td>
                               <td><a href='delete_artist.php?id=$song_id&img=$artist_img' class='remove'>Remove</a></td>
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