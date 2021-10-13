<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];

// query





    /* check if the file uploaded successfully */
    if($_SERVER["REQUEST_METHOD"] == "POST") {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO table_admin (name,email,username,password) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d));
if($q){
      header("location:add-admin.php?success=true");
        }else{
            header("location:add-admin.php?failed=true");
        } 
		}
		?>