 <h1>AÑADIR UN JUEGO NUEVO</h1>
 <form class="form-horizontal">
  <div class="form-group">
    <label for="nomJoc" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nomJoc" >
    </div>
  </div>
  <div class="form-group">
    <label for="descripcio" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="descripcio" name="descripcio" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="desarrollador" class="col-sm-2 control-label">Desarrollador</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="desarrollador" >
    </div>
  </div>
  <div class="form-group ">
   <label class="col-sm-2 control-label">Genero</label>
   <div class="col-sm-10">
    <select id="selectGenere" class="form-control" >
  <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT nom, id FROM generes order by nom ASC");
					while($cat = $conecta -> fetch())
					{
						echo '<option>'.strtoupper($cat["nom"]).'</option>';
					}
					$conecta -> tanca(); 
				?>     
	</select>
    </div>
  </div>
  <div class="form-group">
    <label for="fecha" class="col-sm-2 control-label">Fecha lanzamiento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fecha" >
    </div>
  </div>
   <div class="form-group">
    <label for="foto" class="col-sm-2 control-label">Portada</label>
    <div class="col-sm-10">
    <input type="file" id="foto">
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Añadir</button>
    </div>
  </div>
</form>    