<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Online House Renting</title>
	
	<link rel="stylesheet" type="text/css" href="./calhome.css">

	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

	

</head>


<body>
 
  
<header>
  
    <nav>
      
	<div class="logo1"><img src="./images/img2.jpg"alt="logo">
	<h1 class="logo">Apna Ghar.com</h1></div>
	<div class="menu" style="width:111%;">
    <a class="Home" href="./index.php">Home</a>	
		<a class="Lo" href="./login.php">Login</a>
    <a class="Su" href="./register.php">Sign Up</a>
    <div class="dropdown">
		<a class="Ab" href="./calabout.php">About Us<span class="caret"></span></a>
		<div class="dropdown-content">
      <a class="dropdown-toggle" href="./calabout.html">Contact Us</a>
    </div>
    </div>
   <a class="Gallery" href="./calgallery.html">Gallery</a>
   <a class="nav-link1" href="logout.php">Logout</a>	
<a class="nav-link" href="#" style="margin-top: -1px; margin-left:10px"> <i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo "Welcome ". $_SESSION['username']?></a>
        
   
    
</div>
  </nav>
  
  

	<main>
    
		<section class="home-banner-area" id="home">
      	<div class="container h-100">
        <div class="home-banner">
           <div class="text-center">
             <h4>See What a Difference a stay makes</h4>
          	<div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">U</span>
            <span style="--i:3">X</span>
            <span style="--i:4">U</span>
            <span style="--i:5">R</span>
            <span style="--i:6">Y</span>
            <span style="--i:7"> </span>
            <span style="--i:8"> </span>
            <span style="--i:9"> </span>
            <span style="--i:10"> </span>
            <span style="--i:11"><em>I</em></span>
            <span style="--i:12"><em>S</em></span>
            <span style="--i:13"> </span>
            <span style="--i:14"> </span>
            <span style="--i:15"> </span>
            <span style="--i:16"> </span>
            <span style="--i:17">P</span>
            <span style="--i:18">R</span>
            <span style="--i:19">E</span>
            <span style="--i:20">C</span>
            <span style="--i:21">I</span>
            <span style="--i:22">O</span>
            <span style="--i:23">U</span>
            <span style="--i:24">S</span>
            
				  </div>
				</div>
        </div>
        
		</section>

		<div class="wrapper">
			<div class="search_box">
				<div class="sel"><h2 style="margin-left:170px; color:white;">Select City</h2></div>
				
      
         <a href="./Mumbai.html" class="mum" style="background-color: black;
font-size: 22px;
padding-bottom: 8px;
padding-top: 12px;
border-left-width: 0px;
border-left-style: solid;
margin-top: 35px;
border-bottom-width: 0px;
border-bottom-style: solid;
padding-left: 66px;
padding-right: 64px;
margin-bottom: -42px;
margin-left: -290px;
text-decoration: none;
color: white;
margin-right: 0px;
border-top-width: 0px;
border-top-style: solid;
border-radius: 37px;"
onMouseOver="this.style.backgroundColor='red'"
onMouseOut="this.style.backgroundColor='black'"> Mumbai</a> 
         
				  <a href="./Pune.html" class="pun" style="background-color: black;
font-size: 22px;
padding-bottom: 8px;
padding-top: 12px;
border-left-width: 0px;
border-left-style: solid;
margin-top: 36px;
border-bottom-width: 0px;
border-bottom-style: solid;
padding-left: 80px;
padding-right: 80px;
margin-bottom: -43px;
margin-left: 28px;
text-decoration: none;
color: white;

border-top-width: 0px;
border-top-style: solid;
border-radius: 37px;"
onMouseOver="this.style.backgroundColor='red'"
onMouseOut="this.style.backgroundColor='black'"> Pune</a>
    </div>
