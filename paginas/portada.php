	<?php
					$jocs = new BaseDeDades;
					$jocs -> consulta("SELECT * FROM jocs order by id DESC");
					while($games = $jocs -> fetch())
					{
						echo '<a href="index.php?centre=joc&id='.$games["id"].'"><div class="jocCategoria"><img style="width:100%;" src="img/'.$games["foto"].'"/> '.$games["nom"].'</div></a>';
					}
					$jocs -> tanca(); 
					
				?>   