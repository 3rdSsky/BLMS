<?php
if(isset($_POST["book_now"]))  
 {  
      if(isset($_SESSION["booking"]))  
      {  
           $item_array_id = array_column($_SESSION["booking"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["booking"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'Service_name'               =>     $_POST["hidden_name"],  
                     'price'          =>     $_POST["hidden_price"],  
                     'book'          =>     $_POST["hidden_bookingtime"]  
                );  
                $_SESSION["booking"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="../beauty-services.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'Service_name'               =>     $_POST["hidden_name"],  
                'price'          =>     $_POST["hidden_price"],  
                'book'          =>     $_POST["hidden_bookingtime"]  
           );  
           $_SESSION["booking"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["booking"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["booking"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="book-appointment.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  