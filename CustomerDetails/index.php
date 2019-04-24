<?php
session_start();

if(isset($_POST["email"], $_POST["phone"])){
  include '../packages/include/DB-Config.php';
  
  $query = 'INSERT into bookings(booking_email, booking_phone, room_id, room_quantity, created_at, updated_at) values("' . $_POST["email"] . '","' . $_POST["phone"] . '",1, 1, NULL, NULL)';
  if(!mysqli_query($conn, $query)){
    die('Error in Booking. Please Try Again' . mysqli_error($conn));
  }

  $query = 'update rooms set room_left = room_left - 1 where room_id = $_POST["room_id"]';
  $result = mysqli_query($conn, $query);

  $query = 'select * from bookings where booking_email="' . $_POST["email"] . '"';
  $result = mysqli_query($conn, $query);
  if($row = mysqli_fetch_assoc($result)){
    $bookingid = $row['booking_id'];
  }

  foreach($_POST["name"] as $person){
    $query = 'insert into guests(booking_id, guest_name, created_at, updated_at) values(' . $bookingid . ',"' . $person . '", NULL, NULL)';
    if(!mysqli_query($conn, $query)){
      die('Error in Booking. Please Try Again' . mysqli_error($conn));
    }
  }

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['phone'] = $_POST['phone'];
  
  header('location: ../RoomConfirmation');
}


?>
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

/*------------------------------STYLE OF CURRENT PAGE INDICATOR*/
.current-page{
            background-color: #eee;
            height: 40px;
        }
        .current-page p{
            padding: 10px;
        }
        /*--------------------------STYLE END OF CURRENT PAGE INDICATOR*/

        /*---------------------------------------------STYLE OF DETAILS*/
        .personcolumn{
            display: inline-block;
        }
        .details input[type='submit']{
            margin-top: 10px;
        }
        /*--------------------------------------END OF STYLE OF DETAILS*/

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

<!---------------------------------------------------CURRENT PAGE INDICATOR-->
<div class="current-page">
        <p>Home &rarr; Reservation</p>
    </div>
    <!--------------------------------------------END OF CURRENT PAGE INDICATOR-->

    
    <!---------------------------------------------------------Reservation Form-->
    <form method="POST" onsubmit="return checkotp()">
      <div class="details">
      <div class="mx-auto" style="max-width:800px;">
        <h1>Customers Information</h1>
        <hr>
          <?php
            for($i = 1; $i <= $_SESSION['people']; $i++){
            echo '<div class="form-group mx-auto">';
            echo '    <div class="input-group">';
            echo '        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div><input class="form-control" type="text" name="name[' . $i . ']" required="" placeholder="Person '. $i .' Name" id="from-name"></div>';
            echo '    </div>';
            }
          ?>
        <div class="form-group mx-auto"><label for="from-email">Email</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                <input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email">
            </div>
        </div>
        <div class="form-group mx-auto"><label for="from-phone">Phone</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                <input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone">
                <button class="btn btn-success" style="margin-left: 5px;" onclick="event.preventDefault();window.location.href='/CustomerDetails/GetOTP.php';">Get OTP</button>
            </div>
            <input class="form-control" type="text" name="otp" required="" placeholder="OTP" maxlength="4" minlength="4" id="otp" style="width: 30%;margin-top: 5px;">
            <div class="alert alert-danger" id="otperror" style="display:none">Invalid OTP</div>
              <button class="btn btn-primary" type="submit" style="margin: 10px 0;">Continue Booking</button>
          </div>
    </div>
    </form>
    <!--------------------------------------------------End of Reservation Form-->


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
        <a href="mailto:jashan113114@gmail.com"><i class="far fa-envelope"></i> admin@hotel.com</a>
    </div>
    <br><br><br>
    <a href="https://www.facebook.com"><i class="fab fa-facebook fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.google.com"><i class="fab fa-google-plus fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="https://www.twitter.com"><i class="fab fa-twitter fa-lg"></i></a>
  </div>
  
  <div class="column1">
    <h1><b><p style="color:white">Location</p></b></h1>
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.185833993463!2d72.81792063761478!3d18.967398587150342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce6cf5d15557%3A0x800a8ea61fa25eb!2sPalava+City!5e0!3m2!1sen!2sin!4v1550609798611" width="400" height="250" frameborder="0" style="border:0" ></iframe></p>
    </div>
  </div>
  <!-------------------------------------------------------------------------------END OF FOOTER-->






<script>
	$(window).on('scroll', function () {
    if ($(this).scrollTop() > 30) {
            $('.navbar').removeClass('py-4');
            $('.navbar').addClass('py-2');
        
    } else {
        if ($('.navbar').hasClass('py-2')) {
            $('.navbar').removeClass('py-2');
            $('.navbar').addClass('py-4');
        }
    }
});

<?php
    $otp="";
    if(isset($_SESSION['OrigOTP'])){
        $otp = $_SESSION['OrigOTP'];
    }
?>
function checkotp(){
    if(document.getElementById("confirmotp").value == <?php echo $otp; ?> ){
        return true;
    }
    else{
        document.getElementById("otperror").style.display = "block";
        return false;
    }
}
</script>
</body>
</html>