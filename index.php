<?php 
 
    include 'core/init.php' ;
    
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
   
?>

<html>
	<head>
		<title>Justice Voice</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/22116670-9e9a-46a0-bca2-4578b73ea1e1/webchat/config.js" defer></script>
    <link rel="shortcut icon" type="image/png" href="jc.png"> 	</head>
<body>
<main class="twt-main">
            <section class="twt-login">
                <?php include 'includes/login.php';  ?>
                    <div class="slow-login">
                        <img id="logo" class="login-bird" src="<?php echo BASE_URL . "jc.png"; ?>" alt="logo of Justice Voice"  height="80px" width="80px">
                        <button class="login-small-display signin-btn pri-btn">Log in</button>
                        <span class="front-para">"JusticeVoice" - Unveiling Scams Without Unveiling Identity
                        </span>
                        <span class="join">Join Justice Voice Today.</span>
                        <button type="button" id="auto" onclick="" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
                            Sign Up</button>
                            
                             
                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up For Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
         <?php  include 'includes/signup-form.php' ?>
      </div>
      
    </div>
  </div>
</div>


                    </div>
            </section>
            <section class="twt-features">
                <div class="features-div">
                    <img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
                    <p>Follow your interests.</p>
                    <img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
                    <p>Hear what people are talking about.</p>
                    <img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
                    <p>Join the conversation.</p>
                </div>
            </section>
            <footer>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Ads info</a></li>
                    <li><a href="#">Brand</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Settings</a></li>
                    <li>© 2024 - Justice Voice</li>
                    <li style="color:#f21d1d;"><b>- Developed By A2Z Developers -</b></li>
                </ul>
            </footer>
        </main>
        
        <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
</body>
</html>
