 <h1>Gestion de Usuarios</h1>
 <form class="form-horizontal">
  <div class="form-group">
    
    <div class="col-sm-6">
    <h2>Usuarios permitidos</h2>
      <select multiple class="form-control" style="height:400px;">
   <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT email, id FROM usuaris where estado = 0 order by id ASC");
					while($cat = $conecta -> fetch())
					{
						echo '<option>'.strtoupper($cat["email"]).'</option>';
					}
					$conecta -> tanca(); 
				?>  
</select><br/>
<button class="btn btn-default" type="submit">Button</button>
    </div>
    <div class="col-sm-6">
    <h2>Usuarios Baneados</h2>
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