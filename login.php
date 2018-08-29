<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">

      <form class="form-signin">
        <div class="brandname"">
        	<img src="images/logo.png" class="img-responsive">
        </div>
        <div class="form-group">
        	<label for="username" class="sr-only">Username</label>
        	<input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="form-group">
        	<label for="inputPassword" class="sr-only">Password</label>
        	<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
       
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
</body>
</html>