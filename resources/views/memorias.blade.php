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
                        <h4 class="card-title text-center">RECOPILACIÓN DE DATOS</h4>
                        <p class="card-text"></p>
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Categoria</th>
                                    <th>Registro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Proyectos de: Investigación/Interacción Social/Extensión Universitaria</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary" href="{{ route('proyectos.memorias') }}" role="button">Registrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Artículos científicos, otro tipo de publicación</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary" href="{{ route('articulos.memorias') }}" role="button">Registrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Libros</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Registrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tesis realizadas en el Instituto por cursantes/por miembros del Instituto</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Registrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Aportes de Congresos, Simposios o conferencias</td>
                                    <td>
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Registrar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>





    @include('partials.js')
</body>
</html>