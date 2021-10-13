<!Doctype html>
<html>
 <head>
 <link rel="stylesheet" href="css\index.css">
 <title>NaijaLifeOffical</title> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="icon" href="img/favicon.png">
            <link rel="stylesheet" href="css/bootstrap.css">
     
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/navbar.css">
            <link rel="stylesheet" href="css/footer.css">
 </head>
 <body>
  <div class="nav">
    <?php include('include/navbar.php');?>
    <?php 
     $get_ads = "select * from ads";
     $run_ads = mysqli_query($conn,$get_ads);
     $row_ads = mysqli_fetch_array($run_ads);
     $ads_name = $row_ads['ads_name'];
     $ads_link = $row_ads['ads_link'];
     $ads_img = $row_ads['ads_img'];
    ?>
  </div>
  <div class="main1">


     <div class="section-one">
     <?php
                             $get_song = "select * from song order by rand() DESC LIMIT 0,10" ;
                             $run_song = mysqli_query($conn,$get_song);
                             $row_song = mysqli_fetch_array($run_song);
                               $song_name = $row_song['song_name'];
                               $song_id = $row_song['id'];
                               $song_detail = $row_song['detail'];
                               $song_date = $row_song['song_date'];
                               $song_pic = $row_song['picture'];
                               $song_artist = $row_song['artist'];                          
                               $song_type = $row_song['song_type'];
                               echo"
                               <a href='song.php?id=$song_id'><img src='song_pic/$song_pic' alt=''></a>
                               <div class='section-text'>
                                 <p class='first'>Get Latests Songs</p>
                                 <p class='second'>$song_name</p>
                                 <p class='third'>$song_artist</p>
                               </div>
                               ";
                             
                            ?>
     </div>
     <!--End of section one-->  
     <div class="naija">
         <p class="title">NaijaLifeOfficial.com</p>
 
         <div class="icon-bar">
         <p class="icon"><a href="https://www.facebook.com/<?php echo"$facebook";?>" class="facebook"><i class="fa fa-facebook"></i></a>
           <a href="https://twitter.com/<?php echo"$twiiter";?>" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/<?php echo"$instagram";?>" class="google"><i class="fa fa-instagram"></i></a>
         <a href="https://wa.me/<?php echo"$whatsapp";?>" class="linkedin"><i class="fa fa-whatsapp"></i></a></p>
  
</div>

<p class="mark">
<marquee behavior="" direction="">Follow Us On Our Social Media Handles To Get More Updates From Us</marquee>
</p>
       </div>
     <!-- Start of section two -->
     <div class="section-two">
     
       <div class="container-fluid">
         <div class="row">
           <div class="col-lg-8">
          
              <div class="content">

             
                 <!-- Nav pills -->
