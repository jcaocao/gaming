<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php" class="navbar-brand">Panel Admin</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        
          <?php
						echo '<li><a href="index.php?centre=addJoc">Afegir joc</a></li>';
					
				?>     
        
        <li>
          <?php
						echo '<li><a href="index.php?centre=addCat">Afegir genere</a></li>';
					
				?>   
        </li>
        <li>
         <?php
						echo '<li><a href="index.php?centre=gestUsers">Gestio usuaris</a></li>';
					
				?> 
        </li>
        <li>
          <?php
						echo '<li><a href="index.php?centre=gestLinks">Gestio links</a></li>';
					
				?> 
        </li>
      </ul>
    </nav>
  </div>
</header>