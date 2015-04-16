<?php


if(isset($_SESSION["email"]))
{
	echo '<div class="navbar-form ">Hola '.$_SESSION["email"].'<a href="includes/logout.php">(Sortir)</a></div>';
}	
else
{
	if(empty($_GET["form"]))
	{
 echo ' 
	<li><a href="index.php?form=l">LOGIN</a></li>
	<li><a href="index.php?form=r">REGISTRE</a></li>';
	}
	elseif($_GET["form"] == "r")
	{
	echo' 
		
				<form class="form-inline navbar-form" method="post" action="index.php?centre=../includes/procesaForm">
				  <div class="form-group">
					<label class="sr-only" for="exampleInputEmail3">Email address</label>
					<input type="email" class="form-control" id="email" placeholder="Email">
				  </div>
				  <div class="form-group">
					<label class="sr-only" for="exampleInputPassword3">Password</label>
					<input type="password" class="form-control" id="pass" placeholder="Password">
				  </div>
				  <div class="form-group">
					<label class="sr-only" for="exampleInputPassword3">Password</label>
					<input type="password" class="form-control" id="rpass" placeholder="Repita Password">
				  </div>
				  <button type="submit" class="btn btn-default">Sign in</button>
				  <input type="hidden" name="reg" value="true">
				</form>
				
				  
				  ';
}
	elseif($_GET["form"] == "l")
	{
		echo '<form class="form-inline navbar-form" method="post" action="index.php?centre=../includes/procesaForm">
				  <div class="form-group">
					<label class="sr-only" for="exampleInputEmail3">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				  </div>
				  <div class="form-group">
					<label class="sr-only" for="exampleInputPassword3">Password</label>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
				  </div>
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Remember me
					</label>
				  </div>
				  <button type="submit" class="btn btn-default">Sign in</button>
				  <input type="hidden" name="login" value="true">
				</form>';
	}
}
?>

