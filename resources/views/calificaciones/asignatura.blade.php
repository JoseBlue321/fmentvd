<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <style>
      #overlay {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.7);
          z-index: 9999;
      }
      #overlay1 {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.7);
          z-index: 9999;
      }
  
      #imagen-ampliada {
          display: none;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          max-width: 80%;
          max-height: 80%;
          z-index: 10000;
      }
  </style>
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
                            <img src="{{ asset("$evaluacion->parcial_id/$evaluacion->imagen")}}" width="60" height="80"alt="..." id="imagen">
                            <div id="overlay"></div>
                          </td>
                          <td>
                            <img src="{{ asset("$evaluacion->parcial_id/$evaluacion->parcial_id.jpg")}}" width="60" height="80"alt="..." id="imagen1">
                            <div id="overlay1"></div>
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
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          var imagen = document.getElementById('imagen');
          var overlay = document.getElementById('overlay');
          var imagenAmpliada = document.createElement('img');
          imagenAmpliada.id = 'imagen-ampliada';
  
          imagen.addEventListener('click', function () {
              imagenAmpliada.src = imagen.src;
              overlay.style.display = 'block';
              document.body.appendChild(imagenAmpliada);
              imagenAmpliada.style.display = 'block';
          });
  
          overlay.addEventListener('click', function () {
              overlay.style.display = 'none';
              imagenAmpliada.style.display = 'none';
              document.body.removeChild(imagenAmpliada);
          });
      });
  </script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
            var imagen = document.getElementById('imagen1');
            var overlay = document.getElementById('overlay1');
            var imagenAmpliada = document.createElement('img');
            imagenAmpliada.id = 'imagen-ampliada';
    
            imagen.addEventListener('click', function () {
                imagenAmpliada.src = imagen.src;
                overlay.style.display = 'block';
                document.body.appendChild(imagenAmpliada);
                imagenAmpliada.style.display = 'block';
            });
    
            overlay.addEventListener('click', function () {
                overlay.style.display = 'none';
                imagenAmpliada.style.display = 'none';
                document.body.removeChild(imagenAmpliada);
            });
        });
    </script>
    @include('partials.js')
</body>
</html>