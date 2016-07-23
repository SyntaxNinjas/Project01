<!--PHP Validation Script Begins-->
<?PHP
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

    //validation for the name and email fields...
    if (isset($_POST['Name']))  {$myName = $_POST['Name'];
	$myName= filter_var($_POST['Name'], FILTER_SANITIZE_STRING);}
    if (isset($_POST['Email'])) {$myEmail = $_POST['Email'];
	$myEmail = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);}
	
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
	//if the user input doesn't match the name field....[\w^0-9!@#$%^&*()] 
    if( !(preg_match("/[A-Za-z]+/", $myName)) ):
    $err_NameMatch = '<div class="hint2">* Sorry! You have entered an improper format for the Name Field.</div>';
	$formErrors = true;
    endif;
	if (!($formErrors)) :
	   $to = "syntaxninjas@gmail.com";
	   $subject = "From $myName,  ---Signup Page";
	   $content = "I signed up. Here is my Email : $myEmail";
	   if (mail($to, $subject, $content)):
       $msg = '<div id="FeedBackMessage">Thanks For Signing Up!</div>';
	endif;
   else:
       $msg = '<div class="hint2">* Sorry! There Was A Problem Signing Up. Try Again!</div>';
   endif;
endif; 
?>
<!--PHP Validation Script Ends And HTML BEGINS-->
<!doctype html>
<html>
<head>
<title>Syntax Ninjas - A Web And Mobile Development Company</title>
<!--An Alert For Users Who Have Turned Javascript Off In Their Browser-->
<noscript>
For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a>
</noscript>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta id="view" name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../stylesheet.css"> 
    <script type="text/javascript" src="../js/modernizr-custom.min.js"></script>
    <script type="text/javascript" src="../js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="../js/jquery.plugin.min.js"></script> 
    <script type="text/javascript" src="../js/jquery.countdown.min.js"></script>		
	<script type="text/javascript">
		$(document).ready(function(){
			$('.my-countdown').countdown({
				until: $.countdown.UTCDate(-7, 2016, 7, 1, 0, 0, 0)//timezone, year, month, day, hours, mins, secs.
			});
		});	
    </script>        
</head>
<body>
	<div id="Main">
		<div class="Top-heading">
			<h1>Syntax Ninjas</h1>
			<h2>A Web And Mobile Development Company</h2>
		</div>
		  <div class="Graphic">
			<img src="../SyntaxNinjas_Graphic.png">
		  </div>
		     <div class="Mid-heading">
			   <h2>Will Launch in....</h2>
		     </div>
			  <div class="my-countdown">
		      </div>
                 <div id="subscribe">
                 <h3>Subscribe To Our Email List Before We Launch!</h3>
                 </div>
                 <!--The Form Begins-->
                    <div class="heading">
                       <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="POST" id="myform" name="myform">
                       <fieldset>
                       <span id="FeedBackMessage" class="hint"></span>
                       <span id="ErrorMessage" class="hint2"></span>
                       <?php if (isset($msg)) {echo $msg;}?>
                       <?php if (isset($err_myName)) {echo $err_myName;}?>
                       <?php if (isset($err_NameMatch)) {echo $err_NameMatch;}?>
                       <?php if (isset($err_myEmail)) {echo $err_myEmail;}?>
<p>Name:<br /><label for="Name"><input class="forminput" name="Name" id="Name"   type="text"  placeholder="Full Name" size="90px" maxlength="30" value="<?PHP if (isset($myName)) {echo $myName;}?>"></label>

</p>
                       <p>Email:<br /><label for="Email"><input class="forminput" required name="Email" id="Email"  type="email" placeholder="you@youremail.com" size="90px" maxlength="30" value="<?PHP if (isset($myEmail)) {echo $myEmail;}?>"></label>                       
                       </p>
                       <p class="submitbutton" id="button"><button type="submit" name="action" value="submit">Subscribe</button></p>
                       </fieldset>
                       </form>
                       </div>
                       <div class="line">
                       <!--Social Media Icons Are Placed Here-->
                       <div class="socialmediaicons">
                       <ul>
                     <li><a href="https://www.facebook.com/syntaxninjas/" title="facebook" class="facebook" target="_blank">f</a></li>
                     <li><a href="https://www.linkedin.com/in/syntax-ninjas-15a71b119" title="linkedin" class="linkedin" target="_blank">l</a></li>      
                     <li><a href="https://twitter.com/SyntaxNinjas" title="twitter" class="twitter" target="_blank">t</a></li>
                     <li><a href="https://www.pinterest.com/syntaxninjas/" title="pinterest" class="pinterest" target="_blank">p</a></li>                        
    </ul>
    </div>
    </div>
	</div>
<!--Form Validation Script-->   
<script type="text/javascript" src="../js/formvalidation.js"></script>
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
		
		
