<?php
//Aqui comprovem el formulari de login
if(isset($_POST["login"]))
{
	//________________________-
	//aqui  fata fer asdasdasdasd
}
//xcv
if(isset($_POST["reg"]))
{
	$email = trim($_POST["email"]);
	$pass = trim($_POST["pass"]);
	$rpass = trim($_POST["rpass"]);
	
	
	switch($pass & $rpass & $email)
	{
		case 0: if(!isset($email))
		{
			echo "Hi ha un error en el correu <br>";
			 break;
		}
		case 1: if(!isset($pass, $rpass))
		{
			echo "Hi ha un error en les contrasenyes <br>";
			break;
		}
		
		
		case 2: if($pass!=$rpass)
		{
			echo "Les contrasenyes no coincideixen <br>";
			 break;
		}
		case 3: $miconexion = new BaseDeDades;
			$miconexion -> consulta("Select * from usuaris where email = '$email'");
			$num = $miconexion -> numrows();
			$miconexion -> tanca();
			if($num!=0)
			{
				echo "El email ja esta en ús <br>";
				break;
			}
		 case 4: 
		 $miconexion = new BaseDeDades;
			$miconexion -> consulta("Insert into usuaris (email, pass, authid) values ('".$email."' , '".md5($pass)."', '".substr(md5(microtime()),1,12)."' ");
			$miconexion -> tanca();
	};
	//fer login
	
}

if(isset($_SESSION["auth"]))
{
echo $_SESSION["email"];
}
else
{
	if(empty($_GET["form"]))
	{
 echo ' 
	<a href="index.php?form=l">LOGIN</a><br />
	<a href="index.php?form=r">REGISTRE</a>';
	}
	elseif($_GET["form"] == "r")
	{
		echo'
  
<form class="form-horizontal" method="post" action="index.php">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">      
    </div>
  </div>
  <div class="form-group has-error">
    <div class="col-sm-12">
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
	  
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="password" class="form-control" name="rpass" id="rpass" placeholder="Repita Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
		<input type="hidden" name="reg" value="true">
          
		  <input type="checkbox">
          Remember me </label> </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in </button>
    </div>
  </div>
</form>';
}
	elseif($_GET["form"] == "l")
	{
		echo '<form class="form-horizontal" method="post" action="index.php">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">      
    </div>
  </div>
  <div class="form-group has-error">
    <div class="col-sm-12">
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
	  
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
		<input type="hidden" name="login" value="true">
          
		  <input type="checkbox">
          Remember me </label> </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in </button>
    </div>
  </div>
</form>';
	}
}
?>

