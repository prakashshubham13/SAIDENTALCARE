<?php
require 'config/config.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
	*{
			margin: 0;
			padding: 0;

		}
		.container{
			position: relative;
			padding: 0 100px;
			min-height: 100vh;
			overflow: hidden;
		}
		.container:before{
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 350px;
			height: 100%;
			background: #333;
			z-index: -2;
		}
		.container:after{
			content: 'DENTAL care';
			position: absolute;
			bottom: 0;
			left: 0;
		font-size: 13vw;
		font-weight: 700;
			color: #000;
			z-index: -2;
			opacity: 0.04;
		}


		.header{
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 30px 0;
		}
		.header .logo{
			text-transform: uppercase;
			font-weight: 700;
			color: #333;
			font-size: 30px;
			text-decoration: none;
		}
		.logo span{
			
			color:#00BFFF;
		}
		.header ul{
			position: relative;
			display: flex;
		}
		.header ul li{
			list-style: none;
			margin: 0 20px;
		}
		.header ul li a{
			position: relative;
			text-decoration: none;
			font-size: 18px;
			text-transform: uppercase;
			color: #333;
			padding: 4px 5px;
		}
		.header ul li:nth-child(3) a{
			color: white;
	
		}
		.header ul li:nth-child(4) a{
			color: white;
		}
		.header ul li a:before{
			content: '';
			position: absolute;
			top:0;
			left:0;
			width: 0;
			height: 100%;
			background-color: #00BFFF;
			z-index: -1;
			transition: 0.5s ease-in-out;
		}
		.header ul li a:hover:before{
width: 40px;

		}
		.header ul li a.active:before{
width: 40px;

		}
        

.menu{
	display:none;
}















.sec{

display:flex;
justify-content: space-evenly;
display: grid;
grid-template-columns: 1fr 1fr;
padding: 10px;


}
.cards{
    
width: 350px;
height: 300px;
background-color: #ffffff;  
margin: 10px;
border-radius: 10px;
box-shadow: -10px -10px 10px rgba(255, 255, 255,0.5),
15px 15px 15px rgba(0, 0, 0, 0),
0px 5px 20px rgb(0, 0, 0),
inset 4px 4px 5px rgba(0, 0, 0, 0.2),
inset -4px -4px 5px rgba(0,0,0,0.3);
}
.im{
 height: 70%;
 text-align: center;
}
.im img{
    
   margin-top: 50px;
}
.text{
    text-align: center;
    height: 30%;
    color: rgb(175, 174, 174);
}


.btnn{
    position: relative;
    background-color: rgb(255, 255, 255);
    float: right;
    color: rgb(0, 0, 0);
    padding: 10px;
    border-radius: 5px;
    margin-right: 10px;
    margin-bottom: 5px;
    box-shadow: 2px 2px grey,
    -2px -2px grey;
    font-weight: 500;
    outline: none;

}






@media(max-width:1092px)
{

    .sec{

display:flex;
justify-content: space-evenly;
display: grid;
grid-template-columns: 1fr 1fr;
}

.cards{
    
    width: 300px;
    height: 300px;
}
}




@media(max-width:992px)
{


.sec{
    grid-template-columns: 1fr;
}
.cards{
    
    width: 300px;
    height: 300px;
}

	.container{
		
		padding: 20px 50px ;
	}
	.container:before{
		display: none;
	}
	.header{
		padding: 0;
	}
	.bannertext h2{
		font-size: 20px;
	}
	.content{
		margin-top: 20px;
		flex-direction: column-reverse;
	}
	.bannertext h1{
		z-index: 5;
		color: #000;
		transform: translate(20px,-60px);
		background-color: white;
	}
	.content .bannerimg{
		width: 100%;
		height: 40%;
		margin: 20px 0;
	}
	.bannertext{
		max-width: 100%;
	}
	.social{
		position: relative;
		display: flex;
	
		bottom: 0;
		right: 0;
		float: right;
		margin-top: 0px;
		z-index: 111;
	}
	.myDIV{
		display: none;


	}

.header ul{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	background: #fff;
	display: block;
	
	display: none;
	z-index: 10000;
	padding: 100px 0;
	}
.header ul li{
	padding: 20px;
	text-align: center;

}
.header ul li a{
	color: #333  !important;
	font-size: 36px;
}
.header ul li a:hover:before{
width: 100%;

		}
		.header ul li a.active:before{
width: 100%;

		}
	


.menu{
	display: inline;
	
	position: fixed;
	right: 50px;
	cursor: pointer;
	padding: 8px;
	z-index: 111111;
	background: transparent;
	background-repeat: no-repeat;
	width: 30px;
	height: 30px;
	font-size: 40px;
	background-position: 8px;
    
	
}





}
#hide{
    display: none;
}












/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
  padding: 10px;
background: transparent;
  height: 300px; /* Should be removed. Only for demonstration */
  
}

input,textarea,button{
  border-radius: 5px;
  margin: 10px;
  padding: 10px;
  text-align: center;
  background: transparent;
  border: 1px solid #00BFFF;
  width: 70%;
  outline: none;

  font-size: 20px;
}
button{
    background-color: #00BFFF;
}
form{
  text-align: center;
  color: #00BFFF;
}

input:focus{
  border: 1px solid black;
}



button:hover{
  color: rgb(255, 255, 255);
  border: 2px solid rgb(43, 43, 43);
}

    </style>
</head>
<body>
   
    

    <script src="https://kit.fontawesome.com/8893b709f5.js" crossorigin="anonymous"></script>


    <div class="menu menuu" onclick="my()">
		<i class="fas fa-bars" style="color:#00BFFF;" ></i>
	</div>
	<div class="container">
		
		<div class="header">
			<a href="#" class="logo"><span>SAI</span> DENTAL</a>


		
			<ul id="myDIV">
				
				<li ><a href="index.html"  class="tablinks" id="defaultOpen">HOME</a></li>
				<li><a href="skill.html"    class="tablinks" >SERVICES</a></li>
				<li><a href="gallery.html"  class="tablinks">GALLERY</a></li>
			<li><a href="contact.html"  class="tablinks">CONTACT</a></li>
				
		</ul>
			
			
        </div>
        
        <br>
        <br>




<div class="column">
    <fieldset style="border:1px solid #00BFFF;">
        <form action="apoint.php" method="post">
      <input type="text" placeholder="NAME" name="name">
      <br>
      <input type="tel" name="phone" id="" placeholder="PHONE">
      <br>
      <button name="submit">
         <i class="fa fa-paper-plane"></i><span class="send-text" >SEND</span>
     
     
     </button>
    </form>
   </fieldset>
   </div>

   <?php

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$query="insert into apoint (name,phone) values('$name','$phone')";
$query_run=mysqli_query($con,$query);

if($query_run)  
{
    echo'<script type="text/javascript">swal("APPOINTMENT!", "CONFIRMED", "success");</script>';
}

else{
    echo'<script type="text/javascript">swal("Good job!", "You clicked the button!", "success");</script>';
}

}



?>
    <script>
        function my() {
            var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        </script>


<script>
    var btnn = document.getElementsByClassName('btnn');
    var abc = document.getElementById('hide');
           document.addEventListener('click',function(btnn){
   
               if (abc.style.display === "none") {
           abc.style.display = "grid";
         } else {
           abc.style.display = "none";
         }
   
           });
       </script>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>