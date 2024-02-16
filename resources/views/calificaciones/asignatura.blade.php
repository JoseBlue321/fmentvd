<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">{{$asignatura->nombre}}</h5>
                    </div>
                    <div class="card-body ">
                      <p class="card-text">{{$asignatura->detalle}}</p>
                     
                      <form action="{{route('show.persona')}}" method="post">
                        @csrf
                        <input type="number" name="asignatura_id" value="{{$asignatura->id}}" hidden>
                        <div class="form-group">
                          <label for="">Carnet:</label>
                          <input type="text" name="carnet" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                          <small id="helpId" class="text-muted">Ingrese su número de carnet para verificar</small>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="width: 380px">Verificar Calificacion</button>
                      </form>
                    </div>
                  </div>

            </div>
        </div>
    </div>





    

    @include('partials.js')
</body>
</html>