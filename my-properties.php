<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['Fetch Propertiesuid']==0|| $_SESSION['ut']==3)) {
  header('location:logout.php');
  } else{?>
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
        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>my properties</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">my properties</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- #my properties
============================================= -->
        <section id="my-properties" class="my-properties properties-list">
            <div class="container">
                <div class="row">
                    <?php include_once('includes/sidebar.php');?>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-8 col-md-8">
                      <?php
                      $uid=$_SESSION['Fetch Propertiesuid'];
$query=mysqli_query($con,"select * from tblproperty where UserID='$uid'");
$num=mysqli_num_rows($query);
if($num>0){
while($row=mysqli_fetch_array($query))
{
?>
                        <div class="property-item">

                            <div class="property--img">
                                <a href="single-property-detail.php?proid=<?php echo $row['ID'];?>">
                        <img src="propertyimages/<?php echo $row['FeaturedImage'];?>" alt="property image" class="img-responsive" >
                        <span class="property--status"><?php echo $row['Status'];?></span>
						</a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title">
<a href="single-property-detail.php?proid=<?php echo $row['ID'];?>">
    <?php echo $row['PropertyTitle'];?></a></h5>
                                
                                    <p class="property--location"><?php echo $row['Address'];?>&nbsp;
<?php echo $row['City'];?>&nbsp;
<?php echo $row['State'];?>&nbsp;  
<?php echo $row['Country'];?></p>
<p class="property--price"><?php echo $row['RentorsalePrice'];?></p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul>
                                        <li><span class="feature">Beds:</span><span class="feature-num"><?php echo $row['Bedrooms'];?></span></li>
                                        <li><span class="feature">Baths:</span><span class="feature-num"><?php echo $row['Bathrooms'];?></span></li>
                                        <li><span class="feature">Area:</span><span class="feature-num"><?php echo $row['Area'];?></span></li>

                                    </ul>
                                    <a href="edit-property.php?editid=<?php echo $row['ID'];?>" class="edit--btn"><i class="fa fa-edit"></i>Edit</a>
                                </div>
                                <!-- .property-features end -->
                            </div>
                        </div>
                        <!-- .property item end -->
<?php } } else { ?>
   <h3 style="color:red" align="center"> No Properties added yet </h3>
        <?php } ?>               
                       
                    
                        <!-- .pagination end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #my properties  end -->

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

        <!-- #cta1 end -->

        <?php include_once('includes/footer.php');?>
    </div>
      
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>
<?php } ?>
