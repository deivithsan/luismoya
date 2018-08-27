@extends('layouts.municipio')
@section('contenido')

    <div class="container">
        <br><br><br>
        <h1 class="my-4">Agua de Dios</h1>
        <br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')"></div>
                <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')"></div>
                <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-6">
                <h2><strong>Agua de Dios</strong></h2>
                <br>
                    <ul>
                        <li>Cundinamarca (Colombia)</li>
                        <li>Alto Magdalena</li>
                        <li>Alcalde: Yanit Esther Mora Moscote (2016-2019)</li>
                    </ul>
                    <br>
                    <p class="text-dark">La fundación de Agua de Dios se debe a las políticas de aislamiento para las personas afectadas por la enfermedad de la lepra, que datan del siglo XVII. Un grupo de enfermos de lepra fueron desterrados por los habitantes de la población de Tocaima, por el miedo a ser contagiados, viéndose los enfermos obligados a ocupar los terrenos que el Estado colombiano había comprado, en el año de 1867, y que eran propiedad de expresidente de los Estados Unidos de Colombia, el señor Manuel Murillo Toro.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <br>
        <hr>
            <div class="row mb-4">
            <div class="col-md-8">
                <h2><strong>Proyectos</strong></h2>
                <div class="todo-list">
                    <div class="tdl-holder">
                        <div class="tdl-content">
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox" checked disabled="disabled"><i class="bg-primary"></i><span></span> Construir Colegios.
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" checked disabled="disabled"><i class="bg-primary"></i><span></span> Construir Parques.
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" checked disabled="disabled"><i class="bg-primary"></i><span></span> Construir Hospitales.
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop