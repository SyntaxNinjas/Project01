<!--PHP Validation Script Begins-->
<?PHP
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

    //validation for the name and email fields...
    if (isset($_POST['Name']))  {$myName = $_POST['Name'];
	$myName= filter_var($_POST['Name'], FILTER_SANITIZE_STRING);}
	//Email
    if (isset($_POST['Email'])) {$myEmail = $_POST['Email'];
	$myEmail = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);}
	//Telephone
	if (isset($_POST['Telephone'])) {$myTelephone = $_POST['Telephone'];
	$myTelephone = filter_var($_POST['Telephone'], FILTER_SANITIZE_NUMBER_INT, FILTER_VALIDATE_INT);}
	//ContactMethod_Telephone
	if (isset($_POST['TelephoneMethod'])){$myTelephoneMethod = $_POST['TelephoneMethod'];
	$myTelephoneMethod = filter_var($_POST['TelephoneMethod']);}
	//EmailMethod_Email
	if (isset($_POST['EmailMethod'])) {$myEmailMethod = $_POST['EmailMethod'];
	$myEmailMethod = filter_var($_POST['EmailMethod']);}
	$formErrors = false;
    //validation for the Name field.....
    if ($myName === ''):
    $err_myName = '<div class="hint2">* Sorry! your name is a required field</div>';
	$formErrors = true;
    endif;
    //validation for email field.....
    if ($myEmail === ''):
    $err_myEmail =  '<div class="hint2">* Sorry! your Email is a required field</div>';
	$formErrors = true;
    endif;
	//validation for Telephone field.....
	if ($myTelephone === ''):
    $err_myTelephone = '<div class="hint2">* Sorry! your Telephone is a required field</div>';
	$formErrors = true;
    endif;
	//if the user input doesn't match the name field....[\w^0-9!@#$%^&*()] 
    if( !(preg_match("/[A-Za-z]+/", $myName)) ):
    $err_NameMatch = '<div class="hint2">* Sorry! You have entered an improper format for the Name Field.</div>';
	$formErrors = true;
    endif;
	if (!($formErrors)) :
	   $to = "syntaxninjas@gmail.com";
	   $subject = "From $myName,  ---Potential Customer";
	   $content = "I have a project for you. Here is my Information : $myEmail, $myTelephone, $myTelephoneMethod, EmailMethod";
	   if (mail($to, $subject, $content)):
       $msg = '<div id="FeedBackMessage">Thank You! Your Information And Project Details Have Been Sent.</div>';
	endif;
   else:
       $msg = '<div class="hint2">* Sorry! There Was A Problem With Your Information and Project Details. Please Try Again!</div>';
   endif;
endif; 
?>
<!--PHP Validation Script Ends And HTML BEGINS-->
<!doctype html>
<html amp lang="en">
<head>
<meta charset="UTF-8">
<title>syntaxNinjas | A Multimedia Web And App Development LLC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="Assets/css/font-awesome.min.css" rel="stylesheet" text="text/css" />
<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"  />
<link href="Assets/css/stylesheet.css" rel="stylesheet" type="text/css"  />
<link href="Assets/css/animate.min.css" rel="stylesheet" type="text/css" />
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<header id="home">
<nav class="navbar navbar-inverse navbar-fixed-top cbp-af-header" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header"> 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"     aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>  
            <a href="#home" class="navbar-brand" title="syntaxNinjas Multimedia Development">syntaxNinjas</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
    <ul class="nav navbar-nav navbar-right">
    <li><a href="#home" title="Home">Home</a></li>
    <li><a href="#services" title="Solutions">Solutions</a></li>
    <li><a href="#processes" title="Process">Process</a></li>
    <li><a href="#contact" title="Contact Us">Contact Us</a></li>
    <li><a href="" title="Blog">Blog</a></li>
    </ul>
    </div>
  </div>
</nav>
</header>
<section class="container-fluid">
 <div class="row">
     <div class="fill-screen" style=" background-image: url(Assets/images/background.jpg)">
