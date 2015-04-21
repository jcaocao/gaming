 <h1>Gestion de Links</h1>
 <form class="form-horizontal" action="#" method="POST">
  <div class="form-group">
    <div class="col-sm-10">
    <h2>Juegos</h2>
      <select name="jocTriat" class="form-control" >
      
   <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT nom, id FROM jocs order by nom ASC");
					while($cat = $conecta -> fetch())
					{
						echo '<option value="'.$cat["id"].'">'.strtoupper($cat["nom"]).'</option>';
					}
					$conecta -> tanca(); 
					
				?>  
			</select><br/>
			<button class="btn btn-default" type="submit">Button</button>
    	</div>
    </div>
 </form>
    <div class="col-sm-10">
    <h2>Links del juego</h2>
    <?php if(isset($_POST["jocTriat"])){
      
      echo'<div class="taula"><table class="table table-hover">
							<thead>
								<tr>
									<th>Link</th>
									<th>Autor</th>
									<th>Cambiar Estado</th>
								</tr>
							</thead>
							<tbody>';
							
							$joc = new BaseDeDades;
							$joc -> consulta("SELECT * FROM links WHERE id_joc='".$_POST["jocTriat"]."'");
							while($links = $joc -> fetch())
									{
										echo '<tr><td>'.$links["url"].'</td>
										<td>'.$links["id_autor"].'</td>';
										if($links["activo"]==0){
											echo'<td><a href=#> Desactivar	</a></td>
											';}
										else{
											echo'<td><a href=#> Activar	</a></td>
											';}
										echo'</tr>';
									}
							$joc -> tanca(); 
								
								echo'							
							</tbody>
						</table></div>';
						}?>