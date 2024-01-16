<DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'popins',sans-serif;
}

.catagory{
 overflow:hidden;
background-color:#800000;
text-align:center;
}
.catagory ul{
	display:inline-flex;
	list-style-type:none; 
	width:1400px;
} 



.catagory ul li {
display:block;
padding-bottom:10px;
padding-top:10px;
width:150px;
margin:10px;

}
.catagory ul li a{
background-color:none;
text-decoration:none;
color:white;
font-size:16px;
}

.cat li a:hover{
background-color:brown;
padding:10px;
}

nav{
	display:flex;
	width:100%;
	background:white;
	position:relative;
	justify-content:space-between;
	text-align:center;
	padding:5px 30px;

}
nav ol{
	display:flex;
	list-style:none;
	margin:auto 0;
   
	}

	
nav ol li{

	margin:0 2px;
	}
nav ol li a{
background:white;
 color:maroon;
font-size:18px;
text-decoration:none;
text-transform:capitalize;
letter-spacing:1px;
padding:5px 10px

} 

 
nav.search_box{
	display:flex;
	margin:auto 0;
    height: 20px;
	
}
nav .search_box input{
	border:1;
	border-radius:25px;
	background:white;
	height:35px;
	padding:0 10px;
	font-size:15px;
	width:350px;
	margin-top:10px;
	
}

nav search_box span{
	color:black;
	font-size:20px;
	background-color:white;
	height:100%;
	padding:8px;
    position:relative;
	z-index:1;
	cursor:pointer;
}
nav search_box span:hover{
		
	color:white;
}
nav search_box span::after{
	height:100%;
	width:100%;
	content:'';
	background:maroon;
	 position:absolute;
	top:0;
	left:0;
	z-index:-1;
	
}
nav search_box span:hover::after{
	width:100%;
}
nav ol li a i{
padding:5px;
}
nav ol li a:hover{
color:black;}

	
@media	screen and (max-width:1250px){
nav{
display:block;
padding:0px;
}
nav .icon{
	display:inline-block;
padding:0px 30px;
}
nav .search_box{
width:100%;
height:25px;
display:inline-flex;
justify-content:center;
}

nav .search_box input{
width:90%;

}
nav ol{
	
display:flex;
flex-direction:column;

width:100%;
 text-align:center;
 margin:10px;
}
nav ol li{
padding:5px 15px;
}
nav ol li a{
background:none;}
}

.submenu_a,.submenu_b{
display:none;
}
.submenu_a ul,.submenu_b ul{
list-style-type:none;
background:white;

}
.submenu_a ul li,.submenu_b ul li{
height:30px;
margin-top:5px;
display:flex;
justify-content:center;

}
.submenu_a ul li a,.submenu_b ul li a{
font-size:15px;
border:1px;
background:none;

color:black;
}

nav ol li:hover .submenu_a,nav ol li:hover .submenu_b{
display:block;
position:absolute;

	margin-top:0px;
	margin-left:-100px;
	
	
}
nav ol li:hover .submenu_a ul,nav ol li:hover .submenu_b ul{
display:block;


}

.submenu_a ul li:hover,.submenu_b ul li:hover{
 background:darksalmon;
}

<!----footer------------->
.footer{
	background-color:black;
	width:100%;
	padding:0px 30px 20px;
}
.socialmediaIcons{
	padding:5px;
	background-color:#800000;
	display:flex;
	justify-content:center;

}
.socialmediaIcons a{
	
	text-decoration:none;
	padding:5px;
	background:none;
	margin:10px;
	border-radius:25%;
	
}
.socialmediaIcons a i{
	font-size:30px;
	color:white;
	opacity:0.9;
}
.socialmediaIcons a i:hover{
	color:black;
}

.footernav{
	background-color:black;
	margin: 0;
	
	padding:30px;
}
.footernav ul{
	display:flex;
	justify-content:center;
	list-style-type:nonedisc;
}
.footernav ul li {
	color:white;
	
	list-style-type:none;
	font-size:1em;
	
}
.footernav ul li a{
	color:white;
	margin:20px;
	text-decoration:none;
	font-size:1em;
	opacity:0.7;
}
.footernav ul li a:hover{
	opacity:1;
	
}
.footerbottem{
	background-color:black;
	color:white;
	}
	
	.bidnest{background-color:black;
		color:white;
		font-size:3em;
		text-align:center;
		padding: 20px 0px 0px;
		
	
	}

.footerbottem p{
	font-size:0.8em;
	padding: 15px 0px 10px;
	text-align:center
	
}

<!-------------------home section-------------------------->
.mySlides
  {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  z-index:-1;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}



