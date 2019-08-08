<?php 
require URLINC.'check_session_login.php';
echo Hash::create(ALGORITMO, 'marco', HASHKEY)
?>
<div class="content-form centrar text-center">
    <img id="logo" src="<?php echo URL.URLIMG.NOMBRE_LOGO?>" alt="">
   <br><br>
   <p>Ingresa a tu cuenta<br>
Sigue ganando tiempo y tranquilidad</p>
    <form id="formulario_logueo" action="<?php echo URL?>User/login" method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text sin_sombra" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control " placeholder="Ingrese su usuario" aria-label="Username" aria-describedby="basic-addon1" name="usuario" autocomplete="off">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text sin_sombra" id="basic-addon1">@</span>
            </div>
            <input type="password" class="form-control" placeholder="Ingrese su contraseña" aria-label="Username" aria-describedby="basic-addon1" name="password" autocomplete="off">
        </div>
        <div class="form-group">
            <button class="btn btn-amdigital">Ingresar</button>

        </div>
         <div class="form-group"> 
        <a href="">¿Olvidaste tu contraseña?</a><br>
        <span>¿Aún no tienes una cuenta? </span><a href="">CREAR CUENTA</a>
    </div>
        <div class="form-group">   
                 
            <p>Cada semana tenemos nuevas características<br>
                <small>Síguenos en nuestras redes sociales</small></p>
                 <p>&copy;Amdigital
            <br>soporte@amdigital.pe</p>
        </div>
    </form>
</div>
 

