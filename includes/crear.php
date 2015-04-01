

<?php

if(isset($_POST["usuari"])){
    include "../classeUsuari.php";
$obj = new usuari($_POST["usuari"],$_POST["nom"],$_POST["contrasena"]);
$obj->crear();
}





?>
        
       <form action="crear.php" method="POST">
                    <label>Usuari:</label><br />
                    <input type="text" name="usuari" />
                    <br/>
                    <label>Nom:</label><br />
                    <input type="text" name="nom" />
                    <br/>
                    <label>Contrasena:</label><br />
                    <input type="password" name="contrasena" />
                    <br/>
                    <input type="submit" value="Enviar"/>
                    </form>

      
