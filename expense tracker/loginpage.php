
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='login.css'>
    </head>
    <body>
           <div style='text-align:  center'>
       <h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Welcome To Expense Manager</span>
    <span class="line line2"></span>
  </span>
       </h1></div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
          <script>
              var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
          </script>
        
          <form action="verify.php" method="post" target="_blank">  
    <div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
  </div>
        
  <div id="b" style="text-align: center" ><input type="submit" value="Log In" name="login"></div>
  
      
  <div id="a" style="text-align: center"><a href="signup_page.php" style="text-decoration: none;" name="login">Sign Up</a></div>
  <h6 style='margin-top: 0;padding: 0'>Don't have an account? Click On Sign Up</h6><a href="updatepassword.php" ><h5 style='margin-top: 0;padding: 0'>update password! </h5></a>
         
  
</div>
  </form>
  
          </body>
    
</html>