</div>

		
	<!--	<div class="container">
      

			<div class="select-box">
			  <div class="options-container">
				<div class="option">
				  <input
					type="radio"
					class="radio"
					id="A"
					name="category"
				  />
				  <a href="#"> Residential Apartment</a>
				</div>
	  
				<div class="option">
				  <input type="radio" class="radio" id="B" name="category" />
				  <a href="#">Independent House/Villa</a>
				</div>
	  
				<div class="option">
				  <input type="radio" class="radio" id="C" name="category" />
				  <a href="#">Independent/Builder Floor</a>
				</div>
	  
				<div class="option">
				  <input type="radio" class="radio" id="D" name="category" />
				  <a href="#">Residential Land</a>
				</div>
	  
				<div class="option">
					<input type="radio" class="radio" id="E" name="category" />
					<a href="#">Studio Apartment</a>
				  </div>
		
				  <div class="option">
					<input type="radio" class="radio" id="F" name="category" />
					<a href="#">Farm House</a>
				  </div>
		
				  <div class="option">
					<input type="radio" class="radio" id="G" name="category" />
					<a href="#">Serviced Apartments</a>
				  </div>
		
				  <div class="option">
					<input type="radio" class="radio" id="H" name="category" />
					<a href="#">Other</a>
				  </div>
		
			  </div>
	  
			  <div class="selected" >
				All Residential
			  </div>

			  <div class="select-box1">
				<div class="options-container1">
				  <div class="option1">
					<input
					  type="radio"
					  class="radio1"
					  id="I"
					  name="category"
					/>
					<a href="#"> Mumbai</a>
				  </div>
		
				  <div class="option1">
					<input type="radio" class="radio1" id="J" name="category" />
					<a href="#">Pune</a>
				  </div>
		
				  <div class="option1">
					<input type="radio" class="radio1" id="K" name="category" />
					<a href="#">Nasik</a>
				  </div>
		
				  <div class="option1">
					<input type="radio" class="radio1" id="L" name="category" />
					<a href="#">Nagpur</a>
				  </div>
		
				  <div class="option1">
					  <input type="radio" class="radio1" id="M" name="category" />
					  <a href="#">Kolhapur</a>
					</div>
		  
					<div class="option1">
					  <input type="radio" class="radio1" id="N" name="category" />
					  <a href="#">Latur</a>
					</div>
		  
					<div class="option1">
					  <input type="radio" class="radio1" id="O" name="category" />
					  <a href="#">Akola</a>
					</div>
		  
					<div class="option1">
					  <input type="radio" class="radio1" id="P" name="category" />
					  <a href="#">Thane</a>
					</div>
		  
				</div>
		
				<div class="selected1" style="margin-top: 5px;">
				  City
				</div>

				<div class="select-box2">
					<div class="options-container2">
					  <div class="option2">
						<input
						  type="radio"
						  class="radio2"
						  id="Q"
						  name="category"
						/>
						<a href="#"> 1RK/1BHK</a>
					  </div>
			
					  <div class="option2">
						<input type="radio" class="radio2" id="R" name="category" />
						<a href="#">2 BHK</a>
					  </div>
			
					  <div class="option2">
						<input type="radio" class="radio2" id="S" name="category" />
						<a href="#">3 BHK</a>
					  </div>
			
					  <div class="option2">
						<input type="radio" class="radio2" id="T" name="category" />
						<a href="#">4 BHK</a>
					  </div>
			
					  <div class="option2">
						  <input type="radio" class="radio2" id="U" name="category" />
						  <a href="#">5 BHK</a>
						</div>
			  
						<div class="option2">
						  <input type="radio" class="radio2" id="V" name="category" />
						  <a href="#">6 BHK</a>
						</div>
			  
						<div class="option2">
						  <input type="radio" class="radio2" id="W" name="category" />
						  <a href="#">7 BHK</a>
						</div>
			  
						<div class="option2">
						  <input type="radio" class="radio2" id="X" name="category" />
						  <a href="#">8 BHK</a>
						</div>
			  
					</div>
			
					<div class="selected2" style="margin-top: -1px;">
						Bedroom
					</div>
					<div class="select-box3">
						<div class="options-container3">
						  <div class="option3">
							<input
							  type="radio"
							  class="radio3"
							  id="Y"
							  name="category"
							/>
							<a href="#">5 Lacs </a>
						  </div>
				
						  <div class="option3">
							<input type="radio" class="radio3" id="Z" name="category" />
							<a href="#">10 Lacs</a>
						  </div>
				
						  <div class="option3">
							<input type="radio" class="radio3" id="A2" name="category" />
							<a href="#">20 Lacs</a>
						  </div>
				
						  <div class="option3">
							<input type="radio" class="radio3" id="B2" name="category" />
							<a href="#">35 Lacs</a>
						  </div>
				
						  <div class="option3">
							  <input type="radio" class="radio3" id="C2" name="category" />
							  <a href="#">40 Lacs</a>
							</div>
				  
							<div class="option3">
							  <input type="radio" class="radio3" id="D2" name="category" />
							  <a href="#">65 Lacs</a>
							</div>
				  
							<div class="option3">
							  <input type="radio" class="radio3" id="E2" name="category" />
							  <a href="#">80 Lacs</a>
							</div>
				  
							<div class="option3">
							  <input type="radio" class="radio3" id="F2" name="category" />
							  <a href="#">1 Crore</a>
							</div>
				  
						</div>
				
						<div class="selected3"  style="margin-top: 1px;">
							Budget (Annual)
						</div>
				  </div>
			   </div>
			</div>
		  </div>-->
  </main>
  
  <div class="container8">
