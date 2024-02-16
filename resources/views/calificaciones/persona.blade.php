<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                @foreach ($persona as $p)
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">{{$p->paterno}} {{$p->materno}} {{$p->nombre}}</h5>
                      <p class="card-text">Carnet: <b>{{$p->carnet}}</b></p>
                      <p class="card-text">Nota: <b>{{$p->nota}}</b></p>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                @foreach ($persona as $p)
                <div class="card">
                    <div class="card-header text-center">
                        HOJA DEL EXAMEN
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                        <img src="{{ asset("p/$p->asignatura_id/$p->imagen")}}" width="600" height="800"alt="...">
                          </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach ($persona as $p)
                <div class="card">
                    <div class="card-header text-center">
                        PATRON DE RESPUESTA
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset("a/$p->patron")}}" width="600" height="800" alt="...">
                          </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.js')
</body>
</html>