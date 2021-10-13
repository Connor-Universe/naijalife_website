<?php



   // define variables and set to empty values
   $ads_name_err = $ads_link_err = $ads_image_err  = "";
   $ads_image = $ads_link = $ads_name   = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }
     $ads_name = $_POST['ads_name'];

     $ads_link = $_POST['ads_link'];
  
 
     function getCode(){
        return substr(sha1(time()), 0, 30);

     }
     $pic = getCode();

 
     $ads_image = $_FILES['ads_image']['name'];
     
     $ads_image1 =  $pic.$ads_image;
 
     $ads_image_tmp = $_FILES['ads_image']['tmp_name'];
        
     if (empty($_POST["ads_name"])) {
        $ads_name_err = "<span class='error'>ads name is required!</span>";
      }
      if (empty($_POST["ads_link"])) {
        $ads_link_err = "<span class='error'>Ads link is required!</span>";
      }
      if (empty($_FILES["ads_image"])) {
        $ads_image_err = "<span class='error'>Ads Image is required!</span>";
      }
     
    
      if ( $ads_name_err == "" and $ads_link_err == "" and $ads_image_err == ""){
        move_uploaded_file($ads_image_tmp,"../ads_pic/$ads_image1");
          
    $insert_ads = "INSERT INTO ads (ads_link,ads_img,ads_name) VALUES 
    ('$ads_link' ,  '$ads_image1','$ads_name')";

$run_ads = mysqli_query($conn,$insert_ads);
   
         }
         
     
   }
   
   
    
   
   
   
   
   
   ?>
?>