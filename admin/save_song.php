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
     $song_name = $_POST['song_name'];

     $song_detail = $_POST['song_detail'];
     $song_date = $_POST['song_date'];
 
     $artist_name = $_POST['artist_name'];
 
     $feature = $_POST['feature'];
 
     $album = $_POST['album'];
 
     $song_type = $_POST['song_type'];
 
     function getCode(){
        return substr(sha1(time()), 0, 30);

     }
     $pic = getCode();
     $song = $_FILES['song']['name'];
 
     $song_tmp = $_FILES['song']['tmp_name'];
 
     $song_pic = $_FILES['song_pic']['name'];
     
     $song_pic1 =  $pic.$song_pic;
 
     $song_pic_tmp = $_FILES['song_pic']['tmp_name'];
        
     if($_POST['artist_name'] == "select"){
         $artist_name_err = "<span class='error text-danger'>Please Choose an Artist</span>";
     }

     if($_POST['feature'] == "select"){
        $feature = "None";
    }
   
    if($_POST['album'] == "select"){
        $album_err = "<span class='error text-danger'>Please Choose an Artist</span>";
    }
     
       
    if($_POST['song_type'] == "select"){
        $song_type_err = "<span class='error text-danger'>Please Choose a Song type</span>";
    }
     
    
      if ( $song_type_err == "" and  $album_err == "" and $artist_name_err == ""){
        move_uploaded_file($song_pic_tmp,"../song_pic/$song_pic1");
        move_uploaded_file($song_tmp,"../songs/$song");
          
        
    $insert_song = "INSERT INTO song (song_name,artist,song_date,feature,album,picture,song,detail,song_type) VALUES 
    ('$song_name' ,  '$artist_name','$song_date','$feature','$album','$song_pic1','$song','$song_detail','$song_type')";

$run_song = mysqli_query($conn,$insert_song);
   
         }
         
     
   }
   
   
    
   
   
   
   
   
   ?>
?>