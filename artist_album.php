<!Doctype html>
<html>
 <head>
 <link rel="stylesheet" href="css\artist_album.css">
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
  <?php include('function/artist_album_function.php');?>
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
       <p class="sub-head"><a href="latest_song.php" class="latest"><?php echo"$artist_name";?> - <?php echo"$artist_nick";?></a></p>
      <div class="artist">
 
 

              <div class="song">
                    <img src="<?php echo"artist_pic/$artist_pic";?>" class="song">
                    <p class="first"><?php echo"$artist_name";?></p> 
                    <p class="second"><?php echo"$artist_nick";?></p>
                    <?php echo"$type";?>
                    
                      
                    </div>
 
       

      </div>
     </div>
     <!--End of section one-->  
     <!-- Start of section two -->
     <div class="section-two">
       <div class="container-fluid">
         <div class="row">
           <div class="col-lg-12">
           <p class="sub-head"><a href="latest_song.php" class="latest"><?php echo"$artist_name";?> Albums</a></p>
              <div class="container-fluid">
            
               
                 <div class="row">
                  <?php
                  $get_album = "select * from album where artist='$artist_name'";

                  $run_album = mysqli_query($conn,$get_album);
                  
                  while($row_album = mysqli_fetch_array($run_album)){
                      $album_name = $row_album['name'];
                      $album_id = $row_album['id'];
                  
                  
                      $album_pic = $row_album['picture'];
                      $album_artist = $row_album['artist'];                          
                      $album_type = $row_album['type'];
                      if($album_type == 'feature'){
                        $display = "<p class='latest'>Feature</p>";
                      }else{
                        $display="";
                      }
                      echo"
                      <div class='col-lg-4 col-6'>
                      <a href='album_song.php?album=$album_id'>
                     <div class='song'>
                     <img src='album_pic/$album_pic' class='song'>
                     <p class='first'>$album_name</p> 
                     <p class='second'>$album_artist</p>
                     $display
                     
                       
                     </div>
                     </a>
                     </div>";
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
   
     
 </body>
</html>