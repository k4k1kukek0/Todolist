<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
<div class="container-fluid">
	<div class="row">
    <div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
				<h2>
				  <center><b> LOGIN TO DO LIST </b></center>
				</h2>
				<form class="form-horizontal">
      <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
  </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
    </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">SIGN IN</button>
      </div>
    </div> <br>
    <p>Don't have an account?</p>
    <a href="register.php"><b>SIGN UP</b></a>
  </form>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>
</div>
  </body>
 
</html>