<h3 style="margin-top: -100px;
  letter-spacing: 3px;
    font-size: 24px;
    color: white;
    margin-left: 425px;
    word-spacing: 4px;"><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
</div>
</header>

<!-- Latest property -->
<div id="aa-latest-property">
    <div class="containerlp1">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>
          <p>EXPLORE REAL ESTATE IN INDIA</p>         
        </div>
     <div class="aa-latest-properties-content">
          <div class="row">
			 <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="./images/1.jpg" alt="img" width="135" height="150">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3>The Icon by Risland</h3>
                    <p>These flats promise an exclusive view and refreshing vibes, making them well ventilated. Its awesome.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                    1 Crore
                    </span>
                    
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="./images/2.jpg" alt="img" width="135" height="150">
                </a>
                <div class="aa-tag for-rent">
                  For Rent
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>2 Rooms</span>
                    <span>1 Beds</span>
                    <span>1 Baths</span>
                    <span>1000 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3>KM Horizon Exotica</h3>
                    <p>Look at its range of general amenities to premium amenities that include Sun Deck, Mini Theatre, Gamezone.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      60 Lakhs
                    </span>
                   
                  </div>
                </div>
              </article>
			</div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="./images/3.jpg" alt="img" width="135" height="150">
                </a>
                <div class="aa-tag sold-out">
                  Sold Out
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>3 Rooms</span>
                    <span>1 Beds</span>
                    <span>2 Baths</span>
                    <span>800 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3>Rosa Manhattan</h3>
                    <p>These are a new launch flats. There are a total of 1 towers in the project. The project is a nicely designed .</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      70 Lakhs
                    </span>
                   
                  </div>
                </div>
              </article>
			</div>
		</div>
		<div class="row1">
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="./images/4.jpg" alt="img" width="135" height="150">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>1 Rooms</span>
                    <span>1 Beds</span>
                    <span>2 Baths</span>
                    <span>600 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3>Singhania Valencia Park</h3>
                    <p>Enjoy a blissful living experience in Nisarg Greens. This residential project encompasses 1 BHK Apartments </p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      40 Lakhs
                    </span>
                   
                  </div>
                </div>
              </article>
			</div>
		
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="./images/5.jpg" alt="img" width="135" height="150">
                </a>                
                <div class="aa-tag sold-out">
                  Sold Out
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>2 Rooms</span>
                    <span>1 Beds</span>
                    <span>1 Baths</span>
                    <span>500 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3>Dosti West County</h3>
                    <p>Its unique highlights include facilities like Jogging Track, Children's Play Area, Multipurpose Court, Swimming Pool</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                     20 Lakhs
                    </span>
                   
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="./images/6.jpg" alt="img" width="135" height="150">
                </a>
                <div class="aa-tag for-rent">
                  For Rent
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>3 Rooms</span>
                    <span>1 Beds</span>
                    <span>2 Baths</span>
                    <span>650 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3>Flower Valley</h3>
                    <p>Here are a total of 28 towers in the project. The project is a nicely designed and offers an excellent infrastructure .</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      50 Lakhs
                    </span>
                   
                  </div>
                </div>
              </article>
            </div>
		</div>
        </div>
      </div>
    </div>
</div>
  <!-- / Latest property --> 
   <!-- Service section -->
