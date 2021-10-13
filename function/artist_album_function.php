<?php


if(isset($_GET['artist'])){
    $artist_id = $_GET['artist'];
$get_artist = "select * from artist where id='$artist_id'";

$run_artist = mysqli_query($conn,$get_artist);

$row_artist = mysqli_fetch_array($run_artist);


$artist_name = $row_artist['name'];
$artist_nick = $row_artist['nickname'];
if($artist_nick == ""){
    $artist_nick ="";
}
$artist_pic = $row_artist['picture'];
                     
$artist_type = $row_artist['type'];

if($artist_type == "top"){
    $type = "<p class='latest'>Top</p>";
}elseif($artist_type == "feature"){
    $type = "<p class='latest'>Feature</p>";
}else{
    $type = "<p></p>";
}




}



?>