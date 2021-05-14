<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Registrar</title>    
    

</head>
<body>
    
    <h2>REGISTRAR</h2>
    <div class="container">
        <form id ="nuevo" name="nuevo" method="POST" action="index.php?c=UsuarioController&a=guardar" autocomplete="Off">
            <div class="form-group">
                <label for="nombre">Nombre usuario:</label>
                <input type="nombre" name="nombre" id="nombre" required>
            </div>                       
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="correo" name="correo" id="correo" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" required>
             </div> 
            <input type="submit" value="registrar" name="registrar">                        
        </form>       
    </div>
   
<?php

?>
</body>
</html>

