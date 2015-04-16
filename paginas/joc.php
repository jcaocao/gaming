          <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT * FROM jocs WHERE id='".$_GET["id"]."'");
					$joc = $conecta -> fetch();
						echo '<h2 class="tituloCat">'.$joc["nom"].'</h2><br>';
						echo '<div id="totJoc">
						<div class="joc"><img style="width:100%;" src="img/'.$joc["foto"].'"/></div>
						<div id="informacio" class="informacio">
						<h4 class="info"><b>Descripción: </b>'. $joc["descripcio"].'</h4>
						<h4 class="info"><b>Desarrollador:</b> '. $joc["desarrollador"].'</h4>
						<h4 class="info"><b>Genero:</b> '. $joc["genere"].'</h4>
						<h4 class="info"><b>Fecha lanzamiento:</b> '. $joc["fecha"].'</h4>
						</div>
						</div>';
						
						
						
					
					$conecta -> tanca(); 
					
					
					
					$videos = new BaseDeDades;
					$videos -> consulta("SELECT * FROM jocs WHERE id='".$_GET["id"]."'");
					$video = $videos -> fetch();
					echo '<iframe class="marginauto" width="560" height="315" src="'.$video["video"].'" frameborder="0" allowfullscreen></iframe>';
					
					$videos -> tanca(); 
					
					$jocs = new BaseDeDades;
					$jocs -> consulta("SELECT * FROM links WHERE id_joc ='".$joc["id"]."'");
					
					echo'<div class="taula"><table class="table table-hover">
							<thead>
								<tr>
									<th>Link</th>
									<th>Autor</th>
									<th>Estado</th>
									<th>Descargar</th>
								</tr>
							</thead>
							<tbody>';
								while($link = $jocs -> fetch())
									{
										
										echo '<tr><td>Link</td>
										<td>John</td>
										<td><a><span class="glyphicon glyphicon-ok" aria-hidden="true"></a>
										<a><span class="glyphicon glyphicon-remove" aria-hidden="true"></a></td>
										<td><a href="'.$link["url"].'"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td></tr>';
									}
								echo'							
							</tbody>
						</table></div>';
						
					
					
					$jocs -> tanca(); 
					
				?>     