<img src="Assets/images/SyntaxNinjas_Graphic-compressed.png" class="img-responsive title-image" alt="syntaxNinjas Web and Development Logo">
           <h1 id="mainHeading">We Provide Multimedia Development Solutions</h1>
           <div class="down-button">
              <a class="btn" href="#services">
                 <i class="fa fa-arrow-circle-o-down fa-4x"></i>
              </a>
           </div>
     </div>
  </div> 
</section>
<!--SOLUTIONS-->
<section id="services" class="container-fluid" >
<div class="row">
<h1 class="text-center">SOLUTIONS</h1>
<div class="col-md-4 wow SlideInLeft">
<img class="img-responsive img-circle .center-block" src="Assets/images/customwebdev-compressor.png" alt="Custom Web Development">
<h2>Custom Web Development</h2>
<p>The custom web development solution is ideal for clients looking to create an online presence without needing to frequently update content.  We will work with you to develop an innovative solution fit for both mobile and desktop platforms while tailoring them specifically to meet your personal or business needs.  For more information about our custom web solutions.</p>
</div>
<div class="col-md-4 wow slideInRight data-wow-duration="2s" "> <!-- wow fadeInDown-->
<img class="img-responsive img-circle .center-block" src="Assets/images/cms-compressed.png" alt="Content Management Systems">
<h2>Content Management Systems</h2>
<p>A "content management system" (C.M.S) is ideal for clients looking to regularly update content.  We will work to design and customize a content Management System and provide the necessary training post development to make you an effective administrator of your newly developed C.M.S. For more information about Content mangement systems.</p>
</div>
<div class="col-md-4 wow fadeInDown">
<img class="img-responsive img-circle .center-block" src="Assets/images/ecommerce-compressor.png" alt="Electronic Commerce">
<h2>E-Commerce</h2>
<p>If you are looking to establish an e-commerce platform, we will  work with you to provide solutions that will seamlessly bring your inventory online and make it easier for you to convert your products to sales.  From integrating order tracking solutions to building solutions effective that minimize cart abandonment, we will work together to create an e-commerce solution that will ensure the success of your business.
</p>
</div>
</div> 
</section> 
<!--PROCESS-->
<section id="processes" class="container-fluid">
<div class="row">
     <div class="fill-screen2" style=" background-image: url(Assets/images/process2.jpg)">
        <div class="col-xs-12">
        <h1 id="process" class="text-center" style="#FFF">PROCESS</h1>
<!--carousel begins-->
<div id="text-carousel" class="carousel slide container" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                            <h1 id="mainHeading_1">1</h1> 
                            <h2 id="subHeading_1">VISION</h2>
                            <p id="processParagragh_1"> Tell us all about your vision and our team of design and development ninjas will put together a plan to ensure we bring your vision from idea to implementation in a timely manner.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                            <h1 id="mainHeading_2">2</h1>
                            <h2 id="subHeading_2">QUOTE</h2>
                             <p id="processParagragh_2">Based on your project brief, we present you with a quote for your project and a timeframe within which your project will be completed. Once we are green lit, we begin the implementation stage.</p>    
              </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                            <h1 id="mainHeading_3">3</h1>
                             <h2 id="subHeading_3">ARCHITECTURE</h2>
                            <p id="processParagragh_3">During this stage of the process, we design mockups and wireframes of your project and deliver them to you. This gives you an opportunity to see what your final project will look like.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                            <h1 id="mainHeading_4">4</h1>
                             <h2 id="subHeading_4">DEVELOPMENT</h2>
                             <p id="processParagragh_4">Once we have your approval for the mockups and wireframes, we proceed with the actual development of your project.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">                       
                            <h1 id="mainHeading_5">5</h1> 
                            <h2 id="subHeading_5">TESTING</h2>
                            <p id="processParagragh_5">We put your project through all the necessary performance tests to ensure you not only have an aesthetically pleasing site but also a high performing one.</p>
                    </div>
                </div>
             <div class="item">
                    <div class="carousel-content">
                            <h1 id="mainHeading_6">6</h1>
                             <h2 id="subHeading_6">DEPLOYMENT</h2>
                           <p id="processParagragh_6">The final stage of your project. We deploy your project assets to a pre-agreed upon remote server and your website becomes available to the world wide web.</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
