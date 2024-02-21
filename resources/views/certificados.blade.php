<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-start justify-content-start">
            <div class="col-md-3">
                <div class="card border-primary">
                    <div class="card-header bg-white">
                        <img src="{{asset('img/DescargaCertificado.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Certificados</h5>
                      <p class="card-text">Descargue su certificado de participacion</p>
                      <a href="{{route('index.evento')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-success">
                    <div class="card-header bg-white">
                        <img src="{{asset('img/VerificarCertificado.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Verificar Certificados</h5>
                      <p class="card-text">
                            Validación de la Firma Digital <b>ADSIB</b>
                            Validación del certificado
                      </p>
                      <a href="#" class="btn btn-success">Verificar Certificados</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-warning">
                    <div class="card-header bg-white">
                        <img src="{{asset('img/HistorialCertificado.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Verificar Historial de Certificado</h5>
                      <p class="card-text">Con su numero de carnet verifica los certificados habilitados</p>
                      <a href="#" class="btn btn-warning">Historial de Certificado</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-info">
                    <div class="card-header bg-white">
                        <img src="{{asset('img/VideoCertificado.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Video Tutorial</h5>
                      <p class="card-text">Guia para descargar su certificado de participacion</p>
                      <a href="#" class="btn btn-info">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.js')
</body>
</html>