<?php
/*session_start();
if(isset($_SESSION["validado"])){
            if ($_SESSION["validado"]=="ok"){*/
			
class usuari{
    public $email;
    public $pass;
	public $auth;
	
    
    
    function usuari($e,$p,$a) {
        session_start();
		if(isset($_SESSION['auth']))
		{
			$this->email=$_SESSION['email'];
			$this->pass=$_SESSION['pass'];
			$this->auth=$_SESSION['auth'];
		}
        else 
		{
			if(isset($_COOKIE['auth']))
			{
				//comprovem cookies
			}
			
		}
    } 
	function comprovarLogin()
	{
		
	}    
   function crear(){
        mysql_connect("localhost","root","");
           if(mysql_select_db("gamingtorrents")){
               if(mysql_query("select * from usuaris")){
                   $sql = "INSERT INTO usuaris (email,  pass) VALUES('"; 
                        $sql.=$this->email."','";
                        
                        $sql.=$this->pass."');";
                   
                        $ola = mysql_query($sql);
                        
                        echo "usuari creat correctament";
                        header("Location: adminreg.php");

               }
               else{
               crearTaulaUsuari();
                                  
               }
                   
           }
    }
	function crearTaulaUsuari()
	{
		$sql = "CREATE TABLE usuaris(
                   id INT(10) NOT NULL auto_increment,
                   email VARCHAR(100) NOT NULL,
                   
                   pass VARCHAR(100) NOT NULL,
				   authid VARCHAR(12) NOT NULL,
                   PRIMARY KEY(id)
                   ) ENGINE = INNDOB;";
               
               $tb = mysql_query($sql);
	}
	
}

            /*}
}
else{
    $_SESSION["validado"]="no";
            header("Location: adminreg.php");
        }*/

?>
