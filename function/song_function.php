<?php


if(isset($_GET['id'])){
    $song_id = $_GET['id'];
$get_song = "select * from song where id=$song_id";

$run_song = mysqli_query($conn,$get_song);

$row_song = mysqli_fetch_array($run_song);


$song_name = $row_song['song_name'];
$song_id = $row_song['id'];
$song_detail = $row_song['detail'];
$song_date = $row_song['song_date'];
$song_album = $row_song['album'];
$song_pic = $row_song['picture'];
$song_artist = $row_song['artist'];                          
$song_type = $row_song['song_type'];
$song = $row_song['song'];
$song_feature = $row_song['feature'];


}



?>