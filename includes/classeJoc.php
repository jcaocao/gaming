<?php
/*session_start();
if(isset($_SESSION["validado"])){
            if ($_SESSION["validado"]=="ok"){*/
class joc{
    public $id;
    public $nom;
    public $descripcio;
	public $genere;
    public $links;
	public $fecha;
    
    function __construct($id,$nom,$descripcio, $genere, $links, $fecha) {
        $this->id=$id;
        $this->nom=$nom;
        $this->descripcio=$descpricio;
		$this->genere=$genere;
        $this->links=$links;
        $this->fecha=$fecha;
    }       
   function crear(){
        mysql_connect("localhost","root","");
           if(mysql_select_db("gamingtorrents")){
               if(mysql_query("select * from jocs")){
                   $sql = "INSERT INTO jocs (id, nom, descripcio, genere, links, fecha) VALUES('"; 
                        $sql.=$this->id."','";
                        $sql.=$this->nom."','";
						$sql.=$this->descripcio."','";
						$sql.=$this->genere."','";
						$sql.=$this->links."','";
                        $sql.=$this->fecha."');";
                   
                        $ola = mysql_query($sql);
                        
                        echo "joc creat correctament";
                        header("Location: adminreg.php");

               }
               
			   
           }
    }
}

function crearTaulaJoc(){
	
               $sql = "CREATE TABLE jocs(
                   id INT(10) NOT NULL auto_increment,
                   nom VARCHAR(100) NOT NULL,
                   descripcio VARCHAR(300) NOT NULL,
				   genere VARCHAR(100) NOT NULL,
				   links VARCHAR(100) NOT NULL,
				   fecha DATE(100) NOT NULL,
                   
                   PRIMARY KEY(id)
                   ) ENGINE = INNDOB;";
               
               $tb = mysql_query($sql);
                                  
               }
            /*}
}
else{
    $_SESSION["validado"]="no";
            header("Location: adminreg.php");
        }*/

?>
