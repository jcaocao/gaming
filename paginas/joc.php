          <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT * FROM jocs WHERE id='".$_GET["id"]."'");
					$joc = $conecta -> fetch();
						echo '<h2 class="tituloCat">'.$joc["nom"].'</h2><br>';
						echo '<div id="totJoc">
						<div class="joc"><img style="width:100%;" src="img/'.$joc["foto"].'"/></div>
						<div id="informacio">
						<h4 class="info">Descripción: '. $joc["descripcio"].'</h4>
						<h4 class="info">Desarrollador: '. $joc["desarrollador"].'</h4>
						<h4 class="info">Genero: '. $joc["genere"].'</h4>
						<h4 class="info">Fecha lanzamiento: '. $joc["fecha"].'</h4>
						</div>
						</div>';
						
						
						
					
					$conecta -> tanca(); 
					
					$jocs = new BaseDeDades;
					$jocs -> consulta("SELECT * FROM links WHERE id_joc ='".$joc["id"]."'");
					while($link = $jocs -> fetch())
					{
						echo '<a href="'.$link["url"].'">Link 1</a>';
					}
					$jocs -> tanca(); 
					
				?>     