<!--carousel ends-->        
         
     </div>  
  </div>
  </div> 
</section>
<!--Form Begins-->
<section id="contact">
<h1 class="text-center">CONTACT US</h1>
<form id="contactUs" name="contactUs" action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="POST">
<span id="FeedBackMessage"></span>
                       <span id="ErrorMessage"></span>
                       <?php if (isset($msg)) {echo $msg;}?>
                       <?php if (isset($err_myName)) {echo $err_myName;}?>
                       <?php if (isset($err_NameMatch)) {echo $err_NameMatch;}?>
                       <?php if (isset($err_myEmail)) {echo $err_myEmail;}?>
                       <?php if (isset($err_myTelephone)) {echo $err_myTelephone;}?>
<fieldset class="info">
<legend class="legendstyle">Your information and project details.</legend>
<!--Name Email And Telephone-->
      <input type="Name" class="form-control" id="inputName3" name="Name" value="<?PHP if (isset($myName)) {echo $myName;}?>"placeholder="Name" minlenght="2">
      <input type="Email" class="form-control" id="inputEmail3" name="Email" value="<?PHP if (isset($myEmail)) {echo $myEmail;}?>" placeholder="Email">
      <input type="Telephone" class="form-control" id="inputPhonel3" name="Telephone" value="<?PHP if (isset($myTelephone)) {echo $myTelephone;}?>" placeholder="Telephone">
 </fieldset>
<!--Checkbox-->
<div class="contactMethod">
<label>Please select your prefered method of contact?<br /><input type="checkbox" name="TelephoneMethod" value="<?PHP if (isset($myTelephoneMethod)) {echo $myTelephoneMethod;}?>" checked>
Telephone<input type="checkbox" value="<?PHP if (isset($myEmailMethod)) {echo $myEmailMethod;}?>" name="EmailMethod">Email</label>
</div>
 </fieldset>
<!--Dropdown Menu-->
<div class="selectpicker">
<label id="selector">Please select a development solution:<select>
   <option value="option1" name="optionbox" selected>I Want A Custom Web Solution.</option>
   <option value="option2" name="optionbox">I Want A Content Management System.</option>
   <option value="option3" name="optionbox">I Want An E-commerce Solution.</option>
</select>
</label>
</div>
<!-- Text Area -->
<textarea class="form-control" id="text" rows="7" placeholder="Please tell us about your project. (html is not allowed!)"></textarea>
<div class="g-recaptcha captcha"   data-sitekey="6LcITggUAAAAAOHTNEDIjeiUPh46rgwEvlLwP4o1">
</div>
<div class="captcha">
<button type="submit" class="btn btn-success" name="action" id="submitButton" value="submit">Submit</button>
</div>
</form>
</section>
<!--Form Ends-->
<footer class="container-fluid ">
<div class="col-sm-4 pagefooter">
<h3>syntaxNinjas LLC</h3>
<p>612 S Flower Street </p>
<p>Los Angeles, California 90017</p>
<p>Telephone: 2133228487</p>
</div>
<div class="col-sm-4 pagefooter">
<h3>About Us</h3>
<ul>
    <li><a href="" title="Careers">Careers</a></li>
    <li><a href="#" title="Blog">Blog</a></li>
    <li><a href="" title="Email">Email</a></li>
</ul>
</div>
<div class="col-sm-4 pagefooter">
<h3>Connect</h3>
<ul>
    <li><a href="https://www.facebook.com/syntaxninjas/" target="_blank" title="Facebook">Facebook</a></li>
    <li><a href="https://twitter.com/SyntaxNinjas" target="_blank" title="Twitter">Twitter</a></li>
    <li><a href="https://www.github.com/syntaxninjas" title="Github">Github</a></li>
</ul>
</div>
</footer>
<script src="Assets/js/classie.js"></script>
<script src="Assets/js/cbpAnimatedHeader.min.js"></script>
<script src="Assets/js/jquery-3.1.0.min.js"></script>
<script src="Assets/js/jquery.validate.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/wow.min.js"></script>
<script src="Assets/js/easein.js"></script>
<script src="Assets/js/script.js"></script>
<!--Google Analytics Tracking-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78529432-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
