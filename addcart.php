<?php 
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['addcart'])) {
        // btnDelete
    } else {
        //assume btnSubmit
    }
}


?>


<?php 
session_start();
 $_SESSION['product_id']=$rows['id'];
  $_SESSION['user_id']=$_SESSION['user_id'];
   ?>