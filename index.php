<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Olive Ivory</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
.contactbar a{
	text-decoration: none;
	color:white;
}
.contactbar a:hover{
	color:white;

}
.dropdown li{
	list-style: none;

}
.dropdown li :hover{
	background:rgba(210,210,210,0.8);
	
	
}
.dropdown li a{
	text-decoration: none;
	color:black;
}
.dropdown li a:hover{
	color:black;
}
.bar1, .bar2, .bar3 {
              width: 35px;
              height: 5px;
              background-color: #fff;
              margin: 6px 0;
              transition: 0.4s;
            }
.black{
	background-color: black;
}
.margin-negative{
	margin-top:-10px;
}
.navbar-dark .nav-link{
	color:white !important;
}
.no-focus:focus{
	outline:none !important;
}
.navbar{
	transition: 1s padding ease-in;
}
.dropdown-menu{
	top:30px!important;
	margin-top:2px;
}
/*AboutIntro*/
.aboutintro{
    margin-top: 10px;
    width: 100%;
    background-color: gray;
    background-image: url('images/AboutBack.jpg');
    height: 520px;
    text-align: center;
    padding-top: 50px;
}
.introbox{
    background-color: white;
    max-width: 320px;
    margin: 0 auto;
}
.introbottom{
    background-color: #333;
    color: white;
    padding: 20px;
}
.introbottom a{
    text-decoration: none;
    color: white;
    border: 1px solid gold;
    padding: 10px 50px;
    white-space: nowrap;
}

/* Gallery */
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
  text-align:center;
  padding: 0 20px;
}
.menu a {
  
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:left;
  width:80%;
  padding:0 10%;
  text-align: justify;
  color:white;
  letter-spacing: .05em;
  font-family: montserratlight , sans-serif;
  line-height: 170%
  font-size:2vw;
}
.left {
  background-color:white;
  float:left;
  width:20%;
  padding:30px;
  margin-top:7px;
  text-align:center;
  text-shadow: 10px;
  font-size:1em;
}
    .column {
  float: left;
 
  width: 25%;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .left ,ul,li,.column,.row{
    width:100%;

  }
  
  
}

/*Amenities*/
.amenities {
        background-color: #ddd;
    }
    .amenities>div{
        display: inline-block;
        width: 19%;
        text-align: center;
        margin: 30px 0;
    }
    @media screen and (max-width: 670px){
        .amenities>div{
            display: block;
            width: 100%;
            margin: 0;
            padding: 10px 0;
        }
    }

    /**********************************************************************/
        .column1 {
  float: left;
  padding: 5px;
  width: 31%;
}
.row1::after {
  content: "";
  clear: both;
  display: table;
}
.info1 {
  text-decoration: none;
  color: white;
  display: inline-block;
  cursor: default;
}
.info1 * {
  color: white;
}
.fab {
  color: white;
}
.google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .column1,.row1,.info1,.google-maps{
    width:100%;

  }
  
  
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="contactbar p-1 black">
            <div class="contactleft">
                <a href="phone:9876543210" id="phone"><i class="fa fa-phone"></i> 9876543210</a>
                <a href="mail:admin@email.com" id="email"><i class="fa fa-envelope"></i> admin@email.com</a>
            
            <div class="contactright float-right">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-square ml-1"></i></a>
             <a href="https://www.google.com"><i class="fab fa-google-plus ml-1"></i></a>
             <a href="https://www.twitter.com"><i class="fab fa-twitter ml-1"></i></a>
            </div>
        </div>	
    </div>
 <nav class="navbar navbar-expand-md py-4 bg-dark navbar-dark sticky-top">
   <button class="  mr-auto navbar-toggler no-focus " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   	<img class="" src="http://assets.limetray.com/assets/image_manager/uploads/4697/hamburger-icon.png" height="50">
  </button><!-- Brand -->
  <a href="#" class=" d-lg-none d-md-none "><img src="https://tajindiancuisine.com/wp-content/uploads/2018/04/taj_logo-0418.png" height="70" id="logo"/></a>

  <!-- Toggler/collapsibe Button -->
 

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto  ">
      <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Hotel
      </a>
      <div class="dropdown-menu">
      	<a class="dropdown-item" href="#">News</a>
                        <a class="dropdown-item" href="#">Gallery</a>
                        <a class="dropdown-item" href="#">About Us</a>
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">Offers</a>
        
      </div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Rooms
      </a>
      <div class="dropdown-menu">
        				<a class="dropdown-item" href="#">Economy</a>
                        <a class="dropdown-item" href="#">Standard</a>
                        <a class="dropdown-item" href="#">Deluxe</a>
                        <a class="dropdown-item" href="#">Presidential</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Restaurants
      </a>
      <div class="dropdown-menu">
        				<a class="dropdown-item" href="#">Restaurant1</a>
                        <a class="dropdown-item" href="#">Restaurant1</a>
                        <a class="dropdown-item" href="#">Restaurant1</a>
                        
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Business
      </a>
      <div class="dropdown-menu">
        				<ul>
                        <li><a href="#">Conference</a></li>
                        <li><a href="#">Coffee Break</a></li>
                        <li><a href="#">Catering</a></li>
                        <li><a href="#">Breakfasts</a></li>
                        <li><a href="#">Banquet</a></li>
                    </ul>
      </div>
    </li>
    <a href="#" class="margin-negative py-1 d-none d-lg-block d-md-block"><img src="https://tajindiancuisine.com/wp-content/uploads/2018/04/taj_logo-0418.png" height="70" id="logo"/></a>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Events
      </a>
      <div class="dropdown-menu">
        				<ul>
                        <li><a href="#">Wedding Reception</a></li>
                        <li><a href="#">Anniversary</a></li>
                        <li><a href="#">Prom</a></li>
                        <li><a href="#">Bachelor Party</a></li>
                        <li><a href="#">Family Events</a></li>
                    </ul>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Amenities
      </a>
      <div class="dropdown-menu">
        				<ul>
                        <li><a href="#">Gym</a></li>
                        <li><a href="#">Swimming Pool</a></li>
                        <li><a href="#">Bistro</a></li>
                        <li><a href="#">Cafes</a></li>
                    </ul>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        Location
      </a>
      <div class="dropdown-menu">
        				<ul>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Sightseeing</a></li>
                        <li><a href="#">Attractions</a></li>
                        <li><a href="#">Events</a></li>
                    </ul>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
      
    </ul>
  </div> 
