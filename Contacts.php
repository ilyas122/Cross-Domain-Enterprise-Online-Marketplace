<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>


<body class="home">
<?php include('includes/header.php');?>
                
      
	  
	
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <br>
                    <h2>Contact Us </h2>
                    <p class="lead">Reach out to us for any queries</p>
                </div>
				

                </div>
            </div>
        </section>
        <!-- Popular block ends -->        
        <table class="mx-auto table table-hover">
 <caption></caption>

  <thead class="table_styling">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>  
      <th scope="col">Phone </th>
      <th scope="col">Email </th>
      <th scope="col">Role </th>

    </tr>
  </thead>
  <tbody>
  <?php
    $file = file("./contacts.txt"); 
    
    foreach( $file as $row)
       { $array = explode(",", $row);
        print_r("<tr> 
        <td>". $array[0]."</td>
        <td>". $array[1] ."</td>
        <td>" .$array[2] . "</td>  
        <td>" .$array[3] . "</td>  
        <td>" .$array[4] . "</td>  
               </tr>")  ;
    }
  
  ?>
</tbody>
</table>
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>