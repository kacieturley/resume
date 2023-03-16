
<!DOCTYPE html>
<html>
  <head>
    <title>Resume</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resume.css">
    <link rel="stylesheet" href="fontface.css">
    <script src="https://kit.fontawesome.com/3b4d3f321b.js" crossorigin="anonymous"></script>   
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .row-padding img {margin-bottom: 12px}
    .sidebar {width: 120px;background: #222;}
    #main {margin-left: 120px}
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>
<body class="black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="sidebar bar-block small hide-small center">
  <!-- Avatar image in top left corner -->
  <img src="Profile.jpg" alt="Profile Pic" style="width:100%">
  <a href="#" class="bar-item button padding-large black">
    <i class="fa fa-duotone fa-house large"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="bar-item button padding-large hover-black">
    <i class="fa fa-user large"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="bar-item button padding-large hover-black">
    <i class="fa fa-eye large"></i>
    <p>MY WORK</p>
  </a>
  <a href="#contact" class="bar-item button padding-large hover-black">
    <i class="fa fa-envelope large"></i>
    <p>CONTACT</p>
  </a>
    <a href="https://www.facebook.com/kacieturley" target="_blank">
        <i class="fa fa-facebook medium"></i>
    </a>
    <br>
    <a href="https://www.instagram.com/kaciet4" target="_blank">
        <i class="fa fa-instagram medium"></i>
    </a>
    <br>
    <a href="https://www.linkedin.com/in/kacie-turley-5878aa220/" target="_blank">
        <i class="fa fa-linkedin hover-opacity"></i>
    </a>
    <br>
    
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="top hide-large hide-medium" id="myNavbar">
  <div class="bar black opacity hover-opacity-off center small">
    <a href="#" class="bar-item button" style="width:25% !important">HOME</a>
    <a href="#about" class="bar-item button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="bar-item button" style="width:25% !important">MY WORK</a>
    <a href="#contact" class="bar-item button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="padding-large" id="main">
  <!-- Header/Home -->
  <header class="container padding-32 center black" id="home">
    <h1 class="jumbo">Kacie Turley</h1>
    <p>Student at the University of Arizona</p>
    <img src="Profile.jpg" alt="Self" class="image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="content justify text-grey padding-64" id="about">
    <h2 class="text-light-grey">Kacie Turley</h2>
    <hr style="width:200px" class="opacity">
    <p>I was born and raised in Wisconsin, now living in Chandler, Arizona and pursuing a bachelor's degree in Applied Computing with an emphasis in Information Management. 
    </p>
    <h3 class="padding-16 text-light-grey">My Skills</h3>
    <p class="wide">Networking</p>
    <div class="white">
      <div class="dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="wide">Pythom Programming</p>
    <div class="white">
      <div class="dark-grey" style="height:28px;width:80%"></div>
    </div>
    <p class="wide">Painting and Creative Design</p>
    <div class="white">
      <div class="dark-grey" style="height:28px;width:75%"></div>
    </div><br>
      

    <button class="button light-grey padding-large section">
    <a href="Resume-KacieTurley.pdf" target="_blank">
          <i class="fa fa-download"></i>Download Resume
    </a>
    </button>
      <br>
       <button class="button light-grey padding-large section">
    <a href="https://www.instagram.com/art.bykacie/" target="_blank">
        <i class="fa fa-download"></i>Check out my Artwork</a></button>
    
    <!-- Grid for pricing tables -->
    <div class="padding-64 content" id="photos">
    <h2 class="text-light-grey">Work With Me</h2>
    <hr style="width:200px" class="opacity">
    <div class="row-padding" style="margin:0 -16px">
      <div class="half margin-bottom">
        <ul class="ul white center opacity hover-opacity-off">
          <li class="dark-grey xlarge padding-32">Artwork</li>
          <li class="padding-16">Canvas or Denim</li>
          <li class="padding-16">Fully Customizable</li>
          <li class="padding-16">Acrylic</li>
          <li class="padding-16">Haind Painted</li>
          <li class="light-grey padding-24">
            <button class="button white padding-large hover-black"><a href="mailto:kacieturley@gmail.com">Message Me Here</a></button>
          </li>
        </ul>
      </div>

      <div class="half">
        <ul class="ul white center opacity hover-opacity-off">
          <li class="dark-grey xlarge padding-32">Web Design</li>
          <li class="padding-16">Web Design</li>
          <li class="padding-16">Photography</li>
          <li class="padding-16">Creative Insight</li>
          <li class="padding-16">Endless Support</li>
          <li class="light-grey padding-24">
              <button class="button white padding-large hover-black"><a href="mailto:kacieturley@gmail.com">Message Me Here</a></button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
   
  
  <!-- Portfolio Section -->
  <div class="padding-64 content" id="photos">
    <h2 class="text-light-grey">My Projects</h2>
    <hr style="width:200px" class="opacity">
      <h4><style="width:100%"></style>Clicking each slide will open project in new tab</h4>
      <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <a href="Website/MovieReview/moviereview.html" target="_blank">
        <img src="MovieReview.jpg" style="width:100%"></a>
    <div class="text">Movie Review Site</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <a href="https://kacieturley.wixsite.com/artbykacie" target="_blank">
        <img src="PersonalBlog.jpg" style="width:100%"></a>
    <div class="text">Personal Blog/Site</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <a href="https://arizona.digication.com/kacieturley/about-me/published" target="_blank">
        <img src="ePortfolio.jpg" style="width:100%"></a>
    <div class="text">ePortfolio</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
        
      <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
      
      <!-- Grid for photos -->
    <div class="padding-64 content" id="photos">
    <h2 class="text-light-grey">My Certificates</h2>
    <hr style="width:200px" class="opacity">
    <div class="row-padding" style="margin:0 -16px">
      <div class="half">
        <img src="Certificates/Probability.jpg" style="width:75%" hover="-webkit-transform:scale(2,2)">
        <img src="Certificates/ProgrammingforEverybody.jpg" style="width:75%">
        <img src="Certificates/PythonDataStructures.jpg" style="width:75%">
      </div>

      <div class="half">
        <img src="Certificates/CCNA-Intro.jpg" style="width:75%">
        <img src="Certificates/CCNA-Switching.jpg" style="width:75%">
        <img src="Certificates/CCNA-Enterprise.jpg" style="width:75%">
      </div>
    <!-- End photo grid -->
    </div>

  <!-- Contact Section -->
  <div class="padding-64 content text-grey" id="contact">
    <h2 class="text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="opacity">

    <div class="section">
      <p><i class="fa fa-map-marker fa-fw text-white xxlarge margin-right"></i> Chandler, AZ</p>
      <p><i class="fa fa-phone fa-fw text-white xxlarge margin-right"></i> Phone: +01 928-200-6425</p>
      <p><i class="fa fa-envelope fa-fw text-white xxlarge margin-right"> </i> Email: kacieturley@gmail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>
      
   <?php
if(isset($_POST["SubmitBtn"])){

$to = "kacieturley@gmail.com";
$subject = "Contact mail";
$from=$_POST["email"];
$msg=$_POST["msg"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>

      <form id="emailForm" name="emailForm" method="post" action="" >
      <p><input class="input padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="input padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="input padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="button light-grey padding-large" input name="SubmitBtn" type="submit" id="SubmitBtn"> 
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!--Footer-->
<footer class="content padding-64 text-grey xxlarge">
<a href="https://www.facebook.com/kacieturley" target="_blank">
  <i class="fa fa-facebook-official hover-opacity"></i>
</a>
<a href="https://www.instagram.com/kaciet4" target="_blank">
  <i class="fa fa-instagram hover-opacity"></i>
</a>
<a href="https://www.linkedin.com/in/kacie-turley-5878aa220/" target="_blank">
  <i class="fa fa-linkedin hover-opacity"></i>
</a>
<br>
    
 <!-- End footer -->
</footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>