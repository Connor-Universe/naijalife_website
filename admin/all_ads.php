<?php include"header.php"; ?>

	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">All Ads</h3>
					 <div class="xs tabls">
					 <div class="panel-body1">
					 <?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully deleted an Ad!")?>
                                            </div>
                                            <?php endif;?>
                        <div class="table1">
					   <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                            <?php
                             $get_ads = "select * from ads" ;
                             $run_ads = mysqli_query($conn,$get_ads);
                             while($row_ads = mysqli_fetch_array($run_ads)){
                               $ads_name = $row_ads['ads_name'];
                               $ads_id = $row_ads['ads_id'];
                               $ads_link = $row_ads['ads_link'];
                               $ads_img = $row_ads['ads_img'];
                          
                               echo"
                               <tr>
                               <td>$ads_id</td>
                               <td>$ads_name</td>
                               <td>$ads_link</td>
                               <td><a href='delete_ads.php?id=$ads_id&img=$ads_img' class='remove'>Remove</a></td>
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