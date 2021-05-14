<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Login</title>      
    

</head>
<body>
    <a href="index.php?c=UsuarioController&a=nuevo">No tienes una cuenta ? registrate aqui.</a>
    
    
    <h2>Inisiar session</h2>
    <div class="container">
        <form id ="login" name="login" method="POST" action="index.php?c=UsuarioController&a=welcome" autocomplete="Off">
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="correo" name="correo" id="correo" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" required>
             </div> 
            <input type="submit" value="Entrar" name="Entrar">  
           
        </form>       
    </div>
   

</body>
</html>

