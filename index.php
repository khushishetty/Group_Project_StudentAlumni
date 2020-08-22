<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Alumni Management System</title>
    <style>
    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    </style>
    
</head>
<body>
        <!-- Slideshow container -->
    <div class="slideshow-container" style="padding-top:20px">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/alumniImage1.jpg" style="width:100%;height : 555px">
        <div class="text"><p>WELCOME TO THE ALUMNI ASSOCIATION</p></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/alumni5.jpg" style="width:100%;height : 555px">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/alumni4.jpg" style="width:100%;height : 555px">
        <div class="text">Caption Three</div>
      </div>
    </div>
    <br>
    

    <div class="container">
        <!--header-->

        <!--top navigation bar-->
        <nav class="topnav" id="myTopnav">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Events</a>
            <a href="#about">Gallery</a>
            <a href="#about">New Alumni</a>
            <a href="Contact.php">Contact</a>
            <a href="#">My Account</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a></nav>
    </div>
    <br><br>
    <!--
    <div class="row">
      <div class="column" style="width:40%;background-color:#f2f2f2">
        <p style="font-size : 15px ;font-weight:500">Alumni today are the best source of jobs and knowledge capital for your institutes,So get them back for signing up for alumni today!!</p>
      </div>
      <div class="column" style="width:60%;background-color:#f2f2f2">
        <marquee behavior="scroll" direction="left" class="scrollingText" 
             style="font-size: 50px;
            font-weight: 600;
            font-style: oblique;">
        Welcome to the NITTE Alumni Association</marquee>
      </div>
    </div>
    -->
    <div class="row">
      <div class="column" > 
        <div class="card">
           <img src="images/grad1.jpg" style="width:100%">
          </div>
      </div>
      <div class="column" >
        <div class="card">
          <marquee behavior="scroll" direction="left" class="scrollingText" 
             style="font-size: 50px;
            font-weight: 600;
            font-style: oblique;">
        Welcome to the NITTE Alumni Association</marquee>
          <p><br><br><br>
          Wenamitaa, NMAMIT alumni association is for all alumni of the Institute. The Alumni Association strives to promote an enduring relationship between alumni and their alma mater. It also facilitates and nurtures lasting friendships through annual meetings. It aims at reconnecting Alumni with the alma mater and with each other. It creates opportunities for alumni to visit their alma mater, experience nostalgia, feel at home, network to support each other; observe the changes in the institute and share their progressive ideas towards the growth of the Institution.</p>
        </div>
        </div>
     </div>

    <section class="stat" id="stats">
        <div class="content-box">
        <br><br>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-md-offset-2">
                    <div class="stat-items">
                        <h2><span class="counter text-center">30</span><span>+</span>
                        </h2>
                        <p>Years Of Legacy</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="stat-items">
                        <h2><span class="counter text-center">15000</span><span>+</span>
                        </h2>
                        <p>Alumni</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
      <!-- The grid: three columns -->
        <div class="rowgrid">
          <div class="columngrid" onclick="openTab('b1');" style="background:#f2f2f2;color:black">Our Mission</div>
          <div class="columngrid" onclick="openTab('b2');" style="background:#4CAF50;">Our Vision</div>
          <div class="columngrid" onclick="openTab('b3');" style="background:black">&nbsp;&nbsp;About</div>
        </div>
        
        
        <!-- The expanding grid (hidden by default) -->
        <div id="b1" class="containerTab" style="background:#f2f2f2">
          <!-- If you want the ability to close the container, add a close button -->
          <span onclick="this.parentElement.style.display='none'" class="closebtn" style="color:black">x</span>
          <h2 style="color:black">MISSION</h2>
          <p style="color:black; font-size:17px">
              To develop NMAM Institute of Technology, Nitte, as Center of Excellence by imparting Quality Education to generate Competent, Skilled and Humane Manpower to face emerging Scientific, Technological, Managerial and Social Challenges with Credibility, Integrity, Ethics and Social Concern</p>
        </div>

        <div id="b2" class="containerTab" style="display:none;background:#4CAF50">
          <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
          <h2>VISION</h2>
          <p style="font-size:17px">Pursuing Excellence, Empowering people, Partnering in Community Development</p>
        </div>

        <div id="b3" class="containerTab" style="display:none;background:black">
          <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
          <h2>ABOUT</h2>
          <p  style="font-size:17px">NMAM Institute of Technology was established in 1986 and is affiliated to the Visvesvaraya Technological University, Belagavi. The institute is recognised by the All India Council for Technical Education, New Delhi and accredited by National Assessment & Accreditation Council [NAAC] with 'A' grade with a CGPA of 3.11 out of 4 till 20th October 2022. Seven UG Programs i.e., BE in Biotechnology, Civil Engineering, Computer Science & Engineering, Electrical & Electronics Engineering, Electronics & Communication Engineering, Information Science & Engineering and Mechanical Engineering are accredited by NBA, New Delhi under Tier - I category till 30th June 2021. The institution has been granted Academic Autonomy under the Visvesvaraya Technological University from 2007-08 and certified to the ISO 9001:2015 standards for quality education by NVT Quality Certifications (ANAB accredited).</p>
        </div> <br><br><br> 
    
        <div class="footer" style="padding-top:0">
          <p>Nitte, Karkala.</p>
        </div>
    
    <script src="index.js"></script>
    <script src="jquery.counterup.min.js"></script>
    <script src="jquery.waypoints.min.js"></script>
    
    <script>
    jQuery(document).ready(function(){
        $('.counter').counterUp({
    delay: 10,
    time: 3000
        }); 
    })
    
    </script>
</body>
</html>