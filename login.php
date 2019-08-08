<!DOCTYPE html>
<html>
<head>
	<?php include_once('include/head.php');?>
	<link rel="stylesheet" href="/winery/mycss/main.css" type="text/css">
	<script src="myjs/myjs.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
</head>
<body>
	<?php include_once('include/header.php');?>
	<br><br><br>
	<div class="container">
           <br><br><br>
           <div class="row" >
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex" style="background:no-repeat scroll center url('/webofart/image/web/regfore4.jpg');">
                            <!-- Background image for card set in CSS! -->
                        </div>
                        <div class="card-body">
                            <h1 class="card-title text-center" style="font-size:50px;">LOGIN PAGE</h1>
                            <form action="/winery/validate.php" method="POST"class="form-signin">
                                <div class="form-label-group">
                                    <input type="text" id="inputusername" class="form-control" placeholder="Username" required autofocus name="username">
                                    <label for="inputusername">Username</label>
                                </div>
                                
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                    <label for="inputPassword">Password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>>