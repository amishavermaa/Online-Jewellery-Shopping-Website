<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/x-icon" href="./img/logo.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>S Ornaments</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	

<style>

body{
    font-family: 'Poppins', sans-serif;
    background-image: url('./img/back1.jpg');
	background-repeat: no-repeat; background-size: cover;
}

.content{
    margin:8.5%;
    background-color: #fff;
    padding: 4rem 1rem 4rem 1rem;
    box-shadow: 0 0 5px 5px rgba(0,0,0, .05);
	
}
.signin-text{
    font-style: normal;
    font-weight: 600 !important;

}
.form-control{
    display: block;
    width:100%;
    font-size: 1rem;
    font-weight: 400;
    line-height:1.5;
    border-color: #00ac96 !important;
    border-style: solid !important;
    border-width: 0 0 1px 0 !important;
    padding: 0px !important;
    color:#495057;
    height: auto;
    border-radius: 0;
    background-color: #fff;
    background-clip: padding-box;
}


.form-control:focus{

    color: #495057;
    background-color: #fff;
    border-color: #fff;
    outline: 0;
    box-shadow: none;
}

.btn-class{
    border-color: #00ac96;
    color: #00ac96;
}
.btn-class:hover{
    background-color:  #00ac96;
    color: #fff;
}
</style>

</head>

<body>
<?php 
		include "navbar.php"; 
	?> 
<form action="register_a.php" method="post" enctype="multipart/form.data">
		  <div class="container">
       <div class="row content">
  
 <h3 class="signin-text mb-3">Register</h3>
	  <p class="hint-text">Create your account</p>
		<div class="form-group">
				<div class="row mb-4 ">
					<div class="col">
					 	<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
					</div>
					<div class="col">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
					</div>
				</div>
			</div>
				<div class="form-group mb-4">
					<input type="email" class="form-control" name="email" placeholder="Email" required="required">
				</div>
				<div class="form-group mb-4">
					<input type="password" class="form-control" name="pass" placeholder="Password" required="required">
				</div>
				<div class="form-group mb-4">
					<input type="password" class="form-control" name="pass" placeholder="Confirm Password" required="required">
				</div>
				
				<div class="form-group mb-4">
					<label class="form-check-label">
						<input type="checkbox" required="required"> I accept the <a href="#">Terms Of Use</a> & <a href="#">Privacy Policy </a>
					</label>
				</div>
				<button type="submit" name="save" class="btn btn-primary btn-block mb-4">Register Now</button>
				<div class="text-center">Already have an Account?
					<a href="login.php">Sign In</a>
				</div>
			</div>


</div>
</div>
		</form>	

</body>
<?php 
		include "footer.php"; 
	?> 
</html>