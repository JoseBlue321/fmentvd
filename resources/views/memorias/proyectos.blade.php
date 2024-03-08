<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.cabeza')
    @include('partials.nav')

    <div class="container">
        <div class="row align-items-start justify-content-start">
            <div class="col-md-8">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">Proyectos de: Investigación/Interacción Social/Extensión Universitaria</h4>
                        <p class="card-text"></p>
                        <div class="container">
                            <form action="" method="post">
                              <div class="card border-info mb-3" >
                                <div class="card-header"><b>Información Personal</b></div>
                                <div class="card-body">
                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="">Nombre</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Ingrese su nombre completo Ej. Dr. juan lopez lopez</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" name="correo" id="" class="form-control" placeholder="correo@gmail.com" aria-describedby="">
                                        <small id="helpId" class="text-muted">Ingrese su correo electrónico</small>
                                      </div>
                                    </div>
                                </div>
                                </div>
                              </div>

                              <div class="card border-warning mb-3" >
                                <div class="card-header"><b>Información Procedencia</b></div>
                                <div class="card-body">
                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="">Resolución HCF </label>
                                          <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Ingrese el numero de Resolucion</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Carrera</label>
                                          <select class="form-control" name="" id="">
                                            <option>Medicina</option>
                                            <option>Enfermeria</option>
                                            <option>Nutrición y Dietética</option>
                                            <option>Tecnología Médica</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Departamento</label>
                                          <select class="form-control" name="" id="">
                                            <option>Medicina y Salud Mental</option>
                                            <option>Ciencias Funcionales</option>
                                            <option>Ciencias Morfológicas</option>
                                            <option>Cirugia</option>
                                            <option>Salud Pública</option>
                                            <option>Patología</option>
                                            <option>Materno Infantil</option>
                                            <option>Ninguno</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                              </div>

                              <div class="card border-success mb-3" >
                                <div class="card-header"><b>Información Proyecto</b></div>
                                <div class="card-body">
                                  <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Titulo del Proyecto</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted">Ingrese el titulo del Proyecto</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Descripción del Proyecto</label>
                                          <textarea class="form-control" name="" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Tipo de proyecto </label>
                                          <select class="form-control" name="" id="">
                                            <option>interacción social</option>
                                            <option>investigación</option>
                                            <option>extensión universitaria</option>
                                            <option>Tecnología Médica</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <p>Tipo de investigación </p>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="uno" id="" value="checkedValue"> Observacional
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="uno" id="" value="checkedValue"> Experimental
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha de Inicio</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fecha de Finalización</label>
                                          <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Fuentes de financiamiento</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Palabras Clave</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Colaboraciones y Alianzas</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-start justify-content-start">
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Resultados y conclusiones</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                          <label for="">Impacto y Aplicaciones</label>
                                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                          <small id="helpId" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <div class="form-group">
                                            <label for="">Estado del Proyecto</label>
                                            <select class="form-control" name="" id="">
                                              <option>Concluido</option>
                                              <option>En ejecucion</option>
                                              <option>En aprobación</option>
                                            </select>
                                          </div>
                                    </div>
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
                                  <a class="btn btn-danger" href="#" role="button">Cancelar</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
              </div>
        </div>
    </div>





    @include('partials.js')
</body>
</html>