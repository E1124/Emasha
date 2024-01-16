<html>
<head>
<style>


body{
display:flex;
justify-content:right;
align-items:center;
min-height:100vh;
background-image:url("https://i.pinimg.com/originals/40/e8/15/40e8150ba2c7c4c6fae8fff28c10c804.jpg");
background-size:cover;
background-position:center;
margin :0 200  50;

}



.wrapper{

background:transparent;
backdrop-filter:blur(100px);
color:#DAA06D;
border-radius:50px;

}

.textbox{
        width:40%;
        height:5%;
        background-color:salmon;
        margin:5;


        }


.textbox1{
        width:83%;
        height:5%;
        background-color:salmon;
        margin:5 ;


        }

.psw{
        width:83%;
        height:5%;
        background-color:salmon;
        margin:5  ;

        }


.button{
width:50%;
height:5%;
margin:5;

border-radius:40px; 
background-color:gray;
}

.have{
margin:0 50;
border-radius:40px;
}

a:link{
color:blue;
}

a:hover{
color:red;}


.hr-text {
  border: 0;
  line-height: 1em;
  position: relative;
  text-align: center;
  height: 1.5em;
  font-size: 14px;
  margin: 10 10;
}

.hr-text::before {
    content: "";
    background-color: black;
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px;
}

.hr-text::after {
    content: attr(data-content);
    position: relative;
    padding: 0 7px;
    line-height: 1.5em;
    color:white;
    background-color: black;
}


img{
height:500px;
width:300px;
text-align:left;
margin:50 150 200;

}


.socialmediaIcons{
	padding:5px;
	background:transparent;
	display:flex;
	justify-content:center;

}
.socialmediaIcons a{
	
	text-decoration:none;
	padding:2px;
	background-color:white;
	margin:10px;
	border-radius:25%;
	
}
.socialmediaIcons a i{
	font-size:1.5em;
	color:blue;
	opacity:0.9;
}


.socialmediaIcons a i:hover{
	color:white;
}
.socialmediaIcons a:hover{
	background-color:blue;
}


.text{
margin:0 3;
margin-bottom: 50px;
}

.text1{
float:left;
}


</style>
<meta name="viewport" content="width=device-width,initial-scale.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" 
referrerpolicy="no-referrer" />



<script type="text/javascript">

let loginForm = document.getElementById("loginForm");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  let firstname = document.getElementById("username");
  let lastname = document.getElementById("lastname");
  let email= document.getElementById("email");
 let password = document.getElementById("password"); 
let confirmpassword = document.getElementById("confirmpassword");



  if (username.value == "" || lastname.value == "" || email.value == "" || password.value == "" || confirmpassword.value == "") {
    alert("Ensure you input a value in all fields!");
  }
 else {
    

    alert("This form has been successfully submitted!");
    console.log(
      `This form has a username of ${username.value} and password of ${password.value}`
    );

    username.value = "";
    password.value = "";
  }
});












  

</script>

</head>

<body>
<img src="Bid Nest-01.png"><br>

<div class="wrapper">

<form method="post" action="include/Signup.inc.php" id="signupForm" align="center" id="loginForm"><Fieldset  >
<h1 >Get Started</h1>
<center><h3>Create an account to make bidding fast & easy</h3></center>

<input type="text" placeholder="First Name" class="textbox" id="firstname" name="fname" required>
<input type="text" placeholder="Last Name" class="textbox" id="lastname" name="lname" required>

<input type="email" placeholder=" Email " class="textbox1" id="email" name="email" required>
</center>

<input type="password" placeholder="Password(must be 8 characters)" class="psw" id="password"  name="pwdd" maxlength="8" required><br>
<input type="password" placeholder="Confirm Password" class="psw" id="confirmpassword"  name="confirm_password" maxlength="8" required><br><br>

<center>
<input type="checkbox" required name="remember"><label  style=color:#F0E68C  >&nbsp Email me new arrivals and personalized recommendations from premier auction houses.<label><br>

<input type="checkbox"  required name="accept"><label style=color:#F0E68C >I have read and accept Bid Next's <a href="#">terms of service</a> and <a href="#">privacy policy.</a><label><br><br>

<button type="submit" class="button" name="submit" >Register</button>  <br>
<hr class="hr-text gradient" data-content="OR">
</center>

<div class="socialmediaIcons">

<a href=""><i class="fa-brands fa-facebook"></i></a>
<a href=""><i class="fa-brands fa-instagram"></i></a>
<a href=""><i class="fa-brands fa-twitter"></i></a>
<a href=""><i class="fa-brands fa-youtube"></i></a>

</div>

<div class="have">
<p>Already have an account?</p>
<a href="#">Sign In</a>
</div>

</Fieldset>
</form>
</div>
</body>
</html>