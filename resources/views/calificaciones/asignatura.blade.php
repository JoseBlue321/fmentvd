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

                    <div class="container">
                      @foreach ($persona->evaluaciones as $evaluacion)
                      <div class="row justify-content-center align-items-center g-2">
                        <div class="col-md-12">
                          <table class="table table-hover">
                            <thead class="table-dark">
                              <tr>
                                <th>Carrera</th>
                                <th>Curso</th>
                                <th>Asignatura</th>
                                <th>parcial</th>
                                <th>nota</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$evaluacion->parciales->asignaturas->cursos->carreras->carrera}}</td>
                                <td>{{$evaluacion->parciales->asignaturas->cursos->anio}}</td>
                                <td>{{$evaluacion->parciales->asignaturas->nombre}}</td>
                                <td>{{$evaluacion->parciales->parcial}}</td>
                                <td>{{$evaluacion->nota}}</td>
                              </tr>
                            </tbody>
                          </table> 
                        </div>
                      </div>
                      <div class="row justify-content-center align-items-center g-2">
                      <div class="col-md-6">
                        <embed src="{{ url("notas/$evaluacion->parcial_id/$evaluacion->imagen") }}" type="application/pdf" width="100%" height="400px" />
                          <div class="d-grid">
                            <a class="btn btn-outline-primary" type="button" href="{{ asset("notas/$evaluacion->parcial_id/$evaluacion->imagen") }}" download role="button">
                              Descargar Hoja Respuesta
                            </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <embed src="{{ url("notas/$evaluacion->parcial_id/$evaluacion->parcial_id.pdf") }}" type="application/pdf" width="100%" height="400px" />
                          <div class="d-grid">
                            <a class="btn btn-outline-success" type="button" href="{{ asset("notas/$evaluacion->parcial_id/$evaluacion->parcial_id.pdf") }}" download role="button">
                              Descargar Patron de Respuesta
                            </a>
                        </div>
                      </div>
                    </div>
                        @endforeach                    
                    </div>
                  </div>
                </div>
            </div>
        </div>
      @endforeach
      <a name="" id="" class="btn btn-danger" href="{{ route('calificaciones')}}" role="button">Salir</a> <br>
    </div>

    @include('partials.js')
</body>
</html>