<section id="aa-service">
    <div class="containerS1">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>A thousand words will not leave so deep an impression as one deed.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <i class="fa fa-circle" ></i>
					          <i class="fa fa-home"></i>
					   
                    </div>
                    <div class="aa-single-service-content">
                      <h4>Property Sale</h4>
                      <p>You pay realtors because they have reach and proven results,
                         and the Noble Black Team wants you to know it’s 
                         extraordinary at both.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <i class="fa fa-circle" ></i>
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="aa-single-service-content">
                      <h4>Property Rent</h4>
                      <p>You Can Afford To Dwell Well.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <i class="fa fa-circle" ></i>
                      <i class="fa fa-crosshairs"></i>
                    </div>
                    <div class="aa-single-service-content">
                      <h4>Property Development</h4>
                      <p>All we’ve done is outline what the homebuying process should be.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <i class="fa fa-circle" ></i>
                      <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="aa-single-service-content">
                      <h4>Market Analysis</h4>
                      <p>Advertising people who ignore research are as dangerous as generals who ignore decodes of enemy signals.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>

  </section>
  <!-- / Service section -->

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
    <div class="containerpb">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Property</h3>
            <p>The house you looked at today and wanted to think about until tomorrow may be the same house someone looked at yesterday and will buy today.</p>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo Banner Section -->


  <!-- Our Agent Section-->
  <section id="aa-agents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-agents-area">
            <div class="aa-title1">
              <h2>Our Clients</h2>
              <span></span>
              
            </div>
            <!-- agents content -->
            <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <div class="slide1">
          
          <div class="aa-agetns-info ">
            <img src="./images/1.1.jpg" alt="">
            <div class="aa-agetns-info1">
            <h4>Olivia Addison</h4>
            <span class="TA">Top Agent</span>
            <div class="aa-agent-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            </div>
          </div>
          <div class="aa-agetns-info ">
            <img src="./images/1.9.jpg" alt="">
            <div class="aa-agetns-info1">
            <h4>Philip Smith</h4>
            <span class="TA">Top Agent</span>
            <div class="aa-agent-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
          </div>
          <div class="aa-agetns-info ">
            <img src="./images/1.2.jpg" alt="">
            <div class="aa-agetns-info1">
            <h4>Emma Hailey</h4>
            <span class="TA">Top Agent</span>
            <div class="aa-agent-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            </div>
          </div>
          <div class="aa-agetns-info ">
            <img src="./images/1.10.jpg" alt="">
            <div class="aa-agetns-info1">
            <h4>Noah Logan</h4>
            <span class="TA">Top Agent</span>
            <div class="aa-agent-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            </div>
          </div>
        </div>
        </div>
        <div class="slide">
          <div class="slide1">
          
            <div class="aa-agetns-info ">
              <img src="./images/1.3.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Ava Kacee</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.11.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>William Blake</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
            </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.4.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Sophia Keely</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.12.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>James Paige</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide1">
          
            <div class="aa-agetns-info ">
              <img src="./images/1.5.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Isabella Cason</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.13.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Benjamin Reilly</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
            </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.6.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Charlotte Kyndall</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.14.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Mason Dana</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide1">
          
            <div class="aa-agetns-info ">
              <img src="./images/1.7.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Amelia Shea</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.15.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Elijah Haiden</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
            </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.8.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Mia Leidy</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
            <div class="aa-agetns-info ">
              <img src="./images/1.16.jpg" alt="">
              <div class="aa-agetns-info1">
              <h4>Ronny Piper</h4>
              <span class="TA">Top Agent</span>
              <div class="aa-agent-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->



    <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
          counter = 1;
        }
      }, 5000);
      </script>
   
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <iframe width="1530px" height="550px" src="https://www.youtube.com/embed/sAhPyANK4RA?start=15" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
  <!-- Client Testimonial -->

  

  <!-- Latest blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row5">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title4">
              <h2>Latest News</h2>
              <span></span>
             
            </div>
            <div class="aa-latest-blog-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-4-1">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <img src="images/explore1.png" alt="img">
                      
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3>Aden Court </h3>
                      <p>Book your 2 BHK flat in L and T Crescent Bay, Parel, Mumbai South. Having a carpet area of 857.0 sq. ft. - 950.0 sq. ft., these flats promise an exclusive view and refreshing vibes, making them well ventilated.</p>
                      <div class="aa-blog-single-bottom">
                        <div class="aa-blog-author"><i class="fa fa-user"></i> Admin</div>
                        <div class="aa-blog-comments"><i class="fa fa-comment-o"></i>5</div>
                      </div>
                    </div>
                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4-1">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <img src="images/explore6.png" alt="img">
                     
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3>Wadhwa Pristine</h3>
                      <p>Enjoy a blissful living experience in L and T Crescent Bay. This residential project encompasses 3 BHK flats in Parel, Mumbai South and brings you the best of both the worlds – excellent aesthetics.Thank You</p>
                      <div class="aa-blog-single-bottom">
                        <div class="aa-blog-author"><i class="fa fa-user"></i> Admin</div>
                        <div class="aa-blog-comments"><i class="fa fa-comment-o"></i>9</div>
                      </div>
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4-1">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <img src="images/explore5.png" alt="img">
                      
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3>Kingston Tower</h3>
                      <p>Enjoy a blissful living experience in Arkade Rise. This residential project encompasses 2 BHK apartments in Charmichael Road, Mumbai South and brings you the best of both the worlds – excellent.Thankyou.</p>
                      <div class="aa-blog-single-bottom">
                        <div class="aa-blog-author"><i class="fa fa-user"></i> Admin</div>
                        <div class="aa-blog-comments"><i class="fa fa-comment-o"></i>3</div>
                      </div>
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->




  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container5">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 


<script src="calhome.js"></script>


</body>
</html>