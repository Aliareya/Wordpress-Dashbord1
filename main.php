<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>information</title>
   <style>
      .container-all-user{
         width: 80%;
         height: 90vh;
         margin: 10px auto;
         background-color: grey;
         padding-top:50px;
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         gap:20px;
      }
      .user{
         width: 30%;
         height:310px;
         background-color: blanchedalmond;
      }
      img{
         width: 100px;
         height: 100px;
         border-radius: 50%;
         border: 2px solid black ;
      }
      .user-logo{
         width: 100%;
         height: 150px;
         background-color: green;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
      }
      #user-name{
         padding: 0;
         margin: 0;
      }
      span{
         font-size: 20px ;
         font-weight: 600;
      }
      .user-detail h4 span {
         display: inline-block;  
         word-wrap: break-word;  
         overflow-wrap: break-word;  
      }
      

   </style>
</head>
<body>
   <h1 style="text-align: center;"> All Usres </h1>
   <div class="container-all-user">
     <?php
      sort($resulte);
       foreach( $resulte as $value){ 
      ?>
       <div class="user">
         <div class="user-logo">
            <img src="images/s.jpeg" alt="man">
            <h2 id="user-name"><?php echo($value['name']);?></h2>
         </div>
         <div class="user-detail">
           <h4 id="user-email">Email: <span><?php echo($value['email']);?></span></h4>
           <h4 id="user-email"> Message: <span><?php echo($value['message']);?></span></h4>
             <a href="more.php?id=<?php echo $value['id']; ?>">More..</a>
         </div>
       </div> 
     <?php } ?>  
   </div>
</body>
</html>
