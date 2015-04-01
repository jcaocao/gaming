<div class="navbar navbar-default navbar-fixed-side navbar-fixed-side-left" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                
                <ul class="nav nav-stacked" id="sidebar">
                 <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT nom, id FROM generes order by nom ASC");
					while($cat = $conecta -> fetch())
					{
						echo '<li><a href="index.php?centre=cat&id='.$cat["id"].'">'.strtoupper($cat["nom"]).'</a></li>';
					}
					$conecta -> tanca(); 
				?>     
                    
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    