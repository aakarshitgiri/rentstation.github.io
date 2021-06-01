<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    
<!-- Fonts
============================================= -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Stylesheets
============================================= -->
<link href="assets/css/externalrrr.css" rel="stylesheet">
<link href="assets/css/bootstraprrr.min.css" rel="stylesheet">
<link href="assets/css/stylessr.css" rel="stylesheet">

<!-- Document Title
============================================= -->
<title>Rentstation - Find The Best Rental Place For Your Living</title>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
         <?php include_once('includes/header.php');?>
<br>
<br>
        <!-- Page Title #1
============================================ -->
<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content content-1">
                         
                            <form class="mb-0" method="post" name="search" action="property-search.php">
                                <br>
                                <div class="form-box search-properties" style="text-align: center;" >
                                <h1><b><span style="color: #e12120;  font-family: serif;"> Hostel | Flats | PG </span></b></h1>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php
$query=mysqli_query($con,"select distinct City from  tblproperty");
while($row=mysqli_fetch_array($query))
{
?>
                  <option value="<?php echo $row['City'];?>"><?php echo $row['City'];?></option>
                  <?php } ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="type" id="type" required="true">
                                        <option value="">Select Property Type</option>
                                        <?php $query1=mysqli_query($con,"select * from tblpropertytype");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>      
                  <option value="<?php echo $row1['PropertType'];?>"><?php echo $row1['PropertType'];?></option>
                  <?php } ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                           <!-- .col-md-3 end -->
                                           <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="status" id="status" required="true">
                                        <option value="">Status</option>
                                        <?php
$query2=mysqli_query($con,"select distinct Status from  tblproperty");
while($row2=mysqli_fetch_array($query2))
{
?>
                                        <option value="<?php echo $row2['Status'];?>"><?php echo $row2['Status'];?></option>
                                        <?php } ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="search" class="btn btn--primary btn--block">
                                        </div>
                                       
                                      
                                    </div>
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
        <!-- #page-title end -->

        <!-- Contact #1
============================================= -->
        <section id="contact" class="contact contact-1">
            <div class="container">
                <div class="row">
                    <?php

                    
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="heading heading-2 mb-55">
                            <h2 class="heading--title">Get In Touch</h2>
                        </div>
                        <div class="contact-panel">
                            <h3>Address</h3>
                            <p><?php  echo $row['PageDescription'];?></p>
                        </div>
                        <!-- .contact-panel -->
                        <div class="contact-panel">
                            <h3>Phone:</h3>
                            
                            <p>+<?php  echo $row['MobileNumber'];?></p>
                        </div>
                        <!-- .contact-panel -->
                        <div class="contact-panel">
                            <h3>Email:</h3>
                            <p><?php  echo $row['Email'];?></p>
                        </div>
                        <!-- .contact-panel -->
                    </div>
                    <!-- .col-md-3 end -->

                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white">
                    
                        <div class="about--img">
                        <div>
  <form action="/action_page.php">
    <label for="fname">Full Name</label>
    <input class="style" type="text" id="fname" name="firstname" placeholder="Name">

   

    <label for="lname">Email</label>
    <input class="style" type="text" id="lname" name="lastname" placeholder="Email">

    <label for="lname">Contact</label>
    <input class="style" type="text" id="lname" name="lastname" placeholder="Contact">

    <label for="lname">Queries</label>
    <input class="style" type="text" id="lname" name="lastname" placeholder="Enter Your Queries">
  
    <input type="submit" value="Submit" class="btn btn--primary btn--block">
  </form>
</div>

<style>
    .style {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}






</style>


                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
               <?php } ?>
            </div>
        </section>
        <!-- #contact  end -->


        <!-- cta #1
============================================= -->
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



        <!-- Footer #1
============================================= -->
        <?php include_once('includes/footer.php');?>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script>
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/gmap/marker1.png",
                    iconsize: [52, 75],
                    iconanchor: [52, 75]
                }
            }]
        });

    </script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
