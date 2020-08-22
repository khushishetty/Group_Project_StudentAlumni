<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
          box-sizing: border-box;
        }
        body {
          font-family: Arial, Helvetica, sans-serif;
            font-style: oblique;
        }
        

        .topnav {
          background-color: #333;
          overflow: hidden;
          width:100%;
          position: fixed;
          margin: 0;
            top: 0;
            left: 0;
            align-content: center;
            align-items: center;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 20px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
          background-color: #4CAF50;
          color: white;
        }
        
       .topnav .icon {
          display: none;
           top: 0;
        }
        

        /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
        @media screen and (max-width: 700px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }

        /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
        @media screen and (max-width: 700px) {
          .topnav.responsive {top: 0;position: fixed}
          .topnav.responsive a.icon {
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

        

        /* Style inputs */
        input[type=text], select, textarea {
          width: 60%;
          padding: 12px;
          border: 1px solid black;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        input[type=email]{
            width: 60%;
          padding: 12px;
          border: 1px solid black;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }

        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        /* Style the container/contact section */
        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
          float: left;
          width: 60%;
          margin-top: 6px;
          padding: 20px;
        }
        .label{
            font-size: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        
        /* Add a hover effect if you want */
        .fa:hover {
          opacity: 0.7;
        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
          background: #3B5998;
          color: white;
            padding: 20px;
          font-size: 30px;
          width: 70px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
        }

        /* Twitter */
        .fa-twitter {
          background: #55ACEE;
          color: white;
            padding: 20px;
          font-size: 30px;
          width: 70px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
        }
        .fa-instagram {
          background: #ea4c89;
          color: white;
            padding: 20px;
          font-size: 30px;
          width: 70px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
        }
        .fa-youtube {
          background: #bb0000;
          color: white;
            padding: 20px;
          font-size: 30px;
          width: 70px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
            
        }
        .fa-google {
          background: #bb0000;
          color: white;
            padding: 20px;
          font-size: 30px;
          width: 70px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
            
        }

    </style>   
    
</head>
<body>
    
        <nav class="topnav" id="myTopnav">
            <a href="index.php">Home</a>
            <a href="#contact">Events</a>
            <a href="#about">Gallery</a>
            <a href="#about">New Alumni</a>
            <a class="active" href="Contact.php">Contact</a>
            <a href="#">My Account</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a></nav>  

    <div class="contactContainer" style="background-color:#f2f2f2">
        
      <div style="text-align:center;">
        <h1 style="font-size:40px;text-decoration: underline;"><br><br>Contact Us</h1>
          <p style="font-size:17px"><br>
            NMAM Institute of Technology
            Nitte, Karkala Taluk,
            Udupi - 574110
            Karnataka, India<br>
            Phone : +91 - 8258 - 281039&nbsp;&nbsp;
            E-mail : principal_nmamit@nitte.edu.in</p>
      </div>
      <div class="row">
        
        <div class="column" style="border-right: 4px solid black;">
            <?php
                include "database_connect.php";
                ?>
          <form action="/addContact.php">
            <label for="fname" style="font-size: 20px;">First Name</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="Your first name"><br>
            <label for="lname" style="font-size: 20px;" >Last Name</label><br>
            <input type="text" id="lastname" name="lastname" placeholder="Your last name"><br>
              <label for="email"  style="font-size: 20px;">E-mail</label><br>
              <input type="email" placeholder="Your E-mail" id="email" name="email"><br>
            <label for="usertype" style="font-size: 20px;">User-type</label><br>
            <select id="usertype" name="usertype" >
              <option value="Alumni">Alumni</option>
              <option value="Student">Student</option>
              <option value="Staff">Staff</option>
            </select><br>
            <label for="message" style="font-size: 20px;">Message</label><br>
            <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea><br>
            <input type="submit" value="Submit">
          </form>
            <?php
            $mysqli->close();
            ?> 
        </div>
        
          <div class="column" style="width:40%;text-align:center">
             <h2>Or contact us through social media.</h2>
              <a href="https://nmamit.nitte.edu.in/" class="fa fa-google"></a><br>
              <a href="https://www.facebook.com/NITTEedu" class="fa fa-facebook"></a><br>
              <a href="https://twitter.com/aboutnitte" class="fa fa-twitter"></a><br>
              <a href="https://www.instagram.com/nitteeducation/" class="fa fa-instagram"></a><br>
              <a href="https://www.youtube.com/channel/UCNln_L2YkP-QCFLfIDumNZQ" class="fa fa-youtube"></a><br>
          </div>
          
      </div>
    </div>
    
    <script src="contact.js"></script>
    
    
    
</body>
</html>