 <?php 
 
 
 
 if(empty($_POST["addJoc"])){
		 echo'<div class="pad10"><h1>AÑADIR UN JUEGO NUEVO</h1>
		 <form class="form-horizontal"  method="post" action="index.php?centre=addJoc">
		  <div class="form-group">
			<label for="nomJoc" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-9">
			  <input type="text" class="form-control" id="nomJoc" name="nomJoc" >
			</div>
		  </div>
		  <div class="form-group">
			<label for="descripcio" class="col-sm-2 control-label">Descripcion</label>
			<div class="col-sm-9">
			  <textarea class="form-control" id="descripcio" name="descripcio" rows="3"></textarea>
			</div>
		  </div>
		  <div class="form-group">
			<label for="desarrollador" class="col-sm-2 control-label">Desarrollador</label>
			<div class="col-sm-9">
			  <input type="text" class="form-control" id="desarrollador" name="desarrollador" >
			</div>
		  </div>
		  <div class="form-group ">
		   <label class="col-sm-2 control-label">Genero</label>
		   <div class="col-sm-9">
			<select id="selectGenere" class="form-control" name="selectGenere">
			<option value="" >--Selecciona Genere--</option>
			';
		  
							$conecta = new BaseDeDades;
							$conecta -> consulta("SELECT nom, id FROM generes order by nom ASC");
							while($cat = $conecta -> fetch())
							{
								echo '<option value="'.$cat["id"].'">'.strtoupper($cat["nom"]).'</option>';
							}
							$conecta -> tanca(); 
						echo'     
			</select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="fecha" class="col-sm-2 control-label">Fecha lanzamiento</label>
			<div class="col-sm-9">
			  <input type="text" class="form-control" id="fecha" name="fecha">
			</div>
		  </div>
		   <div class="form-group">
			<label for="foto" class="col-sm-2 control-label">Portada</label>
			<div class="col-sm-9">
			<input type="file" id="foto" name="foto">
			  </div>
		  </div>
		  <div class="form-group">
			<label for="video" class="col-sm-2 control-label">Video</label>
			<div class="col-sm-9">
			<input type="text" class="form-control" id="video" name="video">
			  </div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-9">
			  <button type="submit" class="btn btn-default">Añadir</button>
			</div>
		  </div>
		  <input type="hidden" name="addJoc" value="true">
		</form></div> ';
	}else{
	
	$nomJoc = trim($_POST["nomJoc"]);
	$desc = trim($_POST["descripcio"]);
	$desarrollador = trim($_POST["desarrollador"]);
	$genere = $_POST["selectGenere"];
	$fecha = $_POST["fecha"];
	$foto = $_POST["foto"];
	$video = $_POST["video"];
	
	switch($nomJoc & $desc & $desarrollador & $genere & $fecha & $foto & $video)
	{
		case 0: if(!isset($nomJoc)||!isset($desc)||!isset($desarrollador)||!isset($genere)||!isset($fecha)||!isset($foto)||!isset($video))
		{
			echo "Hi ha un camp que no has introduit <br>";
			 break;
		}
		
		case 1: $miconexion = new BaseDeDades;
			$miconexion -> consulta("Select * from jocs where nom = '$nomJoc'");
			$num = $miconexion -> numrows();
			$miconexion -> tanca();
			if($num!=0)
			{
				echo "El joc que has introduit ja existeix  <br>";
				break;
			}
		case 2: if(strlen ($fecha)!=10){
			echo "El formato no de la fecha no es correcto <br>";
			break;
		}
		 case 3: {
		 $miconexion = new BaseDeDades;
			$miconexion -> consulta("INSERT INTO jocs (nom, genere,descripcio, desarrollador, fecha, foto, video) VALUES ('".$nomJoc."' , '".$genere."', '".$desc."' ,'".$desarrollador."','".$fecha."' ,'".$foto."','".$video."')") or die($miconexion->error());
			$miconexion -> tanca();
		 }
	};
	
	
	
	
	
	}
   ?>

