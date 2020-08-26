<!DOCTYPE html>
<html lang="en">
 <head>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css"/>     
     
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>
 <body>
    
     
    <main>
    <header>
    
        <nav id="cssmenu">
         <ul>
             <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> it161</a></li>
             <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
             
             <!-- drop down menu for research pages -->
              <li><a href="#"><i class="fa fa-fw fa-bars"></i> Research Topics</a>
                <ul>
                 <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> Social Media Optimization</a></li>
                 <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                 </ul>
             </li>
              <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Lightbox II Gallery</a></li>
             <!-- drop down menu for google pages -->
            <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google</a>
              <ul>
               <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
               <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
               <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
              </ul>
            </li>
         <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Mary</a></li>
          </ul>
         </nav>
        	
        <style>
            
        .inner {
       margin-left: 50px;
             }    

        .Main {
        background-color: #f7eee9;
        }
        .Header--bottom {
        background-color: #f7eee9;
        }
            
        </style>
    
       
     </header>
        <!-- START LEFT COLUMN -->
      
            <h2 style="color: #4d4844"> Contact Mary </h2>
            
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
    </main>
    
        </div>
 </body>
</html>