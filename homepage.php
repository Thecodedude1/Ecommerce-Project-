<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $first_name = $_SESSION["first_name"];
    $last_name = $_SESSION["last_name"];

    echo "Welcome $first_name $last_name";
}


include "header.php";
include "code.alerts.php";
?>

<style>
    .home-main{
       
			background:#007BFF;
			color:#fff;
			padding: 13%;
			text-align: center;
		}
		.blinker{
			animation: blinker 1.5s linear infinite;
		}
		@keyframes blinker {
		  50% {
			opacity: 0;
		  }
		}
		.home-main button{
			background: #fff;
			color: #5812c5;
			border-radius: 0;
			font-weight: 700;
			width: 16%;
			height: 50px;
			top: 4%;
			margin-top: 3%;
		}
		.home-main button:hover{
			transition: 1s ease;
			color:#5812c5;
			width: 19%;
		}
		.content1-left{
			padding:9%;
		}
		.content1-right{
			padding:9%;
			background:#e4e4e4;
		}
		.home-content2{
			background: #adb5bd;
			padding: 1.4%;
			text-align: center;	
		}
		.home-content2 p{
			font-size: 18px;
			line-height: 50px;
		}
		.home-content2 p span{
			font-weight: 500;
		}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid home-main">
		<h2>Start Shopping Now&#128717;&#65039;</h2>
		<button onclick="document.location='store.php'" type="button" class="btn btn-default">Let's Go<span class="blinker">&#x2192;</span></button>
		
	</div>
	<div class="container-fluid home-content1">
		<div class="row">
			<div class="col-md-6 content1-left">
				<h3>Why Choose Us<span class="blinker">?</span></h3>
				<p>We are dedicated to ensure great quality with every purchase</p>
				<!-- <div class="content1-left"></div> -->

				<iframe title="Test - Page 1" width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiMmY4YjU2Y2UtMmYyZC00MGZhLTg3ZDMtNmNkY2JmNGVhOTRkIiwidCI6ImNiOGMwNDBjLTlmMjYtNDJlMC1hNThmLWZkM2ExMmVlNzRhMyIsImMiOjF9" frameborder="0" allowFullScreen="true"></iframe>
			</div>
			<div class="col-md-6 content1-right">
				<p>Earn rewards while you shop its as simple as that! <br> With every purchase you gain points along the way</p>
			</div>
		</div>
	</div>
	<div class="container-fluid home-content2">
		<p><span>Register</span> with <span>Us</span> for all the things <span>you need</span>, including new <span>releases</span> and <span>much more</span>.</p>
	</div>



<?php include "footer.php";  ?>