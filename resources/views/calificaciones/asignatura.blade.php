<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
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
                          <th>ver imagen</th>
                          <th>ver patron</th>
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
                            <img src="{{ asset("$evaluacion->parcial_id/$evaluacion->imagen")}}" width="60" height="80"alt="...">
                          </td>
                          <td>
                            <img src="{{ asset("$evaluacion->parcial_id/$evaluacion->parcial_id.jpg")}}" width="60" height="80"alt="...">
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