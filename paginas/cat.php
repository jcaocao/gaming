          <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT * FROM generes WHERE id='".$_GET["id"]."'");
					$cat = $conecta -> fetch();
						
						echo '<div style="background-image:/banners/'.strtoupper($cat["nom"]).'.jpg"
						<h2 class="tituloCat">'.strtoupper($cat["nom"]).'</h2><br>
							   <div class="desc">'.$cat["descripcio"].'</div><br><br>
							   </div>';
					
					$conecta -> tanca(); 
					
					$jocs = new BaseDeDades;
					$jocs -> consulta("SELECT * FROM jocs WHERE genere ='".$cat["id"]."'order by nom ASC");
					while($games = $jocs -> fetch())
					{
						echo '<a href="index.php?centre=joc&id='.$games["id"].'"><div class="jocCategoria"><img style="width:100%;" src="img/'.$games["foto"].'"/> '.$games["nom"].'</div></a>';
					}
					$jocs -> tanca(); 
					
				?>     