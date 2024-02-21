<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <h5>HOJA DE RESPUESTA</h5>
                <img src="{{ asset("notas/$evaluacion->parcial_id/$evaluacion->imagen")}}" width="600" height="800"alt="...">
            </div>
            <div class="col-md-6 text-center">
                <h5>PATRON DE RESPUESTA</h5>
                <img src="{{ asset("notas/$evaluacion->parcial_id/$evaluacion->parcial_id.jpg")}}" width="600" height="800"alt="...">
            </div>
        </div>
    </div>

    @include('partials.js')
</body>
</html>