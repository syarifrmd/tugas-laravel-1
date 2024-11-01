<html>
 <head>
  <title>
   Login
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
            background-color: #f5f7fa;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .left {
            flex: 1;
            background-color: #7969ed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
    
        }
        .right {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }
        .logo img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
        .logo span {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }
        .welcome-text {
            text-align: left;
            margin-bottom: 50px;
            width: 100%;
            max-width: 300px;
        }
        .welcome-text h1 {
            font-size: 24px;
            font-weight: 600;
            color: black;
            margin-bottom: 10px;
        }
        .welcome-text p {
            font-size: 14px;
            color: #ffffff;
        }
        .login-form {
            width: 100%;
            max-width: 300px;
        }
        .input-container {
            position: relative;
            margin-bottom: 10px;
        }
        .input-container input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .input-container .icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        .login-form .forgot-password {
            text-align: right;
            font-size: 12px;
            color: #888;
            margin-bottom: 20px;
        }
        .login-form .login-button {
            width: 100%;            
            max-width: 300px;
            padding: 10px;
            background-color: #7969ed;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .login-form .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .login-form .social-login button {
            width: 48%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .login-form .social-login button.google {
            background-color: #fff;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-form .social-login button.google img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        .login-form .social-login button.facebook {
            background-color: #3b5998;
            color: #fff;
        }
        .login-form .signup {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
        .login-form .signup a {
            color: #007bff;
            text-decoration: none;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 50px;
        }

        .login-img {
            width: 300px;
            height: 500px;
            object-fit: cover;
            margin-bottom: 50px;
        }
  </style>
 </head>
 <body>
  <div class="container">
   <div class="left">
   <img class="login-img" src="{{ asset('img/login-kiri.png') }}" alt="">
   </div>
   <div class="right">
    <div class="welcome-text">
     <h1>
      Welcome back!
     </h1>
     <p>
      Start managing your finance faster and better
     </p>
    </div>
    <div class="login-form">
     <div class="input-container">
      <i class="fas fa-envelope icon">
      </i>
      <input placeholder="you@example.com" type="email"/>
     </div>
     <div class="input-container">
      <i class="fas fa-lock icon">
      </i>
      <input placeholder="At least 8 characters" type="password"/>
     </div>
     <div class="forgot-password">
      <a style="text-decoration: none; color: #7969ed;" href="#">
       Forgot password?
      </a>
     </div>
     <div style="display: flex; margin: 0 auto; text-align: center;">
     <a href="/databarang" class="btn login-button" >Login</a>
     </div>
    
     <div class="social-login">
      <button class="google">
       <img alt="Google Logo" src="{{ asset('img/search.png') }}"/>
       Google
      </button>
      <button class="facebook">
       <i class="fab fa-facebook-f">
       </i>
       Facebook
      </button>
     </div>
     <div class="signup">
      Don't you have an account?
      <a href="#">
       Sign Up
      </a>
     </div>
    </div>
    <div class="footer">
     © 2024 ALL RIGHTS RESERVED
    </div>
   </div>
  </div>
 </body>
</html>