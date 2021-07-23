<?php

$insert = false; 
if(isset($_POST['name'])){
    //set connection vARIABLES
$server = "localhost";
$username = "root";
$password= "";
//create a connection
$con = mysqli_connect($server,$username,$password);
//check for connection success
if(!$con)
{
    die("connection failed due to " . mysqli_connect_error());
}
//echo "successful connection to db";
//collect post variables
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql = "INSERT INTO `pu_trip`.`trip` ( `name`, `age`, `email`, `phone`, `dt`) VALUES ( '$name', '$age', '$email', '$phone',  current_timestamp())";
//echo "$sql";
if($con->query($sql)==true)
{
    //echo "succesfully insertes";
    //flag for successful connection
    $insert = true;

}
else{
    echo "error . $sql <br> $con->error";
}
//close the connections
/*<div class="container">
<h1>Welcome to Panjab University</h1>
<p>Enter your details and submit this form</p>*/
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class= "bg" src="camp.jpg" alt="travel">
    
    <div class="container">
<h1>Welcome to Panjab University</h1>
<p>Enter your details and submit this form</p>
</div>  
<?php
if($insert==true)
echo"<p class ='msg'>Thanks for submiting the form</p>"
?>
<form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off">
    <input type="text" name="age" id="age" placeholder="Enter your age" autocomplete="off">
    <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone no" autocomplete="off">
    
    <button class="btn">Submit</button>
    

</form>


    </div>
    <script>
    
</script>
</body>
</html>