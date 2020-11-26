

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./calabout.css">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
    <div class="warpper fl">
      <nav>
      
        <div class="logo1"><img src="./images/img2.jpg"alt="logo">
        <h1 class="logo">Apna Ghar.com</h1></div>
        <div class="menu"  style="width:111%;">
          <a class="Home" href="./index.php">Home</a>	
          <a class="Lo" href="./login.php">Login</a>
          <a class="Su" href="./register.php">Sign Up</a>
          <div class="dropdown">
          <a class="Home" href="./calabout.php">About Us<span class="caret"></span></a>
          <div class="dropdown-content">
            <a class="dropdown-toggle" href="./calabout.html">Contact Us</a>
          </div>
          </div>
        <a class="Gallery" href="./calgallery.html">Gallery</a>	
        <a class="nav-link" href="logout.php">Logout</a>	

      </div>
        </nav>
        
    <div class="about-section">
       
        <div class="inner-container">
            
            <h1>About Us</h1>
            <p class="text">
              India’s No. 1 property portal, deals with every aspect of the consumers’ needs in the real estate industry. It is an online forum where buyers, sellers and brokers/agents can exchange information about real estate properties quickly, effectively and inexpensively. At 99acres.com, you can advertise a property, search for a property, browse through properties, build your own property microsite, and keep yourself updated with the latest news and trends making headlines in the realty sector.
            </p>
          
                
            </div>
        </div>
    </div>
</div>
<div class="xml" style="background-color: cornsilk;
display: block ruby;
font-size: 33px;
padding-left: 93px;
word-spacing: 43px;">
               <?php
$xml=simplexml_load_file("data1.xml");
$data1=$xml->topic;
foreach($data1 as $showname){
  foreach ($showname->name as $names){
    echo "$names"."<br>";
  }
}
?>
        </div>    
<section id="aa-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="aa-contact-area">
             <div class="aa-contact-top">
               <div class="aa-contact-top-left">
                <iframe width="100%" height="450" style="border: 0;margin-left: 100%;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.8201614364007!2d72.96295701483872!3d19.203055637015133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b91418903a25%3A0x25b4d80f2aa419d9!2sKorum%20Mall%2C%20Samata%20Nagar%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra%20400606%2C%20India!5e0!3m2!1sen!2sbd!4v1605178731023!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>
               <div class="aa-contact-top-right">
                 <h2>Contact</h2>
                 <p>Email us with any questions or enquiries or call , We would be happy to answer your questions and set up a meeting with you. Apna Ghar.com will help to set you apart from the flock.</p>
                 <ul class="contact-info-list">
                   <li> <i class="fa fa-phone"></i> 1-700-564-6321</li>
                   <li> <i class="fa fa-envelope-o"></i> info@homeproperty.com</li>
                   <li> <i class="fa fa-map-marker"></i> Samata Nagar, Thane West Thane, Maharashtra 400606 India</li>
                 </ul>
               </div>
             </div>
             
           </div>
        </div>
      </div>
    </div>
                </section>

<!--Our Team-->
<section id="aa-client-testimonial">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-client-testimonial-area">
          <div class="aa-title">
            <h2>Our Team</h2>
            <span></span>
            
          </div>
          <!-- testimonial content -->
          <div class="aa-testimonial-content">
            <!-- testimonial slider -->
            <ul class="aa-testimonial-slider">
              <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="images/calvina.jpeg" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>calvinmathias@gmail.com<br><br><br><br>7715037087</p>
                   
                  </div>
                  
                  <div class="aa-testimonial-bio">
                    <div class="aa-footer-middle">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                    <p>Calvin Mathias</p>
                    <span>Web Designer</span>
                  </div>
                </div>
              </li>
               <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="images/stancy.jpg" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>stancynadar@gmail.com<br><br><br><br>9821121429</p>
                  </div>
                  <div class="aa-testimonial-bio">
                    <div class="aa-footer-middle">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                    <p>Stancy Nadar</p>
                    <span>Web Designer</span>
                  </div>
                </div>
              </li>
               <li>
                <div class="aa-testimonial-single">
                  <div class="aa-testimonial-img">
                    <img src="images/rutu1 (1).jpeg" alt="testimonial img">
                  </div>
                  <div class="aa-testimonial-info">
                    <p>rutujapatil@gmail.com<br><br><br><br>7977539460</p>
                  </div>
                  <div class="aa-testimonial-bio">
                    <div class="aa-footer-middle">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                    <p>Rutuja Patil</p>
                    <span>Web Designer</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Our Team-->
