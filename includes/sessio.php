<?php
//ativa les variables de sessio
session_start();

//la sesio sta oberta?
if(isset($_SESSION["email"]))
{
	//lusuari ja esta loguejat
	}
	else{
			$_SESSION["log"]=false;
			$_SESSION['admin']=0;
		}

//$_SESSION["mail"]="jm@asd.com";

function sessionLogin($mail, $iden, $estado, $admin)
{
	
			$_SESSION["log"]=true;
			$_SESSION['admin']=$admin;	
			$_SESSION["email"]= $mail;
			$_SESSION["iden"]=$iden;
			$_SESSION["estado"]=$estado;
			
			
}

/*function logout()
{
	$_SESSION = array();

	// If it's desired to kill the session, also delete the session cookie.
	// Note: This will destroy the session, and not just the session data!
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	
	// Finally, destroy the session.
	session_destroy();
}*/

	?>
   