<?php
include('db.php');
$success="";
$errors =array('name'=>"",'email'=>"",'message'=>"");
$name   ="";   
$email  ="";
$message="";
  if(isset($_POST['submit'])){
   $name    = htmlspecialchars($_POST['name']);
   $email   = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);
  
    if($name == "" ){
          $errors['name'] = "inter your name";
    } if($email == "" ){
          $errors['email'] = "inter your email";
    } if($message == "" ){
          $errors['message'] = "inter your message";
    } if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email']= "your email is invlide";
    } if(empty(array_filter($errors))){
      $success = "success full inserted";
      $name    = htmlspecialchars($_POST['name']);
      $email   = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST['message']);
      $sql ="INSERT INTO user(name,email,message) VALUES ('$name','$email','$message')";
      if(mysqli_query($conn ,$sql)){
         header('Location: main.php');
      }else {
         echo"error";
      } 
   }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      .main-container{
         width: 30%;
         height:70vh;
         background: #333;
         margin: 20px auto;
         padding: 30px;
         display: flex;
         flex-direction: column;
      }
      h1{
         color: white;
         text-align: center;
      }
      .get-input{
         width: 100%;
         margin-top: 35px;
      }
      input{
         max-width: 98%;
         width: 100%;
         padding: 8px;
         background-color: grey;  
      }
      label{
        font-size: 22px;
        font-weight: 700;
        color: white;
        display: flex;
        align-items: center;
        gap: 10px;
      }
      button{
         margin-top: 30px;
         width: 150px;
         height: 50px;
         background: grey;
         color: white;
         font-size: 16px;
         font-weight: 900;
      }
      p{
         color: green;
         font-size: 20px;
         padding: 0;
         margin: 0;
         text-align: center;
      }
      #error{
         color:red;
         padding: 0;
         margin: 0;
         text-align: left;
         font-size: 12px;
      }
   </style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=\, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <div class="main-container">
      <h1>Login Here Your Self</h1>
      <p><?php echo ($success); ?></p>
   <form action="form.php" method="post">
      <div class="get-input">
        <label for="name">name: <p id="error"><?php echo($errors['name']); ?></p></label><br>
        <input type="text" name="name" value="<?php echo($name); ?>">
      </div>
      <div class="get-input">
        <label for="name">Email: <p id="error"><?php echo($errors['email']); ?></p></label><br>
        <input type="text" name="email" value="<?php echo($email); ?>">
      </div>
      <div class="get-input">
        <label for="name">Message: <p id="error"><?php echo($errors['message']); ?></p></label><br>
        <input type="text" name="message" value="<?php echo($message); ?>">
      </div>
      <button type="submit" name="submit">Click</button>
   </form>
  </div>
</body>
</html>