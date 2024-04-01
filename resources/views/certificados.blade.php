<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-start justify-content-start">

            <div class="col-md-3">
                <div class="card border-info">
                    <div class="card-header bg-white">
                        <img src="{{asset('img/formulario.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Formulario de Registro</h5>
                      <p class="card-text">Este formulario estara activo durante la duración del evento</p>
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#video">
                        Formulario de registro
                    </button>
                    </div>
                </div>
            </div>

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


        </div>
    </div>


<div class="modal fade" id="video" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="modalTitleId">
                    FORMULARIO DE REGISTRO
                </h5>
            </div>
            <div class="modal-body align-items-center ">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$evento->evento}}</h4>
                        <p class="card-text"><b>Codigo evento:</b> {{$evento->codigo}}</p> 
                        <p class="card-text"><b>Fecha:</b> {{date("d M Y", strtotime($evento->fecha))}}</p>
                        <p class="card-text"><b>Detalle:</b> {{$evento->detalle}}</p>
                        <hr>
                        <form action="{{route('store.participante')}}" method="post">
                         @csrf
                         <input type="hidden" name="evento_id" value="{{$evento->id}}">
                         <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleDataList" class="form-label">Tipo</label>
                                        <input class="form-control" name="tipo" list="tipo_participante" id="exampleDataList" placeholder="Tipo de participante..." required>
                                        <datalist id="tipo_participante">
                                         <option value="participante">
                                         <option value="ponente">
                                         <option value="expositor">
                                         <option value="Organizador">
                                         <option value="otro (escribir...)">
                                        </datalist>
                                        <small id="helpId" class="text-muted"></small>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <div class="form-group">
                                      <label for="">Carnet</label>
                                      <input type="text" name="carnet" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                      <small id="helpId" class="text-muted">Ej. 9087013 (sin extención)</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleDataList" class="form-label">Grado</label>
                                        <input class="form-control" name="grado" list="tipo_grado" id="exampleDataList" placeholder="Tipo de participante...">
                                        <datalist id="tipo_grado">
                                         <option value="Dr.">
                                         <option value="Dra.">
                                         <option value="Lic.">
                                         <option value="M.S.C.">
                                         <option value="otro (escribir...)">
                                        </datalist>
                                        <small id="helpId" class="text-muted">Si corresponde</small>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Paterno</label>
                                        <input type="text" name="paterno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Materno</label>
                                        <input type="text" name="materno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center align-items-center g-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="text" name="correo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Si corresponde</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="text" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Si correspondo</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-start justify-content-start">
                                <div class="col-md-12">
                                  <br>
                                  <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Limpiar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                    Cerrar
                                </button>
                              </div>
                              </div>
                         </div>               

                        </form>
                    </div>
                </div>
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