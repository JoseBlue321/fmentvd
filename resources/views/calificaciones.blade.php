<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-start justify-content-start">
                @foreach ($carreras as $carrera)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">{{$carrera->carrera}}</h5>
                    </div>
                    <div class="card-body">
                      @foreach ($carrera->cursos as $curso)
                        <p class="card-text">
                            <p><b>{{$curso->anio}}</b></p>
                            @foreach ($curso->asignaturas as $asignatura)
                            <div class="list-group bg-danger">
                                <a href="asignatura/{{$asignatura->id}}" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{$asignatura->nombre}}</h5>
                                  </div>
                                  <small class="text-body-secondary">{{$asignatura->detalle}}</small>
                                </a>
                              </div>
                            @endforeach
                        </p>
                      @endforeach
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('partials.js')
</body>
</html>