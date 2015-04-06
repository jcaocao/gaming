<?php

if(empty($_POST["addGen"])){
	echo' <h1>AÑADIR UN GENERO NUEVO</h1>
 <form class="form-horizontal" method="post" action="index.php?centre=addCat">
  <div class="form-group">
    <label for="nomGenere" class="col-sm-2 control-label">Nom Genere</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nomGenere" name="nomGenere" >
    </div>
  </div>
  <div class="form-group">
    <label for="descripcioGenere" class="col-sm-2 control-label">Descripcio</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="descripcioGenere" name="descripcioGenere" rows="3"></textarea>
    </div>
  </div>
  
 
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	<input type="hidden" name="addGen" value="true">
      <button type="submit" class="btn btn-default">Añadir</button>
    </div>
  </div>
</form>   ';}

else{
	
	$nomGenere = trim($_POST["nomGenere"]);
	$descG = trim($_POST["descripcioGenere"]);
	
	
	switch($nomGenere & $descG)
	{
		case 0: if(!isset($nomGenere)||!isset($descG))
		{
			echo "Hi ha un camp que no has introduit <br>";
			 break;
		}
		
		case 1: $miconexion = new BaseDeDades;
			$miconexion -> consulta("Select * from generes where nom = '$nomGenere'");
			$num = $miconexion -> numrows();
			$miconexion -> tanca();
			if($num!=0)
			{
				echo "El genere que has introduit ja existeix  <br>";
				break;
			}
		
		 case 2: {
		 $miconexion = new BaseDeDades;
			$miconexion -> consulta("INSERT INTO generes (nom, descripcio) VALUES ('".$nomGenere."' , '".$descG."')") or die($miconexion->error());
			$miconexion -> tanca();
		 }
	};
	
	
	} 

?>