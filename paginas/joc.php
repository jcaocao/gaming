          <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT * FROM jocs WHERE id='".$_GET["id"]."'");
					$joc = $conecta -> fetch();
						echo '<h2>'.$joc["nom"].'</h2><br>';
						//echo $joc["descripcio"].'<br><br>';
						
					
					$conecta -> tanca(); 
					
					$jocs = new BaseDeDades;
					$jocs -> consulta("SELECT * FROM links WHERE id_joc ='".$joc["id"]."'");
					while($link = $jocs -> fetch())
					{
						echo $link["url"];
					}
					$jocs -> tanca(); 
					
				?>     