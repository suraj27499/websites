<%@ page language="java" contentType="text/html; charset=UTF-8"
%>
<!DOCTYPE html>
<html>
 <head>
        <title>ExpenseManager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='login.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                    margin: 0;
                    padding: 0;
                    font-family: sans-serif;
                    background-image: url("https://images.unsplash.com/photo-1592439145038-1a6413edf46b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"); 
                    background-repeat: no-repeat;
                    background-size: cover;
            }
        </style>
    </head>
    
    
    
    
    <body>
   
                  <script type="text/javascript">
                     function changecolor(){
                var x=Math.floor(Math.random()*255);
    var y=Math.floor(Math.random()*255);
    var z=Math.floor(Math.random()*255);
    var color="rgb("+x+","+y+","+z+")";
    document.getElementById("background").style="background-color:"+color;
    }
    setInterval("changecolor()",2000);
              </script>
              
              
           <div style='text-align:  center'>
       <h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Welcome Techie </span>
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
          
          
          <script type="text/javascript">
              $("#loginForm").validate({
    rules: {
      email: {
        required: true
      },
      password: {
        required: true
      }
    },
    messages: {
      email: {
        required: "specify email"
      },
      password: {
        required: "specify password"
      }
    }
              </script>
        
          <form action="verify.jsp" method="post" target="_blank" id="loginForm">  
    <div class="login-box">
  <h1>Login 💻</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="email" placeholder="Username" name="username" required="true" title="Must enter a valid email">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
  </div>
        
  <div id="b" style="text-align: center" ><input type="submit" value="Log In" name="login"></div>
  
      
 <button onclick="window.location.href='signup_page.jsp'" style="width:100%;height:100%;background: transparent;border:none;outline:none"> <div id="a" style="text-align: center"><a href="signup_page.jsp" style="text-decoration: none;" name="login">Sign Up</a></div></button>
 <h6 style='margin-top: 0;padding: 0'>Don't have an account? Click On Sign Up</h6>
 <button onclick="window.location.href='updatepassword.jsp'" style="width:100%;height:100%;background: transparent;border:none;outline:none"></button>
  <marquee behavior="alternate" >
      <button id="background" onclick="window.location.href='updatepassword.jsp'" type="button" class="btn btn-outline-secondary " >👉 Update Password!</button>
  </marquee> 
 
 
</div>

  </form>
         
          </body>
</html>