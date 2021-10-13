

<?php include "header.php"; ?> 
<?php
  $get_artist = "select * from artist" ;
  $run_artist = mysqli_query($conn,$get_artist);
  $num_artist = mysqli_num_rows($run_artist);
  $get_song = "select * from song" ;
  $run_song = mysqli_query($conn,$get_song);
  $num_song = mysqli_num_rows($run_song);
  $get_album = "select * from album" ;
  $run_album = mysqli_query($conn,$get_album);
  $num_album = mysqli_num_rows($run_album);
  $get_admin = "select * from table_admin" ;
  $run_admin = mysqli_query($conn,$get_admin);
  $num_admin = mysqli_num_rows($run_admin);
  $get_ads = "select * from ads" ;
  $run_ads = mysqli_query($conn,$get_ads);
  $num_ads = mysqli_num_rows($run_ads);

?>
		<div class="page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-pencil"></i></h4>
    <p class="card-text">Songs</p>
    <a href="all_song.php" class="card-link stretched-link"><?php echo"$num_song";?></a>

  </div>
</div>
				</div>
				<div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-globe"></i></h4>
    <p class="card-text">Albums</p>
    <a href="all_album.php" class="card-link stretched-link"><?php echo"$num_album";?></a>

  </div>
</div>
				</div>
				<div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-users"></i></h4>
    <p class="card-text">Artists</p>
    <a href="all_artist.php" class="card-link stretched-link"><?php echo"$num_artist";?></a>

  </div>
</div>
        </div>
        <div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-plane"></i></h4>
    <p class="card-text">Ads</p>
    <a href="all_ads.php" class="card-link stretched-link"><?php echo"$num_ads";?></a>

  </div>
</div>
				</div>
				<div class="col-lg-4">
				<div class="card">
  <div class="card-body">
    <h4 class="card-title"><i class="fa fa-user"></i></h4>
    <p class="card-text">Admins</p>
    <a href="adminlist.php" class="card-link stretched-link"><?php echo"$num_admin";?></a>

  </div>
</div>
				</div>
			</div>
		</div>
		</div>
        <?php include "footer.php"; ?>