</nav> 
<!--<div class="mt-4" style ="height:1200px; background:black; width:100%;">
</div>-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/home.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/home.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/home.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!------------------------------------------------------------------------------------------>

<div class="aboutintro">
        <div class="introbox">
            <div class="introtop">
                <h1>Olive Ivory</h1>
                <p>Combining traditions with modernity through generations</p>
            </div>
            <div class="introbottom">
                <p>ICON</p>
                <p>Our jewel of the 19th century architecture is located in the very centre of Lublin, next to the Litewski Square, only 350 meters from the Old Town. Comfortable rooms and suites, an elegant restaurant, a cafe and a gym, as well as a rich conference offer - it's only a fraction of what we have to offer. Let's Meet in the centre of Lublin!</p>
                <a href="#">READ MORE</a>
            </div>
        </div>
    </div>
<!------------------------------------------------------------------------------------------>
<div class="row ">
   <div class="column">
    <img src="./images/home.jpg" style="width:100%">
   </div>
   <div class="column">
    <img src="./images/home1.jpg"style="width:100%">
   </div>
   <div class="column">
    <img src="./images/home2.jpg"  style="width:100%">
   </div>
   <div class="column">
    <img src="./images/home3.jpg"  style="width:100%">
   </div>
  </div> 
  <div class="amenities">
        <div><i class="fas fa-wifi"></i><br/>Free Wifi</div>
        <div><i class="fas fa-dumbbell"></i><br/>Gym</div>
        <div><i class="fas fa-phone"></i><br/>24/7 Room Service</div>
        <div><i class="fas fa-car"></i><br/>Valet Parking</div>
        <div><i class="fas fa-tshirt"></i><br/>Laundry</div>
  </div>

  <!---------------------------------------------------------------------------------------------------Footer--->
  <div class="row1" style="background-color:  #333;">
  <div class="column1">
        <h1><b><p style="color:white">Address</p></b></h1>
        <p style="color:white">Chaadar Road<br>Takia Colony<br>Palawa City</p>
        <p style="color:white">Mumbai-144111</p>
  </div>
  <div class="column1">
    <h1><b><p style="color:white">Contact Us</p></b></h1>
    <div class="info1">
    <a href="tel:+918360806758"><i class="fas fa-phone"></i> +91 8360806758</a><br>
    <a href="mailto:jashan113114@gmail.com"><i class="far fa-envelope"></i> admin@hotel.com</a></div><br><br><br>
    <a href="https://www.facebook.com"><i class="fab fa-facebook fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.google.com"><i class="fab fa-google-plus fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.twitter.com"><i class="fab fa-twitter fa-lg"></i></a>
  </div>
  <div class="column1">
  <h1><b><p style="color:white">Location</p></b></h1>
  <div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.185833993463!2d72.81799441472788!3d18.967398587150342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce6cf5d15557%3A0x800a8ea61fa25eb!2sPalava+City!5e0!3m2!1sen!2sin!4v1550609798611" width="400" height="250" frameborder="0" style="border:0" ></iframe></p>
  </div>
  </div>
  </div>
  </div>
  </div>
</body>
<script>
	$(window).on('scroll', function () {
    if ($(this).scrollTop() > 30) {
    	console.log("feel")
        
            $('.navbar').removeClass('py-4');
            $('.navbar').addClass('py-2');
        
    } else {
    	console.log("feelnot")
        if ($('.navbar').hasClass('py-2')) {
            $('.navbar').removeClass('py-2');
            $('.navbar').addClass('py-4');
        }
    }
});
	</script>
</div>
</div>
</html>
