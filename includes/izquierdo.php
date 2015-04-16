<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="font-size:30px;">
                    <a href="index.php">
                        INICIO
                    </a>
                </li>
                <?php
					$conecta = new BaseDeDades;
					$conecta -> consulta("SELECT nom, id FROM generes order by nom ASC");
					while($cat = $conecta -> fetch())
					{
						echo '<li class="menuleft"><a href="index.php?centre=cat&id='.$cat["id"].'">'.strtoupper($cat["nom"]).'</a></li>';
					}
					$conecta -> tanca();
				?> 
            </ul>
        </div>