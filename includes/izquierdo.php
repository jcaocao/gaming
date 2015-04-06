<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </li>
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