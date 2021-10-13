<!Doctype html>
<html>
 <head>
 <link rel="stylesheet" href="css\all_song.css">
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
  </div>
  <div class="main1">
    
     <div class="section-one">
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
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
              <form action=""method="GET" role="search" class='first'>
             <div class="input-group">
             <input type="text" placeholder="Search All Artist" name="search" class="form-control">
        <span class="input-group-btn"><button type="submit" class="site"><i class="fa fa-search"></i></button> </span>
        </div>
           </form>
              </div>
              <div class="col-lg-6">
              <form action=""method="GET" role="search" class='second'>
             <div class="input-group">
             <select name="category" id="category" class="form-control">
                 <option value="new">Newest - Oldest</option>
                 <option value="old">Oldest - Newest</option>
                 <option value="most"> Most Comments</option>
                 <option value="least">Least Comments</option>
             </select>
        <span class="input-group-btn"><button type="submit" class="site"><i class="fa fa-search"></i></button> </span>
        </div>
           </form>
              </div>
          </div>
      </div>
     </div>
     <!--End of section one-->  
     <!-- Start of section two -->
     <div class="section-two">
       <div class="container-fluid">
         <div class="row">
           <div class="col-lg-9">
           <p class="sub-head"><a href="all_song.php" class="latest">All Songs</a></p>
              <div class="container-fluid">
            
               
                 <div class="row">
                 <?php
                             $get_song = "select * from song order by rand() DESC LIMIT 0,15" ;
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
                               <div class='col-lg-3 col-6'>
                    <div class='song'>
                    <a href='song.php?id=$song_id'><img src='song_pic/$song_pic' class='song'></a>
                    <p class='first'>$song_name</p> 
                    <p class='second'>$song_artist</p>
                    <p class='latest'>Latest</p>
                        <p class='comment'><a href='https://naijalifeofficial.com/song.php#disqus_thread' class='comnum'></a> <i class='fa fa-comment'></i> </p>
                      
                    </div>
                    </div>
                               ";
                             }
                             
                            ?>


                 </div>
              </div>
           </div>
           <div class="col-lg-3">
           <p class="sub-head2"><a href="all_artist.php" class="latest">More Artists </a></p>
           <div class="container-fluid">
             <div class="row">
             <?php
                             $get_artist = "select * from artist order by rand() DESC LIMIT 0,4" ;
                             $run_artist = mysqli_query($conn,$get_artist);
                             while($row_artist = mysqli_fetch_array($run_artist)){
                               $artist_name = $row_artist['name'];
                               $artist_id = $row_artist['id'];
                               $artist_pic = $row_artist['picture'];
                               $artist_nick = $row_artist['nickname'];                          
                               $artist_type = $row_artist['type'];
                               echo"
                       
                               <div class='col-6'>
                               <a href='artist_album.php?artist=$artist_id'>  <img src='artist_pic/$artist_pic'></a>
                               </div>
                               <div class='col-6'>
                                 <p class='name'>
                                   $artist_name
                                 </p>
                                 <p class='detail'>
                                   $artist_nick
                                 </p>
                                 <p class='info'>
                                
                                 </p>
                               </div>
                
                         
           
                               ";
                             }
                             
                             
                            ?>
             
             </div>
           </div>

           </div>
         </div>
       </div>
      
   
     
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="black" fill-opacity="1" d="M0,192L48,165.3C96,139,192,85,288,106.7C384,128,480,224,576,229.3C672,235,768,149,864,101.3C960,53,1056,43,1152,58.7C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
   
     
  </div>
  
  
        
     <!--End of section two -->
    
   
    <?php include('include/footer.php')?>
   
    <script id="dsq-count-scr" src="//naijalifeoffiicial.disqus.com/count.js" async></script>
 </body>
</html>