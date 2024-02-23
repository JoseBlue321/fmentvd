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
                      <p>
                        <a href="https://validar.firmadigital.bo/" class="btn btn-success" target="_blank">Verificar Certificado en la ADSIB</a>
                      </p>
                      <p>
                        <a href="{{route('validacion.evento')}}" class="btn btn-success">Validación del Certificado</a>
                      </p>
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
                      <a href="{{route('historial.evento')}}" class="btn btn-warning">Historial de Certificado</a>
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
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#video">
                        Ver video
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="video" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    ¿Como descargar su certificado?
                </h5>
            </div>
            <div class="modal-body align-items-center ">
                <video  width="750" height="550" controls>
                    <source src="{{asset('video/video.mp4')}}"  type="video/mp4">
                </video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(
        document.getElementById("video"),
        options,
    );
</script>



    @include('partials.js')
</body>
</html>