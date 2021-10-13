<?php


	include'../connect.php';
  $id=$_GET['id'];
  $img = $_GET['img'];
  $song = $_GET['song'];
  $path1 = "../songs/$song";
  $path = "../song_pic/$img";
  unlink($path);
  unlink($path1);
	$result = $db->prepare("DELETE FROM song WHERE id= $id");
	$result->bindParam($id, $id);
       if($result->execute()){
      header("location:all_song.php?success=true");
        }else{
            header("location:all_song.php?failed=true");
        } 
		
?>