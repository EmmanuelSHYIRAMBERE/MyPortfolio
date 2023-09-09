<?php
require("connection.php");
if(isset($_POST['signup'])){
$Fname=$_POST["Fname"];
$Lname=$_POST["Lname"];
$Country=$_POST["Cname"];
$PhoneNo=$_POST["Pnone"];
$birthday=$_POST["birthday"];
$sector=$_POST["sector"];
$GENDER=$_POST["GENDER"];
$Passcode=$_POST["FILE1"];
$RePasscode=$_POST["FILE2"];

     
        $query="INSERT INTO signup(FirstName,LastName,Country,PhoneNo,Birthday,Sector,GENDER,Password,RetypedPassword) VALUES('$Fname','$Lname','$Country',$PhoneNo,'$birthday','$sector','$GENDER',$Passcode,$RePasscode)";
        $result=mysqli_query($con,$query);
        if($result){
          echo "submitted";  
        }
        else{
        echo "unisubmitted -".mysqli_error($con);
        }
     

    }



?> 
<hr/>


<!DOCTYPE html>
<head>
<title>Sign Up Form</title>


<link rel="stylesheet"type="text/css"href="login.html>
</head>
<body>
<table border="0"width="100%"height="700px">
 <header class="header"><div>
    <a href="#" class="logo"><b>Digital Marketing</b></a><tr>
 <nav class="nav-items">
<font face="cinzel"><b>
<a href="Home.html">Home</a>
<a href="Product.html">Shop</a>
<a href="LogIn.html">LogIn</a>
<a href="SignUp.html">SignUp</a>
<a href="Contact.html">Contact</a>
</b></font>
</nav></div>
  </header>
  <main>
    <div class="intro">
      <h1><font color="red"><b>create an account</b></font></h1>
<form method="post"action="#"><font color="white"><b>
FirstName:</br><input type="text"Name="Fname" required></br></br>
LastName:</br><input type="text"name="Lname" required></br></br>
Country:</br><input type="text"name="Cname" required></br></br>
PhoneNo:</br><input type="numeric"name="Pnone" required></br></br>
    DATE-of-Birth:</br><input type="date" name="birthday"  required></br></br>
    DISTRICT:</br></br><select>
    <option value="1">HUYE</option>
    <option value="2">KAYONZA</option>
    <option value="3">MUSANZE</option>
<option value="4">GASABO</option>
    <option value="5">NYANZA</option>
    <option value="6">BURERA</option>
<option value="7">RUBAVU</option>
    <option value="8">NYARUGENGE</option>
    <option value="9">MUHANGA</option>
<option value="10">RUHANGO</option>
    <option value="11">NYAGATARE</option>
    <option value="12">KICUKIRO</option>
<option value="13">BUGESERA</option>
    <option value="14">RWAMAGANA</option>
    <option value="15">GAKENKE</option>
</select><input type="text"name="sector" required>
</br></br></br>
    GENDER:</br></br></br>
    MALE<input type="radio"name="GENDER" value="m"></br></br>
    FEMALE <input type="radio"name="GENDER"value="f"></br></br>
    Password:</br><input type="password" size="10" name="FILE1" required><br></br>
Retype-Password:</br><input type="password" size="10" name="FILE2" required><br></br>
      <button><a href="LogIn.html"target="_blank""><input type="submit" name="signup" value="signup"></a></button>
</b></font>     
</div>
  </main>
 <footer class="footer">
<div class="about-us">
      <div class="about-us-text">
        <h2>About Us</h2>
        <p>we advertise and sell product and services frequently</p>
      </div>
    <div class="copy"><b>&copy; 2022 Digital Marketing</b></div>
    </div>
    </div>
  </footer>
<style>
 body {
     background-color: #f5f5f5;
 background-repeat: no-repeat;
 background-size: cover;
width: 100%;
}
<style>
  
    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
     
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: blue;
      padding: 35px 20px;
    }
/* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 920px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro button {
      background-color: #fffhhh;
      color: #dfghdf;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    
.footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 40px 80px;

    .about-us {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .about-us-text h2 {
     font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-us-text p {
     font-size: 15px;
color: #fff;
      margin: 10px 0;
    }
.footer .copy {
      color: #fff;
    }
</style>
</style>
</center>
</div>
</body>
</html>


