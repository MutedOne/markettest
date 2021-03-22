<?php include 'action/header.php' ;
		

		$test = new controller\admin\AdminController;
		//$test->testAdminCon();
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminregister.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin.php">Login</a>
      </li>
    
     
    </ul>
   
  </div>
</nav>
<div><H1>Login credentials admin </H1></div>
<form class="container mt-3" method="POST" action="action/admin/getAdmin.inc.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emailAdminLogin" value="z@gmail.com">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwordAdminLogin" value="z">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'action/footer.php' ?>