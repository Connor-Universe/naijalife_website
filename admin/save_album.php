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
     $album_name = $_POST['album_name'];

     $album_detail = $_POST['album_detail'];
     $album_date = $_POST['album_date'];
 
     $artist_name = $_POST['artist_name'];
 
 
     $song_type = $_POST['album_type'];
 
     function getCode(){
        return substr(sha1(time()), 0, 30);

     }
     $pic = getCode();

 
     $album_pic = $_FILES['album_pic']['name'];
     
     $album_pic1 =  $pic.$album_pic;
 
     $album_pic_tmp = $_FILES['album_pic']['tmp_name'];
        
     if($_POST['artist_name'] == "select"){
         $artist_name_err = "<span class='error text-danger'>Please Choose an Artist</span>";
     }

    if($_POST['album_type'] == "select"){
        $song_type_err = "<span class='error text-danger'>Please Choose a Song type</span>";
    }
     
    
      if ( $song_type_err == "" and $artist_name_err == ""){
        move_uploaded_file($album_pic_tmp,"../album_pic/$album_pic1");
          
    $insert_album = "INSERT INTO album (name,artist,date,picture,details,type) VALUES 
    ('$album_name' , '$artist_name','$album_date','$album_pic1','$album_detail','$song_type')";

$run_album = mysqli_query($conn,$insert_album);
   
         }
         
     
   }
   
   
    
   
   
   
   
   
   ?>
?>