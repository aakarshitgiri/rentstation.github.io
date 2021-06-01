<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts
============================================= -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Stylesheets
============================================= -->
<link href="assets/css/externalrrr.css" rel="stylesheet">
<link href="assets/css/bootstraprrr.min.css" rel="stylesheet">
<link href="assets/css/stylessr.css" rel="stylesheet">

<style>


.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


</style>

<!-- Document Title
============================================= -->
<title>Rentstation - Find The Best Rental Place For Your Living</title>
</head>
<body>



<div id="wrapper" class="wrapper clearfix">
        <?php include_once('includes/header.php');?>
        </div>

        <br>
<br>


<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content content-1">
                         
                            <form class="mb-0" method="post" name="search" action="property-search.php">
                                <br>
                                <div class="form-box search-properties" style="text-align: center;" >
                                <h1><b><span style="color: #e12120;  font-family: serif;"> Meet Our Team</span></b></h1>
                                   
                                    <!-- .row end -->
                                </div>
                               
                                <!-- .form-box end -->
                            </form>
                        
                        </div>
                       
                    </div>
                    <!-- .container  end -->
                </div>
                <!-- .slider-text end -->
            </div>
</section>
<div style="margin:20px; text-align:center;">
<h6 style="text-align: center; font-style: italic; font-size: xx-large;">Individual commitment to a group effort--that is what makes a team work, a company work, a society work, a civilization work</h6>
</div>

<section style="margin:40px;">
        <div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/about/male.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2 style="font-weight: 300; font-size: xx-large;">Aakarshit Giri</h2>
        <p class="title">Developer</p>
       
        <p>aakarshit@rentstations.in</p>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/about/female.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2 style="font-weight: 300; font-size: xx-large;">Iqra Kidwai</h2>
        <p class="title">Developer</p>
    
        <p>iqrakidwai@rentstations.in</p>
     
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/images/about/male.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2 style="font-weight: 300; font-size: xx-large;">Nishant Katiyar</h2>
        <p class="title">Graphics Designer</p>
       
        <p>nishantkatiyar@rentstations.in</p>
     
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="assets/images/about/male.png" alt="John" style="width:100%">
      <div class="container">
        <h2 style="font-weight: 300; font-size: xx-large;">Abhishek Gupta</h2>
        <p class="title">Designer</p>
       
        <p>abhishekgupta@rentstation.in</p>
     
      </div>
    </div>
  </div>
</div>

</section>
        


<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team</h3>
                        <a href="contact.php" class="btn btn--primary">Contact Us</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>

        <?php include_once('includes/footer.php');?>
      
        <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>
</html>