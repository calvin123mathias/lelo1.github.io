<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
    }

   


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Philosopher&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
  <link rel="stylesheet" href="./calsignup.css">
  <title>Document</title>
</head>
<body>
<style>
    * {
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    font-style: 'Philosopher', sans-serif;
}
:root {
    
    --lg-color: linear-gradient( left, #74ebd5, #9face6);
}
body{
    background-image: url('https://source.unsplash.com/1600x900/?towns,citylights');
    
    background-repeat: no-repeat;
    font-family: var(--myfont);
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100vw;
   
}
.container{
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	width: 460px;
    max-width: 100%;
    background-color: rgba(7, 47, 79, 0.63);
    border-radius: 40px 40px 40px 40px;
    margin-left: 35%;
    margin-top: 150px;
    margin-left: -13px;
}
.header{
    background-color:rgba(0, 0, 0, 0.7);
    padding: 10px 0;
    text-align: center;
}
.header h2{
    color: white;
    
    font-size: 20px;
    text-align: center;
    text-transform: uppercase;
}
 .btn{
    background-color: white ;
    border-radius: 10px;
    border: none;
    outline: none;
    color: black;
    display: block;
    
    font-size: 16px;
    padding: 15px 0;
   
    width: 150px;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 1s ease;
  margin: 20px;
    margin-left: 130px;
    margin-top: -1px;
}
.form .btn:hover{
background: rgb(73, 195, 243);
}
.form{
    padding: -2px 18px;

}
.form-control{
    margin: 22px;
    position: relative;
}
.form-control label{
    display: inline-block;
    margin-bottom: 5px;
    color: white;
}
.form-control input{
    width: 100%;
    border: 2px solid #f0f0f0;
    border-radius: 5px;
    display: block;
    
    padding: 12px;
}
.form-control input:focus{
    outline: 0;
    border-color:  rgb(73, 195, 243);
}
.form-control.success input{
    border-color: green;

}
.form-control.error input{
    border-color: red;

}
.form-control i{
    position: absolute;
    right: 13px;
    top: 38px;
    visibility: hidden; 
}
.form-control.success i.fa-check-circle {
    color: green;
    visibility: visible;
}
.form-control.error i.fa-exclamation-circle {
    color: red;
    visibility: visible;
}

.form-control.error small {
    
    visibility: visible;
}
.form-control small{
    color: red;
    position: absolute;
    
    left: 0;
    visibility: hidden; 
}
.gender{
    display: flex;
    align-content: center;
    color: white;
   
}

/*@media(max-width:998px){
    .container{
        width: calc(100vw - 35vw);
        max-width: 100%;
    }
}*/

nav{
    width: 100%;
    height: 14vh;
    background-color:rgba(0,0,0,0.2);
    color:white;display: flex;justify-content: space-between;
    align-items: center;text-transform: uppercase;
    position: fixed;
    top: 0;
    margin-left: -546px;
  }
  
  
  
  nav .logo1 img{
    width:15%;
    padding-left: 2%;
    border:cadetblue ;
    border-radius: 100%;
  
  }
  nav .logo1 {
    display: flex;
  }
  nav .logo{
    width: 50%; padding-left: 3%;padding-top: 4%;
    
  }
  nav .menu{
    width: 80%;
    display: flex;justify-content: space-around; 
  
  }
  nav .menu a{
    text-decoration: none; color: white;
    font-weight: bold;
    
  }
  nav .menu a:hover{
    color:black;
    background-color: white;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-right: 8px;
    padding-left: 8px;

  }
  
  
  .Gallery{
    color: white;
    text-decoration: none;
    font-weight: bold;
    margin-right: 35px;
  }
  
  .Home
    {
      color: white;
      text-decoration: none;
      font-weight: bold;
      margin-right: 20px;
     padding-left: 20px;
    
    }
    .Pp{
      
      margin-inline: 10px;
    }
    .Su{
      margin-inline: 20px;
    }
    .Lo{
      margin-right:18px;
      margin-left: 10px;
    }
  
  .dropdown {
    position: relative;
    display: inline-block;
  
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: blue;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
    z-index: 1;
   
  
  }
  .dropdown-content a {
    color:red;
    padding: 10px 5px;
    text-decoration: none;
    display: block;
  
  }
  
  
  
  .dropdown-content a:hover {background-color:red; }
  
  .dropdown:hover .dropdown-content {display: block;}
  
  
  .caret{
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 8px;
    margin-top: -4px;
    vertical-align: middle;
    border-top: 6px dashed;
    border-top: 4px solid \9;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
  }
  

  
    </style>



  <div class="warpper fl">
  <nav>
      
            <div class="logo1"><img src="./images/img2.jpg"alt="logo">
            <h1 class="logo">Apna Ghar.com</h1></div>
            <div class="menu"  style="width:111%;">
              <a class="Home" href="./calhome.php">Home</a>	
              <a class="Lo" href="./login.php">Login</a>
    <a class="Su" href="./register.php">Sign Up</a>
              <div class="dropdown">
              <a class="Home" href="./calabout.html">About Us<span class="caret"></span></a>
              <div class="dropdown-content">
                <a class="dropdown-toggle" href="./calabout.html">Contact Us</a>
              </div>
              </div>
            <a class="Gallery" href="./calgallery.html">Gallery</a>	
            <a class="nav-link" href="logout.php">Logout</a>	

          </div>
            </nav>
  
    <div class="container">
        <div class="header">
      <h2>SIGN&nbsp&nbspUP&nbsp&nbspHERE</h2>
    </div>
    <form id="form" class="form" action="" method="post">
      <div class="form-control">
        <label for="fname">First-Name</label>
       <br> <input type="text" placeholder="Enter First-Name" id="fname" name="username" required=""/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="lname">Last-name</label>
       <br> <input type="text" placeholder="Enter Last-name" id="lname" required="" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Email</label>
       <br> <input type="email" placeholder="Enter Email" id="email" required="" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="phone">Phone-Number</label>
       <br> <input type="text" placeholder="Enter Phone-number" id="phone" required="" minlength="10" maxlength="10"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Password</label>
       <br> <input type="password" placeholder="Password" id="password" name="password" required="" minlength="6"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Password check</label>
       <br> <input type="password" placeholder="Password two" id="password2" name="confirm_password" required="" minlength="6"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <p class="gender">
        <label><b>Gender:</b></label>
                 <input type="radio" name="ge" class="genm" required=""><b>Male</b>
                 <input type="radio" name="ge" class="genm" required=""><b>Female</b>
                 <input type="radio" name="ge" class="genm" required=""><b>Others</b>
                                </p>
     </div> 
      <input type="submit" value="Submit" class="btn" name="">
    </form>
  </div>
  </div>



  
  <script src=""></script>

</body>
</html>