.text01 h3{
font-size:500%;
margin-bottom:10px;
 color:#F58714 ;
 font-family:times new roman;
}
.text01 span{
font-size:35px; 
color:#DBDFD3; 
font-family:times new roman;
}
.text01 p{
font-size:20; 
color:white; 
font-family:times new roman ;
}
.text02 h3{
font-size:500%;
margin-bottom:10px;
 color:#F58714 ;
 font-family:times new roman;
}
.text02 span{
font-size:35px; 
color:#C6753A; 
font-family:times new roman;
}
.text02 p{
font-size:20; 
color:black; 
font-family:times new roman ;
}
.text{
	text-align:left;
	margin-bottom:30%;
	margin-left:10%;
	vertical-align:top;
	position: absolute;
	 padding: 8px 12px;
 
  bottom: 8px;
  width: 100%;
  
}




.fade {
  animation-name: fade;
  animation-duration: 3s;
  
}
@keyframes fade {
  from {opacity: .7} 
  to {opacity: 1}
}


@media only screen and (max-width: 700px) {
  .text {font-size: 11px}
}
</style>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width,initial">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="http://kit.fontawesome.com/67c66657c7.js">
</script>

</head>

<body>

<nav>
<div class="icon">
<img src="F:\Maheesha\pic\Bid Nest.png" alt="img" width="200px" height="60px">
</div>
<div class="search_box">
<input type="text" placeholder="Search..." >
<span class="fa fa-search"></span>
</div>
<ol>
<li><a href=""><i class="fa-solid fa-heart"></i><b>Wish list</b></a></li>
<li><a href="Signup.html"><i class="fa-solid fa-user-plus"></i><b>Sign Up</b></a></li>

<li><a href="Login.html"><i class="fa-solid fa-right-to-bracket"></i><b>Login</b></a></li>
<li><a href=""><i class="fa-solid fa-bars" style="font-size:25px;" ></i></a>
<div class="submenu_b">
<ul>

 <li><a href="">Upcoming auctions</a></li>
 <li><a href="howtoauction.html">How auctions work</a></li>
 <li><a href="help.html">Help</a></li>
 <li><a href="About Us.html">About us</a></li>
 </ul>
</div>
</li>

</ol>
</nav>
<div class="catagory">
<ul class="cat">
<li ><a href=beds.html>Beds</a></li>
<li><a href=Tables.html>Tables and Stools</a></li>
<li><a href=chairs.html>Chairs</a></li>
<li><a href=clocks.html>Clocks</a></li>
<li><a href=mirrors.html>Mirrors</a></li>
<li><a href=cupboards.html>Cupboards</a></li>
<li><a href=sofas.html>Sofas</a></li>

<li><a href=shelves.html>Shelves</a></li>
 


</ul>
</div>

<!--interface picture-->


<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="—Pngtree—interior design with vintage wooden_3749244.jpg" style="width:100%" >
  <div class="text">
<div class="text01">

<h3> Bid On Furnitures </h3>
<span>Antique or any types of furnitures are available here...</span>
<p>Unlock the Excitement and Dive into the Online Auction Experience, Where Bids Create Opportunities<br> and 
Winning is Just a Click Away.....!<br>Join Our Online Auction Platform and Secure Exclusive Deals with the Power of Your Bid!
</p>


</div>
</div>

</div>
<div class="mySlides fade">
 
  <img src="—Pngtree—luxurious vintage armchair in a_4056254.jpg" style="width:100%">
  <div class="text">
<div class="text02">
<h3> Bid On Furnitures </h3>
<span>Antique or any types of furnitures are available here...</span>
<p>Unlock the Excitement and Dive into the Online Auction Experience, Where Bids Create Opportunities<br> and 
Winning is Just a Click Away.....!<br>Join Our Online Auction Platform and Secure Exclusive Deals with the Power of Your Bid!
</p>
</div>

</div>
</div>



</div>
<br>

 <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000);
}
</script>

<!--interface picture-->


<!-------footer------>

<div class="socialmediaIcons">

<a href=""><i class="fa-brands fa-facebook"></i></a>
<a href=""><i class="fa-brands fa-instagram"></i></a>
<a href=""><i class="fa-brands fa-twitter"></i></a>
<a href=""><i class="fa-brands fa-youtube"></i></a>

</div>
<div class="footer">
<p class="bidnest">BidNest</p>
<div class="footernav">
<ul>

<li><a href="">  Blog</a></li>
<li><a href="About Us.html">  About us</a></li>
<li><a href="">  Contact</a></li>
<li><a href="help.html">  Help</a></li>

</ul>

</div>
<div class="footerbottem">
<hr color="#696969">
<p>© 2023 BidNest, LLC. and participating auction houses. All Rights Reserved.</p>
</div>
</div>






</body>
</html>