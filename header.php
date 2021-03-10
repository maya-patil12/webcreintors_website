<?php include "link.php"?>

<style>
 .topnav {
    overflow: hidden;
  }
  .topnav a {
    float: left;
    display: block;
    color: blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav a:hover {
    background: transparent;
    color: black;
  }
  .topnav a.active {
    color: white;
    background:transparent;
  }
  .topnav .icon {
    display: none;
  }
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
:focus{
    outline: 0px solid transparent !important;
}

</style>
        <div class="container-fluid header-up laptop">
            <!-- <div> -->
                <div style="padding:0px" class="row">
                    <div class="col-md-2">
                        <p class="header"><i class="fa fa-phone text-center head-icon" aria-hidden="true"></i> &nbsp 9845755622</p>
                    </div>
                    <div class="col-md-3">
                        <p class="header"><i class="fa fa-envelope text-center head-icon" aria-hidden="true"></i> &nbsp rmsalumni@gmail.com</p>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2">
                        <p class="header">Follow us : &nbsp<i class="fa fa-facebook" aria-hidden="true"></i>&nbsp &nbsp<i class="fa fa-twitter" aria-hidden="true"></i></p>
                    </div>
                    <div class="col-md-1">
                        <a style="background-color:white" href="login.php"><button style="background-color:white;color:#a43134;" class="btn" type="button">Log In</button></a>
                    </div>
                    <div class="col-md-1">
                        <a href="donation.php"><button  style="background-color:white;color:#a43134;" class="btn" type="button">Donation</button></a>
                    </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
            <div class="mobile text-right">
                <a style="margin:10px;color:white;" href="login.php"><button class="btn" type="button">Log In</button></a>
                <a style="margin:10px;color:white" href="donation.php"><button class="btn" type="button">Donation</button></a>
            </div>
        <nav style="background-color:white" class="navbar navbar-expand-sm laptop sticky-top">
                <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img style="width:100px;height:70px" src="images/logo1.jpg">
                  
                </a>
                <button style="padding:10px;color:white" id="toggle" class="btn navbar-toggler" data-toggle="collapse" data-target="#nevigation"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Menu
                </button>
                <ul class="navbar-nav d-flex justify-content-center collapse navbar-collapse" id="nevigation">
                <li class="nav-item">
                    <a id="home" class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        About Us
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">Few who made us proud</a>
                        <a class="dropdown-item" href="#">Monument</a>
                        <a class="dropdown-item" href="#">School Crest</a>
                        <a class="dropdown-item" href="#">Glimpses of School</a>
                        <a class="dropdown-item" href="#">The Grace</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="contact" class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a id="facility" class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a id="aboutus" class="nav-link" href="#">Image Gallery</a>
                </li>
                <li class="nav-item">
                    <a id="achieve1" class="nav-link" href="#">Members</a>
                </li>
               
                <li class="nav-item">
                    <a id="gallery" class="nav-link" href="#">Tickets</a>
                </li>
                </ul>
                <a class="navbar-brand" href="index.php">
                    <img style="width:100px;height:70px" src="images/logo2.jpeg">
                </a>
            </div>
            <!-- <div class="laptop">
                <a style="margin:10px;color:white;font-size:20px" href="login.php"><button class="btn" type="button">Log In</button></a>
                <a style="margin:10px;color:white;font-size:20px" href="donation.php"><button class="btn" type="button">Donation</button></a>
            </div> -->
    </nav>

    <div class="mobile">
        <div style="background-color:#a43134;" class="topnav mobile" id="myTopnav">
            <div>
                <a href="index.php" class="active">
                
                    <img style="width:100px;height:70px" src="images/logo1.jpg">
                  
            
                <!-- <img style="width:65px;height:65px;" class="img-fluid" src="images/Logo-2.png">  -->
                <!-- <p>From where the success<br/>story begins...</p> -->
                </a>
            </div>
            <a id="gallery2" style="color:white;font-size:23px" class="nav-link" href="#">Home</a>
            <a id="reservation2" style="color:white;font-size:23px" class="nav-link" href="#">About Us</a>
            <a id="events2" style="color:white;font-size:23px" class="nav-link" href="#">Events</a>
            <a id="about2" style="color:white;font-size:23px" class="nav-link" href="#">News</a>
            <a id="menu2" style="color:white;font-size:23px" class="nav-link" href="#">Gallery</a>
            <a id="gallery2" style="color:white;font-size:23px" class="nav-link" href="#">Membes</a>
            <a id="gallery2" style="color:white;font-size:23px" class="nav-link" href="#">Tickets</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <button style="background-color:white;color:#a43134;border:1px solid #eb8242;" class="btn" type="button"><i class="fa fa-2x fa-bars"></i></button>
            </a>
            
        </div>
    </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>