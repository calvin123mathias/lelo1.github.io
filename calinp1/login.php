<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: index.php");
                            
                        }
                    }

                }

    }
}    


}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./callogin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    
}
.fl{
    float: left;
    animation: fadein 2s;
}
.warpper{
    width: 100%;
    height: 100vh;
    background-image: url('https://source.unsplash.com/1600x900/?towns,building');
    background-repeat: no-repeat;
    background-size: cover;
}
.main{
    width: 30%;
    height: 280px;
    background-color: rgba(7, 47, 79, 0.63);
    margin: 50px 35%;
    border-radius: 20px 20px 30px 30px;
    top: 35%;
    left: 15%;
    position: absolute;
    transform:translate(-50%,-50%);
}
.head{
    width: 100%;
    background-color: #f8B800;
    height: 40px;
    border-radius: 20px 20px 0 0;
}
.head p{
    line-height: 40px;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    color: #fff;
}
.form{
    width: 100%;
    height: 500px;
}
.name{
    font-size: 16px;
    color: #fff;
    margin: 15px 0 0 5%;
}
.name-inp{
    width: 90%;
    height: 30px;
    margin: 5px 0 0 5%;
    font-size: 16px;
    padding: 2px;
    color: rgb(114, 111, 111);
    border: 1px solid rgb(17, 67, 107);
    background-color: rgb(231, 232, 250);
}
.name-inp:hover{
    background-color: rgb(0, 23, 41);
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}
.pass{
    margin: 5px 0 0 5%;
    height: 30px;
    width: 90%;
    padding: 2px;
    background-color: rgb(231, 232, 250);
    border: 1px solid rgb(17, 67, 107);
}
.pass:hover{
    background-color: rgb(0, 23, 41);
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}
.gender{
    margin: 15px 0 0 5%;
    color: #fff;
    font-size: 16px;
}
.gen{
    font-size: 18px;
}
.genm{
    margin-left: 5%;
}
.sub{
    width: 90%;
    margin: 15px 0 0 5%;
    font-size: 16px;
    height: 40px;
    background-color: #031c30;
    border: 1px solid rgb(17, 67, 107);
    color: #fff;
}
.sub:hover{
    background-color: #E94601;
    color: #fff;
}
.new{
    text-decoration: none;
    font-size: 15px;
    line-height: 30px;
    color: white;
    padding-left: 25px;
}
.fp:hover{
color: rgb(236, 202, 49);
}
@keyframes fadein{
	from{
opacity: 0;
	}
to {
opacity: 1;
}
}

nav{
    width: 100%;
    height: 15vh;
    background-color:rgba(0,0,0,0.2);
    color:white;display: flex;justify-content: space-between;
    align-items: center;text-transform: uppercase;
   position: fixed;
   top: 0;
  }
  
  
  
  nav .logo1 img{
    width:14%;
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
    margin-right: 10px;
  }
  
  .Home
    {
      color: white;
      text-decoration: none;
      font-weight: bold;
      margin-right: 20px;
      
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
              <a class="Home" href="./index.php">Home</a>	
              <a class="Lo" href="./login.php">Login</a>
    <a class="Su" href="./register.php">Sign Up</a>
              <div class="dropdown">
              <a class="Home" href="./calabout.html">About Us<span class="caret"></span></a>
              <div class="dropdown-content">
                <a class="dropdown-toggle" href="./calabout.php">Contact Us</a>
              </div>
              </div>
             <a class="Gallery" href="./calgallery.html">Gallery</a>	
             <a class="nav-link" href="logout.php">Logout</a>	

        </div>
            </nav>
            
        
            </nav>
        <div class="main">
            <div class="head">
<p>
 LOGIN IN HERE</p>
</div>
<div class="form fl">
                <form method="POST" action="">
                    <p class="name">
USER-NAME* :</p>
<p>
<input type="text" name="username" placeholder="First Name" class="name-inp" required="" ></p>
<p class="name">

PASSWORD* :</p>
<p>
<input type="password" name="password" placeholder="Password" class="pass" required=""  minlength="6"  >
                        
                    
                    </p>

<p>
<input type="submit" name="sb" value="LOGIN" class="sub"></p>

<a href="register.php" class="new">Don't Have A Account Yet? CREATE NOW!</a>
</form>
</div>
</div>
</div>  


</body>
</html>