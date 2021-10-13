<?php


	include'../connect.php';
  $id=$_GET['id'];
  $img = $_GET['img'];
  $path = "../album_pic/$img";
  unlink($path);
	$result = $db->prepare("DELETE FROM album WHERE id= $id");
	$result->bindParam($id, $id);
       if($result->execute()){
      header("location:all_album.php?success=true");
        }else{
            header("location:all_album.php?failed=true");
        } 
		
?>