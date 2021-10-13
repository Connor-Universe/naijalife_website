<?php


if(isset($_GET['album'])){
    $album_id = $_GET['album'];
$get_album = "select * from album where id='$album_id'";

$run_album = mysqli_query($conn,$get_album);

$row_album = mysqli_fetch_array($run_album);


$album_name = $row_album['name'];
$album_artist = $row_album['artist'];

$album_pic = $row_album['picture'];
                     
$album_type = $row_album['type'];

if($album_type == "feature"){
    $type = "<p class='latest'>Feature</p>";
}else{
    $type = "<p></p>";
}




}



?>