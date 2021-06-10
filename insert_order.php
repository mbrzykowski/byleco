<?php

session_start();
		
	

		
		require_once "config.php";

        @$element_name = $_REQUEST['element_name'];
        @$number = $_REQUEST['number'];
        @$client_id = $_REQUEST['client_id'];
        @$deadline = $_REQUEST['deadline'];
        @$colour = $_REQUEST['colour'];

        @$username = $_SESSION['username'];
        @$date = date("d.m.y | H.m.s");
        
      
		
        $sql = "INSERT INTO `orders`(`element_name`, `number`, `client_id`, `user_id`, `add_date`, `deadline`, `colour`) VALUES ('$element_name','$number','$client_id','$username','$date','$deadline','$colour')";
        if(mysqli_query($polaczenie, $sql)){
            header('Location: order_add.php');
        }
							
			$polaczenie->close();
			
	
?>