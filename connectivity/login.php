<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="./img/logo.ico">
	
	<title>Jewellery Store</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
body{
    font-family: 'Poppins', sans-serif;
    background-color: #00ac96;
}
.content{
    margin: 8%;
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

<div class="container">
<form action="loginProcess.php" method="post" enctype="multipart/form.data">
	
  <div class="row content">
    <div class="col-md-6 mb-3">
        <img src="..\img/login.jpg" class="d-block w-100" alt="...">
    </div>
	 <div class="col-md-6">
      <h3 class="signin-text mb-3">Login</h3>
	  <p class="hint-text">Enter Login Details</p>
      <form action="loginProcess.php" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
          <label for="email">Email</label>
         	<input type="email" class="form-control" name="email" required="required">
       </div>
		
        <div class="form-group mb-3">
          <label for="password">Password</label>
             <input type="password" class="form-control" name="pass" required="required">
        </div>
		<button type="submit" name="save" class="btn btn-primary btn-block mb-4">Login</button>
				<div class="text-center">Don't have an account? 
					<a href="register.php">Register Here</a>
				</div>
        
      </form>
    </div>
  </div>
</div>

</body>
</html>