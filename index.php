<?php
session_start();
$err = "";
if(isset($_POST['start'],$_POST['end'],$_POST['people'])){
    $start = cleaninput($_POST['start']);
    $end = cleaninput($_POST['end']);
    $people = (int)cleaninput($_POST['people']);

    $today = date('Y-m-d');

    if($start<$today){
        $err .= "<li>Start Date Should not be less than today.</li>";
    }
    if($end < $start){
        $err .= "<li>Ending date should not be Less than Start date.</li>";
    }
    if($people<1 || $people>12){
        $err .= "<li>Number of people should not exceed 12 or less than 1</li>";
    }

    if($err==""){
        $_SESSION['start'] = $start;
        $_SESSION['end'] = $end;
        $_SESSION['people'] = $people;
        header("Location: ./Reservation");
        die();
    }
}
function cleaninput($str){
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return $str;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Olive Ivory </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./css/home.css"/>
    <link rel="stylesheet" type="text/css" href="./css/styles.min.css"/>
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
 <nav class="navbar navbar-expand-md py-4 bg-black navbar-dark sticky-top">
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

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./images/home.jpg" class="d-block w-100" alt="First Slide">
        </div>
        <div class="carousel-item">
            <img src="./images/home1.jpg" class="d-block w-100" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img src="./images/home2.jpg" class="d-block w-100" alt="Third Slide">
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
    <div class="ReserveBar">
        <form method="POST" accept-charset="UTF-8"><input name="_token" type="hidden" value="94gbD0qSDWvPSTDM3LqGs2kseQh91noaRZfXr9zD">
        <input name="start" type="date">
        <input name="end" type="date">
        <select name="people"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
        <input type="submit" value="Reserve Room">
        <?php
            if($err != ""){
                echo "<br/>";
                echo '<div class="alert alert-danger"><ul>' . $err . '</ul></div>';
            }
        ?>
    </form>
</div>
    <div class="aboutintro">
    <div class="introbox">
        <div class="introtop">
            <h1>Olive Ivory</h1>
            <p>Combining traditions with modernity through generations</p>
        </div>
        <div class="introbottom">
            <p>ICON</p>
            <p>The five-star Hotel Olive Ivory is a jewel of the 20th century architecture, located in the strict centre of Palawa City, Mumbai. Because of our prestigious location, we have already been a perfect haven for 10 years both for people travelling as a tourist, as well as for business purposes .</p>
            <a href="aboutus.html">READ MORE</a>
        </div>
    </div>
</div>
    <div class="row ">
    <div class="column">
        <img src="./images/home.jpg" style="width: 100%" alt="First Image">
    </div>
    <div class="column">
        <img src="./images/home1.jpg" style="width: 100%" alt="Second Image">
    </div>
    <div class="column">
        <img src="./images/home2.jpg" style="width: 100%" alt="Third Image">
    </div>
    <div class="column">
        <img src="./images/home3.jpg" style="width: 100%" alt="Fourth Image">
    </div>
</div>
    <div class="amenities">
    <div><i class="fas fa-wifi"></i><br/>Free Wifi</div>
    <div><i class="fas fa-dumbbell"></i><br/>Gym</div>
    <div><i class="fas fa-phone"></i><br/>24/7 Room Service</div>
    <div><i class="fas fa-car"></i><br/>Valet Parking</div>
    <div><i class="fas fa-tshirt"></i><br/>Laundry</div>
</div>

    <div class="row1" style="background-color:  #333;">
    <div class="column1">
        <h3><b><p style="color:white">Address</p></b></h3><hr style="background-color: white;"/>
        <p style="color:white">Chaadar Road<br>Takia Colony<br>Palawa City</p>
        <p style="color:white">Mumbai-144111</p>
    </div>
    <div class="column1">
        <h3><b><p style="color:white">Contact Us</p></b></h3><hr style="background-color: white;"/>
        <div class="info1">
        <a href="tel:+919876543210"><i class="fas fa-phone"></i> +91 9876543210</a><br>
        <a href="mailto:admin@hotel.com"><i class="far fa-envelope"></i> admin@hotel.com</a></div><br><br><br>
        <a href="https://www.facebook.com"><i class="fab fa-facebook fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.google.com"><i class="fab fa-google-plus fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.twitter.com"><i class="fab fa-twitter fa-lg"></i></a>
    </div>
    <div class="column1">
        <h3><b><p style="color:white">Location</p></b></h3><hr style="background-color: white;"/>
        <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.185833993463!2d72.81799441472788!3d18.967398587150342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce6cf5d15557%3A0x800a8ea61fa25eb!2sPalava+City!5e0!3m2!1sen!2sin!4v1550609798611" width="400" height="250" frameborder="0" style="border:0" ></iframe></p>
    </div>
</div>

    <script src="./js/navbar.js"></script>
    <script src="./js/script.min.js"></script>
</body>
</html>