<style>

img {
  max-width: 100%;
  height: auto;
}

.app-title {
  text-align: center;
  font-weight: normal;
  font-size: 2.6rem;
  color: rgb(240, 213, 197);
}

.animal {
  max-width: 650px;
  padding: 20px;
  margin: 30px auto;
  background-color: #fff;
  box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.animal h4 {
  margin: 0 0 6px 0;
}

.pet-photo {
  float: left;
  width: 40%;
  margin-right: 15px;
}

.pet-name {
  font-size: 2rem;
  font-weight: normal;
  margin: 0 0 1rem 0;
}

.species {
  font-size: 0.9rem;
  color: #888;
  vertical-align: middle;
}

.foods-list {
  margin: 0;
  padding: 0;
  position: relative;
  left: 17px;
  font-size: 0.85rem;
  line-height: 1.5;
}

.footer {
  font-size: 0.7rem;
  color: #888;
  text-align: center;
  margin: 0;
}

    
    </style>
    <div id="app"></div>

    <script>
        const petsData = [
  {
    name: "Andheri",
    species: "Cities from Mumbai",
    favFoods: ["Aram Nagar 2, Opp. Palm Beach Apts, Versova, Andheri West, Mumbai, Maharashtra 400061", " JP Rd ", "<strong>Phone:</strong>  082912 44160"],
    birthYear: 2016,
    photo: "https://image.shutterstock.com/image-illustration/ceo-office-interior-wooden-table-260nw-640139578.jpg"
  },
  {
    name: "Malad",
    species: "Cities from Mumbai",
    favFoods: ["Unit 39, Bldg no 2, New Sonal Industrial Estate, Link, Kanchpada, Malad West, Mumbai, Maharashtra 400064", "New Link Road", "<strong>Phone:</strong> 098677 38000"],
    birthYear: 2008,
    photo: "https://eco-business.imgix.net/uploads/ebmedia/fileuploads/shutterstock_334096322.jpg?fit=crop&h=960&ixlib=django-1.2.0&w=1440"
  },
  {
    name: "Alandi",
    species: "Cities from Pune",
    favFoods: ["Lane no.3, Pingale Wasti, Koregaon Park Annexe, Mundhwa, Pune, Maharashtra 411036", "Dhayarkar Colony,", "<strong>Phone:</strong>  086986 97689"],
    birthYear: 2012,
    photo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiBKuut_uQw-8v64fmwYB4I0WOIC5Ed2ZaGw&usqp=CAU"
  },
  {
    name: "Ambegaon",
    species: "Cities from Pune",
    favFoods: ["Behind Bharati Vidyapeeth, Ambegaon Pathar, Pune, Maharashtra 411046", "Opposite Ambegaon Pathar Police , ", "<strong>Phone:</strong>  08586 976877"],
    birthYear: 2018,
    photo: "https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9"
  }

];

function age(birthYear) {
  let calculatedAge = new Date().getFullYear() - birthYear;
  if (calculatedAge == 1) {
    return "1 year ";
  } else if (calculatedAge == 0) {
    return "Baby";
  } else {
    return `${calculatedAge} years `;
  }
}

function foods(foods) {
  return `
<h4>Address</h4>
<ul class="foods-list">
${foods.map(food => `<li>${food}</li>`).join("")}
</ul>
`;
}

function petTemplate(pet) {
  return `
    <div class="animal">
    <img class="pet-photo" src="${pet.photo}">
    <h2 class="pet-name">${pet.name} <span class="species">(${pet.species})</span></h2>
    <p><strong>Ever Since:</strong> ${age(pet.birthYear)}</p>
    ${pet.favFoods ? foods(pet.favFoods) : ""}
    </div>
  `;
}

document.getElementById("app").innerHTML = `
  <h1 class="app-title">Our Branches (${petsData.length} results)</h1>
  ${petsData.map(petTemplate).join("")}
  <p class="footer">These ${petsData.length} cities were added recently. Check back soon for updates.</p>
`;

    </script> 
     




<!--Our Branch-->



<!--Our Branch-->

















    
    


 
</body>
</html>