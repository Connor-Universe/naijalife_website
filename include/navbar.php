<?php
    include "connect.php";
    $get_info = "select * from settings";
    $run_info = mysqli_query($conn,$get_info);
    $row_info = mysqli_fetch_array($run_info);
    $get_song = "select * from song order by rand() DESC LIMIT 0,1";
    $run_song = mysqli_query($conn,$get_song);
    $row_song = mysqli_fetch_array($run_song);
    $get_album = "select * from album order by rand() DESC LIMIT 0,1";
$run_album = mysqli_query($conn,$get_album);
$row_album = mysqli_fetch_array($run_album);
$get_artist = "select * from artist order by rand() DESC LIMIT 0,1";
$run_artist = mysqli_query($conn,$get_artist);
$row_artist = mysqli_fetch_array($run_artist);


    $song_pic = $row_song['picture'];
    $artist_pic = $row_artist['picture'];
    $album_pic = $row_album['picture'];

    $facebook = $row_info['facebook'];
    $email = $row_info['email'];
    $twitter = $row_info['twitter'];
    $instagram = $row_info['linkedin'];
    $whatsapp = $row_info['phone'];
  ?>
</div>
<div class="navbar-one">
  <a href="index.php" class="logo flex-item item-one">Naijalifeofficial</a>
  <a href="contact.php" class="contact flex-item item-two">Contact Us</a>
</div>
<nav class="navbar navbar-expand-md  navbar-two">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class="fa fa-align-center"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
    <ul class="navbar-nav">
    
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Songs
      </a>
      <div class="dropdown-menu">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6">
                
        <a class="dropdown-item" href="all_song.php">All Songs</a>
        <a class="dropdown-item" href="feature_song.php">Featured Songs</a>
                  </div>
                  <div class="col-lg-6">
                        <img src="<?php echo"song_pic/$song_pic";?>" alt="">
                  </div>
              </div>
          </div>
    
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Artists
      </a>
      <div class="dropdown-menu">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6">
                  <a class="dropdown-item" href="top_artist.php">Top Artists</a>
        <a class="dropdown-item" href="all_artist.php">All Artists</a>
        <a class="dropdown-item" href="feature_artist.php">Featured Artists</a>
                  </div>
                  <div class="col-lg-6">
                  <img src="<?php echo"artist_pic/$artist_pic";?>" alt="">
                  </div>
              </div>
          </div>
      
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Albums
      </a>
      <div class="dropdown-menu">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6">
            
        <a class="dropdown-item" href="all_album.php">All Albums</a>
        <a class="dropdown-item" href="feature_album.php">Featured Albums</a>
                  </div>
                  <div class="col-lg-6">
                  <img src="<?php echo"album_pic/$album_pic";?>" alt="">
                  </div>
              </div>
          </div>
      
      </div>
    </li>
    <li class="nav-item">
        <a href="contact.php" class="nav-link contact2">Contact</a>
    </li>
    </ul>
  </div>
</nav>