<ul class="nav nav-pills justify-content-center">
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#home">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#menu1">Latest</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#menu2">Featured</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane fade container " id="home">
  <?php
                             $get_album = "select * from album order by rand() DESC LIMIT 0,10" ;
                             $run_album = mysqli_query($conn,$get_album);
                             while($row_album = mysqli_fetch_array($run_album)){
                               $album_name = $row_album['name'];
                               $album_id = $row_album['id'];
                               $album_detail = $row_album['details'];
                               $album_date = $row_album['date'];
                               $album_pic = $row_album['picture'];
                               $album_artist = $row_album['artist'];                          
                               $album_type = $row_album['type'];
                               echo"
                               <div class='stuff'>
                               <div class='container-fluid'>
                               <a href='album_song.php?album=$album_id'>    
                               <div class='row'>
                                   <div class='col-4'><img src='album_pic/$album_pic'></div>
                                   <div class='col-8'>
                                     <h4>$album_artist</h4>
                                     <div class='mets'>
                                       <span class='latest'>Latest</span>
                                       <br>
                                       <span class='date'>$album_date</span>
                         
                                     </div>
                                     <h5>$album_name</h5>  
                                   </div>
                                 </div>
                               </div>
                               </a>
                             </div>
                               ";
                             }
                             
                            ?>

  
  
  </div>

  <div class="tab-pane container active" id="menu1">
  <?php
                             $get_song = "select * from song order by rand() DESC LIMIT 0,10" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['song_name'];
                               $song_id = $row_song['id'];
                               $song_detail = $row_song['detail'];
                               $song_date = $row_song['song_date'];
                               $song_pic = $row_song['picture'];
                               $song_artist = $row_song['artist'];                          
                               $song_type = $row_song['song_type'];
                               echo"
                               <div class='stuff'>
                               <div class='container-fluid'>
                               <a href='song.php?id=$song_id'>    <div class='row'>
                                   <div class='col-4'><img src='song_pic/$song_pic'></div>
                                   <div class='col-8'>
                                     <h4>$song_artist</h4>
                                     <div class='mets'>
                                       <span class='latest'>Latest</span>
                                       <br>
                                       <span class='date'>$song_date</span>
                         
                                     </div>
                                     <h5>$song_name</h5>  
                                   </div>
                                 </div>
                               </div>
                               </a>
                             </div>
                               ";
                             }
                             
                            ?>

   

  </div>
  <div class="tab-pane container fade" id="menu2">
  <?php
                             $get_song = "select * from song where song_type = 'feature' order by rand() DESC LIMIT 0,10" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['song_name'];
                               $song_id = $row_song['id'];
                               $song_detail = $row_song['detail'];
                               $song_date = $row_song['song_date'];
                               $song_pic = $row_song['picture'];
                               $song_artist = $row_song['artist'];                          
                               $song_type = $row_song['song_type'];
                               echo"
                               <div class='stuff'>
                               <div class='container-fluid'>
                               <a href='song.php?song=$song_id'>    
                               <div class='row'>
                                   <div class='col-4'><img src='song_pic/$song_pic'></div>
                                   <div class='col-8'>
                                     <h4>$song_artist</h4>
                                     <div class='mets'>
                                       <span class='latest'>Featured</span>
                                       <br>
                                       <span class='date'>$song_date</span>
                         
                                     </div>
                                     <h5>$song_name</h5>  
                                   </div>
                                 </div>
                               </div>
                               </a>
                             </div>
                               ";
                             }
                             
                            ?>

 
                 
                 
              </div>
           </div>
        </div>
        <div class="ads1">
        <?php 
     $get_ads = "select * from ads order by ads_id DESC LIMIT 0,1 ";
     $run_ads = mysqli_query($conn,$get_ads);
     while($row_ads = mysqli_fetch_array($run_ads)){
     $ads_name = $row_ads['ads_name'];
     $ads_link = $row_ads['ads_link'];
     $ads_img = $row_ads['ads_img'];
      echo"
      <a href='$ads_link'><img src='ads_pic/$ads_img' class='ads'></a>
      ";
    }
    ?>
        </div>
              <p class="sub-head"><a href="top_artist.php" class="latest">Top Artists</a></p>
              <div class="container-fluid">
              <?php
                             $get_artist = "select * from artist where type = 'top' order by rand() DESC LIMIT 0,1" ;
                             $run_artist = mysqli_query($conn,$get_artist);
                             $row_artist = mysqli_fetch_array($run_artist);
                               $artist_name = $row_artist['name'];
                               $artist_id = $row_artist['id'];
                               $artist_pic = $row_artist['picture'];
                               $artist_nick = $row_artist['nickname'];                          
                               $artist_type = $row_artist['type'];
                               echo"
                               <div class='row'>
                               <div class='col-lg-12'>
                               <div class='song-big'>
                               <a href='artist_album.php?artist=$artist_id'> <img src='artist_pic/$artist_pic' alt='song' class='songs'></a>
                                    <p class='latest'>Top</p>                                 
                                    <div class='meta'>
                                    <p class='first'>$artist_name</p>
                                    <p class='second'>$artist_nick</p>
            
                                    </div>
                                 
                                  </div>
                  
            
                               </div>
                             </div>
                               ";
                             
                             
                            ?>

            
                 <div class="row">
                 <?php
                             $get_artist = "select * from artist where type = 'top' order by rand() DESC LIMIT 1,3" ;
                             $run_artist = mysqli_query($conn,$get_artist);
                            while($row_artist = mysqli_fetch_array($run_artist)){
                               $artist_name = $row_artist['name'];
                               $artist_id = $row_artist['id'];
                               $artist_pic = $row_artist['picture'];
                               $artist_nick = $row_artist['nickname'];                          
                               $artist_type = $row_artist['type'];
                               echo"
                               <div class='col-6'>
                               <div class='song'>
                               <a href='artist_album.php?artist=$artist_id'> <img src='artist_pic/$artist_pic' alt='song' class='songs'></a>
                               <p class='first'>$artist_name</p> 
                               <p class='second'>$artist_nick</p>
                               <p class='latest'>Top</p>
                               
                                 
                               </div>
                               </div>
                               ";
                            }
                             
                            ?>

                
              </div>
              <div class="ads2">
              <?php 
     $get_ads = "select * from ads order by ads_id DESC LIMIT 1,2 ";
     $run_ads = mysqli_query($conn,$get_ads);
     while($row_ads = mysqli_fetch_array($run_ads)){
     $ads_name = $row_ads['ads_name'];
     $ads_link = $row_ads['ads_link'];
     $ads_img = $row_ads['ads_img'];
      echo"
      <a href='$ads_link'><img src='ads_pic/$ads_img'></a>
      ";
    }
    ?>
        </div>
              <p class="sub-head"><a href="latest_album.php" class="latest">Featured Album </a></p>
              <div class="container-fluid">
                 <div class="row">
                 <?php
                             $get_album = "select * from album where type = 'feature' order by rand() DESC LIMIT 0,1" ;
                             $run_album = mysqli_query($conn,$get_album);
                             $row_album = mysqli_fetch_array($run_album);
                               $album_name = $row_album['name'];
                               $album_id = $row_album['id'];
                               $album_pic = $row_album['picture'];
                               $album_artist = $row_album['artist'];                          
                               $album_type = $row_album['type'];
                               $album_date = $row_album['date'];
                               echo"
                     
                               <div class='col-lg-12'>
                               <div class='song-big'>
                                   <a href='album_song.php?album=$album_id'> <img src='album_pic/$album_pic' alt='song' class='songs'></a>
                                    <p class='latest'>Featured</p>          
                                    <p class='comment'>$album_date </p>                       
                                    <div class='meta'>
                                    <p class='first'>$album_name</p>
                                    <p class='second'>$album_artist</p>
            
                                    </div>
                                 
                                  </div>
                  
            
                               </div>
           
                               ";
                             
                             
                            ?>
                 <div class="row">

                 <?php
                             $get_album = "select * from album where type = 'feature' order by rand() DESC LIMIT 1,3" ;
                             $run_album = mysqli_query($conn,$get_album);
                            while($row_album = mysqli_fetch_array($run_album)){
                               $album_name = $row_album['name'];
                               $album_id = $row_album['id'];
                               $album_pic = $row_album['picture'];
                               $album_artist = $row_album['artist'];                          
                               $album_type = $row_album['type'];
                               $album_date = $row_album['date'];
                               echo"
                     
                               <div class='col-6'>
                               <div class='song'>
                                   <a href='album_song.php?album=$album_id> <img src='album_pic/$album_pic' alt='song' class='songs'></a>
                                    <p class='latest'>Featured</p>          
                                    <p class='comment'>$album_date </p>                       
                                    <div class='meta'>
                                    <p class='first'>$album_name</p>
                                    <p class='second'>$album_artist</p>
            
                                    </div>
                                 
                                  </div>
                  
            
                               </div>
           
                               ";
                            }
                             
                             
                            ?>

                 </div>
              </div>
           </div>
           </div>
           </div>
           <div class="col-lg-4 more">
           <p class="sub-head2"><a href="all_song.php" class="latest">More Songs </a></p>
           <div class="container-fluid">
           <?php
                             $get_song = "select * from song where song_type = 'regular' order by rand() DESC LIMIT 0,4" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['song_name'];
                               $song_id = $row_song['id'];
                               $song_pic = $row_song['picture'];
                               $song_artist = $row_song['artist'];                          
                               $song_type = $row_song['song_type'];
                               $song_date = $row_song['song_date'];
                               $song_album = $row_song['album'];
                               echo"
                               <div class='row'>
                      
                               <div class='col-6'>
                               <a href='song.php?id=$song_id'>
                            <img src='song_pic/$song_pic'>
                            </a>
                               </div>
                               <div class='col-6'>
                                 <p class='name'>
                                   $song_name
                                 </p>
                                 <p class='detail'>
                                   $song_album
                                 </p>
                                 <p class='info'>
                                 $song_artist <i class='fa fa-comment'></i><a href='https://naijalifeofficial.com/song.php?id=$song_id#disqus_thread' class='comnum'></a>
                                 </p>
                               </div>
       
                             </div>
                         
           
                               ";
                             }
                             
                             
                            ?>
          
           </div>
      
           </div>
         </div>
       </div>
       <div class="ads3">
       <?php 
     $get_ads = "select * from ads order by ads_id DESC LIMIT 2,3 ";
     $run_ads = mysqli_query($conn,$get_ads);
     while($row_ads = mysqli_fetch_array($run_ads)){
     $ads_name = $row_ads['ads_name'];
     $ads_link = $row_ads['ads_link'];
     $ads_img = $row_ads['ads_img'];
      echo"
      <a href='$ads_link'><img src='ads_pic/$ads_img'></a>
      ";
    }
    ?>
        </div>
     <div class="container-fluid feature">
     <p class="sub-head3">Featured Songs</p>
       <div class="row">
       <?php
                             $get_song = "select * from song where song_type = 'feature' order by rand() DESC LIMIT 0,6" ;
                             $run_song = mysqli_query($conn,$get_song);
                             while($row_song = mysqli_fetch_array($run_song)){
                               $song_name = $row_song['song_name'];
                               $song_id = $row_song['id'];
                               $song_pic = $row_song['picture'];
                               $song_artist = $row_song['artist'];                          
                               $song_type = $row_song['song_type'];
                               $song_date = $row_song['song_date'];
                               $song_album = $row_song['album'];
                               echo"
                               <div class='col-lg-3 col-6'>
                               <div class='song3'>
                              <a href='song.php?id=$song_id'><img src='song_pic/$song_pic' class='songs'></a>
                                            <p class='latest'>Featured</p>
                                            <p class='comment'><a href='https://naijalifeofficial.com/song.php?id=$song_id#disqus_thread' class='comnum'></a> <i class='fa fa-comment'></i> </p>
                                         
                                            <div class='meta'>
                                            <p class='first'>$song_name</p>
                                            <p class='second'>$song_artist</p>
                               </div>
                             </div>
                             </div>
           
                               ";
                             }
                             
                             
                            ?>
       </div>


     </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="black" fill-opacity="1" d="M0,192L48,165.3C96,139,192,85,288,106.7C384,128,480,224,576,229.3C672,235,768,149,864,101.3C960,53,1056,43,1152,58.7C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
     </div>
     
     
    
   
     
  </div>
  
  
        
     <!--End of section two -->
    
   
    <?php include('include/footer.php')?>
   
    <script id="dsq-count-scr" src="//naijalifeoffiicial.disqus.com/count.js" async></script>
 </body>
</html>