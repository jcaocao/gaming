<?php
//Aqui comprovem el formulari de login
if(isset($_POST["login"]))
{
	$email = trim($_POST["email"]);
	$pass = trim($_POST["pass"]);
	
	switch($pass & $email)
	{
		case 0: if(!isset($email))
		{
			echo "No has introduit el correu <br>";
			 break;
		}
		case 1: if(!isset($pass))
		{
			echo "No has introduit la contrasenya <br>";
			break;
		}
		
		case 2: $miconexion = new BaseDeDades;
			$miconexion -> consulta("Select * from usuaris where email = '$email'");
			$num = $miconexion -> numrows();
			$userPas = $miconexion -> fetch();
			$miconexion -> tanca();
			if($num==1)
			{
				if(md5($pass)== $userPas["pass"])
				{
					sessionLogin($userPas["email"],  $userPas["authid"],  $userPas["estado"], $userPas["admin"]);
					echo "Has logueado correctamente";
					break;
				}
				
				
			}
		 default:
		 echo "Ha habido un problema con el login";
	};
	
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
			$miconexion -> consulta("Insert into usuaris (email, pass, authid) values ('".$email."' , '".md5($pass)."', '".substr(md5(microtime()),			1,12)."') ");
			$miconexion -> tanca();
	};
	
}
?>

