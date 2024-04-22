<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-center">RECOPILACIÓN DE DATOS</h5>
                    <div class="card-body">
                        <form action="{{route('login.memorias')}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="">Correo</label>
                              <input type="text" name="correo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Ingrese su correo electrónico</small>
                            </div>

                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Ingrese su contraseña con la que se registro</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Registrarse
                              </button>
                        </form>

                    </div>
                  </div>
              </div>
        </div>
    </div>

    <!--Modal para registro de autores-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro Autor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('autores.memorias')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Ingrese su nombre completo. Ej. Dr. Miguel Quispe Gonza</small>
            </div>

            <div class="form-group">
                <label for="">Correo</label>
                <input type="email" name="correo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Ingrese su correo electrónico</small>
            </div>

            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Ingrese su número de celular Ej. 72533597</small>
            </div>

            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Ingrese una contraseña segura (minimo 5 caracteres)</small>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </form>
        </div>



        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>





    @include('partials.js')
</body>
</html>