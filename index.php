<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css\stylesheet.css">
  </head>
  <body>
    <center>
    <form action="register1.php" method="POST">
    <div id="headers">
      <h1>Firebase Phone verification In PHP</h1>
    </div>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <h3>Verify</h3>
        <input type="text" id="number" placeholder="Enter phone number" name="number" required>
      </div><br><br>
      <div id="recaptcha-container"></div>
      <button type="button" id="loginbutton" onclick="phoneAuth();">Send Otp</button>
      <br><br>
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      <br><br>
      <button type="submit" id="loginbutton" onclick="codeverify();" name="submit">Verify code</button><br><br>
            </div>
    </form>
    </center>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    appId: "1:99446038979:web:6876f093329352b3c71d76",
    apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
    authDomain: "phone-auth-76a5e.firebaseapp.com",
    projectId: "phone-auth-76a5e",
    storageBucket: "phone-auth-76a5e.appspot.com",
    messagingSenderId: "99446038979",
    measurementId: "G-CCJ2B0YHR3"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>