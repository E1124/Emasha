<html>
<head>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width,initial-scale.0">
<style>

body{
display:flex;
justify-content:right;
align-items:center;
min-height:100vh;
background-image:url(
"https://www.motocms.com/blog/wp-content/uploads/2017/06/how-to-make-a-furniture-website-main.jpg");
background-size:cover;
background-position:center;
margin:0 480 80 ;
border-radius:20px ;
color:#DAA06D;



}

.wrapper{
width:400px;
background:transparent;
backdrop-filter:blur(20px);
border-radius:20px  ;
padding:30px 20px;

  

}
.border{
 border-style: solid;
border-color:#C2B280;
}
.h1,.h3{
text-align:center;
}

.input{
border:none;
outline:none;
width:80%;
height:5%;
background:white;
border-radius:40px;
border:2px solid;
border-radius:40px;
padding:20px 20px 20px 20px;
color:black;



}

.text{
color:#F0E68C;
}


.button{
width:50%;
height:5%;
margin:5;
background-color:#888888; 
border-radius:40px;
}

.donot{
margin:0 50;
}

a:link{
color:#F5DEB3;
}

a:hover{
color:#800000;
}


</style>

</head>

<body>
<div class="wrapper">
<form action="include/login.inc.php" id="loginForm" method="POST" name="form"><Fieldset class="border">

<h1 class="h1">Login</h1>


<center>
<input type="email" placeholder=" Email"   name="email" class="input" required> <br><br>
<input type="password" placeholder="Password"  name="psw" class="input"  maxlength="8" required><br><br>

<input type="checkbox"><label class="text">Remember me</label>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="#">Forgot password?</a><br><br>

<button type="submit" name="submit"  class="button" >Login</button><br>


<div class="donot">
<p class="text">Don't have an account?</p>
<a href="Signup.php">Sign up</a>
</div>
</Fieldset>
</form>
</div>
</body>
</html>