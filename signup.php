
<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>My Social Network</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
	
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	

</head>

<body>

<section class="main">
	<div class="layer">
		
		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="index.html"><span class="fa fa-key"></span> My Social Network</a></h1>
			</div>
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="index.html" class="">Login</a>
					</li>
					<li class="active">
						<a href="signup.php" class="">Sign Up </a>
					</li>
					
					<li class="">
						<a href="#" class="">Contact</a>
					</li>
				</ul>
			</div>
        </div>
        
		<div class="content-w3ls">
			<div class="text-center icon">
			</div>
			<div class="content-bottom">
				<form action="signupreply.php" method="post" onSubmit="return  validation()")>
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="email" type="text" id="email" placeholder="email"  >
							
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="Username" id="Username" type="text" placeholder="Username"  >
							
						</div>
                    </div>
                    <div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="phonenumber" id="phonenumber" type="text" placeholder="phonenumber"  >
							
						</div>
                    </div>
                    <div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="pwd" id="pwd" type="Password" placeholder="Password"  >
							
						</div>
                    </div>
                    <div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="repwd" id="repwd" type="Password" placeholder=" Confirm Password"  >
							
							
						</div>
                    </div>
                    <div class="field-group">
							<span class="" aria-hidden="true"></span>
							<div class="wthree-field">
									<p style ="text-align:center">SHOW PASSWORD </p>
									<input type="checkbox"  onclick="myFunction()" >
							</div>
						</div>
					<div class="wthree-field">
						<button type="submit" class="btn">Get Started</button>
                    </div>
                    <div class="wthree-field">
							<button  type="button" class="btn"><a href="index.html">Existing User? Login here </a></button>
						</div>
					
					
</section>
<script>
		function myFunction(){
			let x=document.getElementById("pwd");
			let y=document.getElementById("repwd")
			if(x.type==="password"||y.type==="password"){
				x.type="text";
				y.type="text";

			}
			else{
				x.type="password";
				y.type="password";
			}
		}
	</script>
<script>
function validation(){
	
		
		let email = document.getElementById('email');
		
		let uname = document.getElementById('Username');
		let mobile = document.getElementById('phonenumber');
		let pass = document.getElementById('pwd');
		let repass = document.getElementById('repwd');
		
		
		if(email.value==""){
			
			alert("Email Can't be blank");
			email.focus();
			return false;
		}
		else{
			let data = email.value;
			let p1 = data.indexOf('@');
			let p2 = data.indexOf(".");
			if(p1==-1 || p2 ==-1){
			
			alert("There must be @ and . character in your email address");
			email.focus();
			return false;
			}
		}
		if(uname.value == ""){
			
			alert("First Name Can't be blank");
			uname.focus();
			return false;
		}
		else{
			
			if(uname.value.length<4 || uname.value.length>20){
			
			alert("First Name must have more than 3 Character and less than 20 Character");
			uname.focus();
			return false;
		}
		}
		if(mobile.value == ""){
			
			alert("Mobile Number Can't be blank");
			mobile.focus();
			return false;
		}
		
		else {
			if(isNaN(mobile.value)){
		
			alert("There must be digit only in Mobile Number");
			mobile.focus();
			return false;
			}
			else{
				if(mobile.value.length!=10){
					
					alert("There must be 10 digit only in Mobile Number");
					mobile.focus();
					return false;
				}
			}
		}
		if(pass.value==""){
			
			alert("Password Can't be blank");
			pass.focus();
			return false;
		}
		 if(repass.value == ""){
			
			alert("Re-Password Can't be blank");
			repass.focus();
			return false;
		}
		if(pass.value != repass.value){
			
			alert("Re-Passowrd and Password Cannot match");
			repass.focus();
			return false;
		}
		return true;
}
</script>
</body>
</html>