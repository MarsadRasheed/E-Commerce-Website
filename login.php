<!DOCTYPE html>
<html>
<head>
  <title>Login/Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css?v=<?php echo time(); ?>">

  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

  <?php
    if(!empty($_COOKIE["CozaStore"])){
      ?>
        <script>alert("Already logged In")</script>
      <?php
      header("refresh:0.1; url=home.php");
    }
  ?>
  
  <div class="cont">
    <form method="POST">
      <div class="form sign-in">
        <h2>Sign In</h2>
        <label>
          <span>Email Address</span>
          <input id="email" type="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input id="password" type="password" name="password">
        </label>
        <button id="signIn" formaction="signIn.php" class="submit" type="submit">Sign In</button>
        <p class="forgot-pass">Forgot Password ?</p>

        <div class="social-media">
          <ul>
            <li><img src="images/icons/facebook.png"></li>
            <li><img src="images/icons/twitter.png"></li>
            <li><img src="images/icons/linkedin.png"></li>
            <li><img src="images/icons/instagram.png"></li>
          </ul>   
        </div>
      </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover our latest products!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>

      <form method="POST">
        <div class="form sign-up">
          <h2>Sign Up</h2>
          <label>
            <span>Name</span>
            <input name="name" type="text">
          </label>
          <label>
            <span>Email</span>
            <input name="email" type="email">
          </label>
          <label>
            <span>Password</span>
            <input name="password" type="password">
          </label>
          <label>
            <span>Confirm Password</span>
            <input name="rePassword" type="password">
          </label>
          <button formaction="addUser.php" type="submit" class="submit">Sign Up Now</button>
        </div>
      </form>
    </div>
  </div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>