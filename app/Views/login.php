<div class="container-fluid">
    <h6 class="text-center">Inicio de Sesion</h6>

    <div class="row  justify-content-center align-items-center">
        <form action="users" method="POST">
           <div class="form-group">
                <label for="">Nombre de Usuario</label>
                <input type="text" class="form-control form-control-sm" name="username">
           </div>
           <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" class="form-control form-control-sm" name="password">
           </div>
            <div class="row justify-content-center align-items-center">
                <input type="hidden" name="r" value="validate-user">
                <input type="submit" value="Entrar" class="btn btn-primary btnEntrar">
            </div>
        </form>
    </div>
    
    <div class="row justify-content-center align-items-center float-right">
        <input type="button" id="btnEntrarInvitado" value="Ingresar como invitado" class="btn btn-primary btnEntrar btnInv">
    </div>
    
</div>