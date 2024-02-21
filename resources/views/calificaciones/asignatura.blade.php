<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

<body>
    @include('partials.cabeza')

    <div class="container">
      <a name="" id="" class="btn btn-danger" href="{{ route('home')}}" role="button">Salir</a> <br>
      @foreach ($personas as $persona)
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{$persona->paterno}} {{$persona->materno}} {{$persona->nombre}} - {{$persona->carnet}}</h4>

                    <table class="table table-hover">
                      <thead class="table-dark">
                        <tr>
                          <th>Carrera</th>
                          <th>Curso</th>
                          <th>Asignatura</th>
                          <th>parcial</th>
                          <th>nota</th>
                          <th>imagen y patron</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($persona->evaluaciones as $evaluacion)
                        <tr>
                          <td>{{$evaluacion->parciales->asignaturas->cursos->carreras->carrera}}</td>
                          <td>{{$evaluacion->parciales->asignaturas->cursos->anio}}</td>
                          <td>{{$evaluacion->parciales->asignaturas->nombre}}</td>
                          <td>{{$evaluacion->parciales->parcial}}</td>
                          <td>{{$evaluacion->nota}}</td>
                          <td>
                            <a name="" id="" class="btn btn-primary" href="{{ route('img.persona',$evaluacion->id)}}" role="button">ver hoja y patron de respuesta</a>
                          </td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>          

                  </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>


    @include('partials.js')
</body>
</html>