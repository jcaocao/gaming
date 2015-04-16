

<nav class="navbar navbar-bright navbar-fixed-top" role="banner"">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse tx16" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
        <?php
		  if($_SESSION["admin"]==1){
						echo '<li ><a href="index.php?centre=addJoc">Afegir joc</a></li>     
        
        <li>
         <li><a href="index.php?centre=addCat">Afegir genere</a></li>
        </li>
        <li>
       <li><a href="index.php?centre=gestUsers">Gestio usuaris</a></li>
        </li>
        <li>
        <li><a href="index.php?centre=gestLinks">Gestio links</a></li>
        </li>';}?>
      </ul>
      
      <ul class="nav navbar-nav  navbar-right">
		<?php include("includes/registro.php"); ?>        
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar Juego">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>