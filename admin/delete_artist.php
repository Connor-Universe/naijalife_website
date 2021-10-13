<?php


	include'../connect.php';
  $id=$_GET['id'];
  $img = $_GET['img'];
  $path = "../artist_pic/$img";
  unlink($path);
	$result = $db->prepare("DELETE FROM artist WHERE id= $id");
	$result->bindParam($id, $id);
       if($result->execute()){
      header("location:all_artist.php?success=true");
        }else{
            header("location:all_artist.php?failed=true");
        } 
		
?>