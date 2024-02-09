
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vi-Sahay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    
</head>
  <body >
    <script defer src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    




    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">Vi-Sahay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donate1.php">Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">Alert Message</a>
        </li>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="images/img1.jpg" id="imgall"   class="d-block w-100" alt="...">
      <div style="color: #eef2e2;" class="carousel-caption d-none d-md-block">

        <h3> Vi-Sahay: A Disaster alert website <br>
        Start Where You are, Use What You have, Do What You Can </h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" id="imgall" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>By Clicking On The Below Button, You Can Send Alerts to the Nearby Colleges </h5>
        <h5>Having NSS/NCC volunteers For Their Prompt Assistance </h5>
        <button id="click1">Alert Message</button>
        <script type="text/javascript">
         document.getElementById("click1").onclick = function () {
        location.href = "message.php";
      };
    </script>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" id="imgall" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>By Clicking On The Below Button, You Will be Directed To The Donations Page </h5>
        <h5> A single rupee can help to change the world.</h5>
        <button  id="click2">Donation</button>
        <script type="text/javascript">
         document.getElementById("click2").onclick = function () {
        location.href = "donate1.php";
      };
    </script>
      </div>
    </div>
  </div>
  <button id="carouselExampleIndicators" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script>
        const myCarouselElement = document.querySelector('#carouselExampleIndicators')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
           interval: 600,
           touch: false
          })
      </script>





<div class="flexbox">
  <div class="leftside">
  <h3 id="h3">Learn About Us</h3>
    <p>
      This is an website for sending a disater alert to respective college NCC and NSS unit around a 
      specified distance to help the surviours until the rescue team comes.
    </p>
</div>
  <div class="middle">
  <h3 id="h3">Motive</h3>
    <p>
    To improve the efficiency and effectiveness of disaster response and relief operations by connecting
     trained NCC/NSS volunteers with the NDRF during times of crisis. The ultimate goal of the project is
      to reduce the impact of natural disasters on human lives, animals, and property.
    </p>

  </div>
  <div class="rightside">
    <h3 id="h3">Assistance</h3>
    <p>
    Help families and communities affected by Disasters and provide relief aid. 
    </p>
 
  </div>
</div>







<section style="background: #e3e3e3;">
<div class="main">
  <h1>Latest New Updates </h1>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img  style=" width: 57vh; height: 32vh; "  src="images/img3.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Povert Hit in Indonesia</h2>
          <p class="card_text">New high rise povert in indonesia has seen</p>
          <button class="btn1 card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img style=" width: 57vh; height: 29vh; " src="images/img1.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Modi Ji Speech on Beti Bachao</h2>
          <p class="card_text">On the day of republiic modiji has given speech on Girls favour</p>
          <button class="btn1 card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img style=" width: 57vh; height: 29vh; " src="images/img5.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Syria Earthquake Hit</h2>
          <p class="card_text">New  Caamity has begun in Syria and Turkey highest min. </p>
          <a href="https://www.aljazeera.com/features/2022/11/5/wave-of-malnutrition-woes-overwhelm-children-in-northeast-nigeria"><button class="btn1 card_btn">Read More</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img style=" width: 57vh; height: 29vh; " src="images/img21.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">WildFire in California</h2>
          <p class="card_text">The burning wood causing an high amount of carbondioxide to breathe</p>
          <a href="https://www.aljazeera.com/features/2022/11/5/wave-of-malnutrition-woes-overwhelm-children-in-northeast-nigeria"><button class="btn1 card_btn">Read More</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img style=" width: 57vh; height: 32vh; " src="images/img22.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Hurricane Disaster in Florida</h2>
          <p class="card_text">The Flood in america causing difficulty in weather.</p>
          <a href="https://www.aljazeera.com/news/2022/11/4/two-thirds-of-south-sudan-population-risk-severe-hunger-in-2023-u-n"><button class="btn1 card_btn">Read More</button></a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img style=" width: 57vh; height: 29vh;  "  src="images/img23.jpg" ></div>
        <div class="card_content">
          <h2 class="card_title">Germany Cold-Winter Damages</h2>
          <p class="card_text">The Cold Breeze has hit he the north part of the germany click to now more.</p>
          <a href="https://www.aljazeera.com/features/2022/11/5/wave-of-malnutrition-woes-overwhelm-children-in-northeast-nigeria"><button class="btn1 card_btn">Read More</button></a>
        </div>
      </div>
    </li>
  </ul>
</div>
</section>



<section class="footers bg-light pt-2 pb-2">
   <div class="container pt-5">
       <div class="row">
           <div class="col-xs-12 col-sm-6 col-md-4 me-5 footers-one">
    		    <div class="footers-logo">
            <p class="logo1">Vi-Sahay</p>
    		    </div>
    		    <div class="footers-info mt-3">
    		        <p>The means for this to ensure the safety of every beign to be resoponsible fto
                  the outcome of the dissaster that can be faced by the People. Where students can laso has some 
                  involvement.
                </p>
    		    </div>
    		    <div class="social-icons "> 
                <a href="https://www.facebook.com/"><i id="social" class="fab fa-facebook-f fa-3x ms-5 me-5  social"></i></a>
                <a href="https://twitter.com/"><i id="social"  class="fab fa-twitter fa-3x me-5 social"></i></a>
	            <a href="https://plus.google.com/"><i id="social" class="fab fa-instagram fa-3x me-5 social"></i></a>
	        </div>
    		</div>
        <div class="col-xs-12 col-sm-6 col-md-2 me-5 footers-five">
    		    <h5>Company </h5>
    		    <ul class="list-unstyled">
    			 <li><a href="">Career</a></li>
    			 <li><a href="">For Parters</a></li>
    			 <li><a href="">Terms</a></li>
    			 <li><a href="message.php">Contact Us</a></li>
    			</ul>
    		</div>
    	   <div class="col-xs-12 col-sm-6 col-md-2 me-10 footers-three">
    		    <h5>Links </h5>
    		    <ul class="list-unstyled">
    			 <li><a href="index.php">Home</a></li>
    			 <li><a href="donate1.php">Donation</a></li>
    			 <li><a href="about.html"></a></li>
    			 <li><a href="message.php">Messages</a></li>
    			 <li><a href="about.html"></a></li>
    			</ul>
    		</div>
    	   <div class="col-xs-12 col-sm-6 col-md-2 me-10 footers-five">
    		    <h5>Information </h5>
    		    <ul class="list-unstyled">
            <p><i class="fas fa-home mr-3"></i> Virar, Mumbai 400236, IN</p>
            <p><i class="fas fa-envelope mr-3"></i> Visahay@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +022-6066 7077</p>
            <p><i class="fas fa-print mr-3"></i>+022-6066 8088</p>
          </div>
    			</ul>
    		</div>
    		
       </div>
   </div>
</section>






  


</body>
</html>