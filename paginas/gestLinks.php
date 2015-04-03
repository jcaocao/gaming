 <h1>Gestion de Links</h1>
 <form class="form-horizontal">
  <div class="form-group">
    
    <div class="col-sm-6">
    <h2>Juegos</h2>
      <select  class="form-control" >
   <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT nom, id FROM jocs order by nom ASC");
					while($cat = $conecta -> fetch())
					{
						echo '<option>'.strtoupper($cat["nom"]).'</option>';
					}
					$conecta -> tanca(); 
				?>  
</select><br/>
<button class="btn btn-default" type="submit">Button</button>
    </div>
    <div class="col-sm-6">
    <h2>Links del juego</h2>
      <select multiple class="form-control" style="height:400px;">
  <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT email, id FROM usuaris where estado = 1 order by id ASC ");
					while($cat = $conecta -> fetch())
					{
						echo '<option>'.strtoupper($cat["email"]).'</option>';
					}
					$conecta -> tanca(); 
				?>  
</select><br/>
<button class="btn btn-default" type="submit">Button</button>
    </div>
  </div>
  
</form>    