<div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">

                            <h5 class="card-title text-center">Registrar Usuario</h5>
                            <form class="form-signin" id="" autocomplete="off" method="POST" action="register-user">
                                
                                <div class="form-row mx-auto">
                                    <div class="form-label-group col-6">
                                        <label for="Nombre">Nombre(s)</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="" required autofocus>
                                    </div>

                                    <div class="form-label-group col-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" value="">
                                    </div>
                                </div>
                                
                                <div class="form-label-group">
                                    <label for="Email">Correo Electronico</label>
                                    <input type="email" id="email" name="email"  class="form-control" placeholder="Correo Electronico"  value="">
                                </div>

                                <div class="form-label-group">
                                    <label for="Usuario">Nombre de Usuario</label>
                                    <input type="text" id="alias" name="alias" class="form-control"  value="" placeholder="Nombre de Usuario"  >
                                </div>

                                <div class="form-label-group">
                                    <label for="Contrasena">Contraseña</label>
                                    <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" >
                                </div>

                                <div class="form-label-group">
                                    <label for="Tipo">Tipo: </label>
                                    <select class="form-control" name="tipo">
                                        <option value="admin">Administrador</option>
                                        <option value="normal">Normal</option>
                                    </select>
                                    
                                </div>

                                <input type="hidden" name="agregarUsuario">
                                <input class="btn btn-lg btn-primary btn-block text-uppercase  my-2"  type="submit"  value="Registrar">

                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>