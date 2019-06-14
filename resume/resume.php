<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header ">
					<!-- Logo -->
					<div class="navbar-brand" style="text-decoration: underline;color: orangered; font-size: 1.5em;margin: 5%;">
                            READit
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

                
                
				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right ">
					<li><a  style="color: black;" href="index.php">Home</a></li>
					<li><a style="color: black;"  href="https://readit2.000webhostapp.com/BlogWeb/cover/">Blog</a></li>
					<li><a style="color: black;" href="resume.pdf">Template</a></li>

				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
  
            <div class="">
         <div class="container">
             <br>
             <br>
             <br>
           <h1 style="font-size:2.5em; text-align:center;">Create Online Resume</h1>      
          <div style="font-size:1.5em;"> Basic Info:</div> 
             
        <form action="resume_submit.php" method='post'>
            <div class="form-group">
                <label for="email">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="uname">
            </div>
            
        <div class="form-group">
            <label for="pwd">Address</label>
            <input type="text" class="form-control" id="add" placeholder="Enter Address" name="add">
        </div><div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label for="contact">contact</label>
            <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
        </div>
        <div class="form-group">
            <label for="obj">Objective</label>
            <input type="text" class="form-control" id="obj" placeholder="Enter Objective" name="obj">
        </div>
            
        
          <div style="font-size:1.5em;"> <br>Educational Qualification:</div> <br>
            
            <div class="form-group">
                <label for="ssc">SSC/10th Equivalent</label>
                <input type="text" class="form-control" id="sscboard" placeholder="Enter SSC/10th Equivalent Board" name="sscboard">
                <input type="text" class="form-control" id="ssc" placeholder="Enter SSC/10th Equivalent percentage/Pointer" name="ssc">
                <input type="text" class="form-control" id="sscpassing" placeholder="Enter SSC/10th Equivalent passing year" name="sscpassing">
            </div>
            
        <div class="form-group">
            <label for="hsc">12th/Diploma </label>
            <input type="text" class="form-control" id="hscboard" placeholder="Enter 12th/Diploma Board/University" name="hscboard">
            <input type="text" class="form-control" id="hsc" placeholder="Enter 12th/Diploma Percentage" name="hsc">
             <input type="text" class="form-control" id="hscpassing" placeholder="Enter 12th/Diploma Equivalent passing year" name="hscpassing">
            </div>
           
            <div class="form-group">
            <label for="BE">Graduation </label>
                <select class="form-control" id="select" name="select">
            <option>Information Technology</option>
            <option>Computer Engineering</option>
            <option>Electronics</option>
            <option>Production</option>
            <option>Mechanics</option>
            <option>Electrical</option>
            <option>Chemical</option>
            <option>Electronics and Telecommunication</option>
            <option>Other</option>
                </select>
            <input type="text" class="form-control" id="university" placeholder="Enter Degree University" name="university">
            <input type="text" class="form-control" id="other" placeholder="if other: Enter Branch " name="other">
            <input type="text" class="form-control" id="BE" placeholder="Enter CGPA" name="BE">
                <input type="text" class="form-control" id="BEpassing" placeholder="Enter Degree passing year" name="BEpassing">
        </div>
            
            <div class="form-group">
          <div style="font-size:1.5em;"> Experience:</div> 
          <div style="font-size:1em;">(if ANY  MIN:1 MAX:3 )</div> 
                
            <input type="text" class="form-control" id="exp1" placeholder="Enter Name of Organization" name="exp1">
            <input type="text" class="form-control" id="exp1" placeholder="Enter Description" name="exp_des1">
            <input type="date" class="form-control"  placeholder="Enter Start date" name="exp_start1">
            <input type="date" class="form-control"  placeholder="Enter End date" name="exp_end1"><br>
                
            <input type="text" class="form-control" id="exp2" placeholder="Enter Name of Organization" name="exp2">
            <input type="text" class="form-control" id="exp2" placeholder="Enter Description" name="exp_des2">
            <input type="date" class="form-control"  placeholder="Enter Start date" name="exp_start2">
            <input type="date" class="form-control"  placeholder="Enter End date" name="exp_end2"><br>
                
            <input type="text" class="form-control" id="exp3" placeholder="Enter Name of Organization" name="exp3">
            <input type="text" class="form-control" id="exp3" placeholder="Enter Description" name="exp_des3">
            <input type="date" class="form-control"  placeholder="Enter Start date" name="exp_start3">
            <input type="date" class="form-control"  placeholder="Enter End date" name="exp_end3"><br>
                
        </div>
            
            <div class="form-group">
          <div style="font-size:1.5em;"> Certification:</div> 
          <div style="font-size:1em;">(min:2  Max:5)</div> 
                
            <input type="text" class="form-control" id="cert1" placeholder="Enter Certificate Course name" name="cert1">
            <input type="text" class="form-control" id="cert2" placeholder="Enter Certificate Course name" name="cert2">
            <input type="text" class="form-control" id="cert3" placeholder="Enter Certificate Course name" name="cert3">
            <input type="text" class="form-control" id="cert4" placeholder="Enter Certificate Course name" name="cert4">
            <input type="text" class="form-control" id="cert5" placeholder="Enter Certificate Course name" name="cert5">
        </div>
            
            <div class="form-group">
          <div style="font-size:1.5em;"> Projects:</div> 
          <div style="font-size:1em;">(min:1  Max:4)</div> 
                
            <input type="text" class="form-control" id="proj1" placeholder="Enter Poject Title" name="proj1">
            <input type="text" class="form-control" id="proj_stat1" placeholder="Enter Poject Description (3-4 statements)" name="proj_stat1">
            <input type="text" class="form-control" id="proj2" placeholder="Enter Poject Title" name="proj2">
            <input type="text" class="form-control" id="proj_stat2" placeholder="Enter Poject Description (3-4 statements)" name="proj_stat2">
                
            <input type="text" class="form-control" id="proj3" placeholder="Enter Poject Title" name="proj3">
            <input type="text" class="form-control" id="proj_stat3" placeholder="Enter Poject Description (3-4 statements)" name="proj_stat3">
                
            <input type="text" class="form-control" id="proj4" placeholder="Enter Poject Title" name="proj4">
             <input type="text" class="form-control" id="proj_stat4" placeholder="Enter Poject Description (3-4 statements)" name="proj_stat4">
               
        </div>
            <div class="form-group">
          <div style="font-size:1.5em;"> Academic Achievement:</div> 
          <div style="font-size:1em;">(IF ANY )</div> 
          <div style="font-size:1em;">(Mention Achievement in competions like SIH, Hackathon, Olympiad )</div> 
                
            <input type="text" class="form-control"  placeholder="Enter Achievement" name="ach1">
                
            <input type="text" class="form-control" placeholder="Enter Achievement" name="ach2">
               
        </div>
            
             <div class="form-group">
                 <div style="font-size:1.5em;">Technical Skills:</div>
                 <div style="font-size:1em;">(MIN 2 MAX 5)</div>
                
            <input type="text" class="form-control" id="tech1" placeholder="Enter Technical Skills" name="tech1">
            <input type="text" class="form-control" id="tech2" placeholder="Enter Technical Skills" name="tech2">
            <input type="text" class="form-control" id="tech3" placeholder="Enter Technical Skills" name="tech3">
            <input type="text" class="form-control" id="tech4" placeholder="Enter Technical Skills" name="tech4">
            <input type="text" class="form-control" id="tech5" placeholder="Enter Technical Skills" name="tech5">
            
            </div> 
            
            <div class="form-group">
                 <div style="font-size:1.5em;">Personal Interests:</div>
                 <div style="font-size:1em;">(MIN 2 MAX 5)</div>
                
            <input type="text" class="form-control" id="int1" placeholder="Enter Personal Interest" name="int1">
            <input type="text" class="form-control" id="int2" placeholder="Enter Personal Interest" name="int2">
            <input type="text" class="form-control" id="int3" placeholder="Enter Personal Interest" name="int3">
            <input type="text" class="form-control" id="int4" placeholder="Enter Personal Interest" name="int4">
            <input type="text" class="form-control" id="int5" placeholder="Enter Personal Interest" name="int5">
            
            </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>     
             
          </div>
		
	<!-- Footer -->
        
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
	
					<div style='text-align:center;'>
						<p> READit 2019 </p>
					</div>
					<!-- /footer copyright -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
