
<!DOCTYPE HTML>
<html>

<head>
<title>naijalifeoffiicial</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/post.css">
</head>
<body>

  <div class="top">
  <?php include "include/navbar.php"; ?>  
</div>
<?php include "function/song_function.php"; ?>
 
  <div class="section-three">
    <div class="text">
      <p><a href="index.php">Home</a> / <a href="all_artist.php"> <?php echo"$song_artist";?></a> / <a href="index.php"><?php echo"$song_album";?> </a> / <?php echo"$song_name";?> </p>
    </div>
  </div>

  <div class="section-two">
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-9">
              <div class="post">
                  <header>
                     <p><?php echo"$song_name";?></p>
                  </header>
                  <section class="first">
                      <p><?php echo"<i class='fa fa-calendar'></i> $song_date / <i class='fa fa-user'></i> by $song_artist /<a href='https://naijalifeofficial.com/song.php?id=$song_id#disqus_thread' class='connum'></a><i class='fa fa-comment'> </i>  comments " ;?></p>
                  </section>
       
                  <article>
                      <div class="img">
                      <img class="zoom-slow" src="<?php echo"song_pic/$song_pic";?>" alt="post image">
                      </div>
                  
                  
                  </article>
                  <section class="detail">

                           <?php echo"$song_detail";?>
                           <h3>Listen To The Song And Download! </h3>
                           <h6>(click the three dots near the song to download)</h6>
                           
                        
                         <audio src="<?php echo"songs/$song";?>" audio controls></audio>
                         
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <h3>Share To Your Friends And Family!</h3>
                <div class="addthis_inline_share_toolbox"></div>
            
                  </section>
                  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'https://naijalifeofficial.com/song.php<?php echo"?id=$song_id";?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo"song.php/id=$song_id";?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://naijalifeoffiicial.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              </div>     
                    
        </div>
        <div class="col-lg-3">
           <p class="first">SEARCH</p>
           <form action=""method="GET" role="search">
             <div class="input-group">
             <input type="text" placeholder="Search For Songs" name="search" class="form-control">
        <span class="input-group-btn"><button type="submit" class="site"><i class="fa fa-search"></i></button> </span>
        </div>
           </form>

           <p class="second">Latest Songs</p>
           <div class="container-fluid">
           <?php
                     
                    
                     $get_song = "select * from song  order by rand() DESC LIMIT 0,6" ;
                     $run_song = mysqli_query($conn,$get_song);
                     while($row_song = mysqli_fetch_array($run_song)){
                       $song_name = $row_song['song_name'];
                       $song_id = $row_song['id'];
                       $song_pic = $row_song['picture'];
                       $song_artist = $row_song['artist'];                          
                       $song_type = $row_song['song_type'];
                       $song_date = $row_song['song_date'];
                       $song_album = $row_song['album'];
                       echo " 
                       <div class='side'>
                       <div class='row'>
                       <div class='col-lg-6'>
                       <a href='song.php?id=$song_id'>
                       <img class='side-img' src='song_pic/$song_pic'>
                       </a>
                       </div>
                            <div class='col-lg-6'>
                            <p class='name'>
                                 $song_name
                            </p>
                            <p class='info'>
                            by $song_artist <i class='fa fa-comment'></i><a href='https://naijalifeofficial.com/song.php?id=$song_id#disqus_thread' class='connum'></a> 
                            </p>
                            </div>
                            </div>
                         </div>" ;
                    }
                    
                       
                       ?>
           </div>
        </div>
    
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="black" fill-opacity="1" d="M0,192L48,165.3C96,139,192,85,288,106.7C384,128,480,224,576,229.3C672,235,768,149,864,101.3C960,53,1056,43,1152,58.7C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </div>
 
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fb2013be343fc8f"></script>

<?php include "include/footer.php"; ?>
<script id="dsq-count-scr" src="//naijalifeoffiicial.disqus.com/count.js" async></script>
        </body>
</html>