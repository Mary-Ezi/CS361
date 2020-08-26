<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Mary Eyvazi's Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <style type="text/css">
         
         /* start global page styles */
        * {padding:0; margin:0;}
		html {background-color:#ccc;}
		body {
			margin:auto; /* center in html element */
            padding:1%;
			}
		p,div {margin-bottom:0.5em;}
		
        .inner {
  margin-left: 50px;
}
         
        /* end global page styles */
		
         
		/* start reCAPTCHA styles */
		
		/* writes to small text above reCAPTCHA upon failure */
		.dateFeedback{
			font-style:italic;
			font-size:70%;
			font-weight:bold;
			color:#f00;
		}
        input:required {
              border: 1px solid red;
        }

         input:optional, textarea:optional {
             background-color:#f1f1f1;
             border:1px solid #ccc;
        }

        input[type="submit"], input[type="button"] {
          background-color: #fff;
          border-radius: 4px;
          border: solid 1px #ccc;
          padding: 0.3em 0.5em;
        }

        fieldset {
          border: 1px solid #ccc;
          max-width: 350px;
        }

        legend {
          margin-left: 0.5em;
          padding: 0.2em 0.5em;
          border-left: 1px solid #ccc;
          border-right: 1px solid #ccc;
        }
        
        /* end reCAPTCHA styles */
    </style>
 </head>
 <body>
     <header>
     <h1>Mary Eyvazi's Contact Form</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php" class="active">Contact Mary</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
      
    <div class="inner">
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "maryam.eywazi@gmail.com";  //place your/your client's email address here
        $toName = "Mary"; //place your client's name here
        $website = "IT161 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </div>

       
     <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Mary Eyvazi</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
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
     
 </body>
</html>