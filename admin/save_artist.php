<?php



   // define variables and set to empty values
   $song_name_err = $song_detail_err = $artist_name_err = $feature_err = $song_type_err= $album_err = "";
   $song_name = $song_detail = $artist_name = $feature= $album = $song_type  = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }

 
     $artist_name = $_POST['artist_name'];
     $artist_nickname = $_POST['artist_nickname'];
 
     $artist_type = $_POST['artist_type'];
 
     function getCode(){
        return substr(sha1(time()), 0, 30);

     }
     $pic = getCode();

 
     $song_pic = $_FILES['artist_pic']['name'];
     
     $song_pic1 =  $pic.$song_pic;
 
     $song_pic_tmp = $_FILES['artist_pic']['tmp_name'];

     
       
    if($_POST['artist_type'] == "select"){
        $song_type_err = "<span class='error text-danger'>Please Choose an Artist type</span>";
    }
     
    
      if ( $song_type_err == ""){
        move_uploaded_file($song_pic_tmp,"../artist_pic/$song_pic1");
        
          
        
    $insert_artist = "INSERT INTO artist (name,picture,nickname,type) VALUES 
    ('$artist_name' ,  '$song_pic1','$artist_nickname','$artist_type')";

$run_artist = mysqli_query($conn,$insert_artist);
   
         }
         
     
   }
   
   
    
   
   
   
   
   
   ?>
?>