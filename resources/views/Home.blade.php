@extends('Layout')

@section('title', 'Home')

@section('content')
<div class="slide-main d-none d-xs-none d-sm-block">
    <img src="{{ asset('img/slide.jpg') }}" class="img-fluid" />
    <div class="title-slide">
        <h1>LA MEJORES <br />ESTRATEGIAS <br /> PARA TI</h1>
        <p class="d-none d-xs-none d-sm-none d-md-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptates doloremque quisquam beatae nemo</p>
        <div class="button-slide">
            <button>Contactanos</button>
        </div>
    </div>
</div>

<div>
    <div class="slide-main-responsive d-block d-xs-block d-sm-none">
        <h1>LA MEJORES <br />ESTRATEGIAS <br /> PARA TI</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptates doloremque quisquam beatae nemo</p>
        <div class="button-slide">
            <button>Contactanos</button>
        </div>
    </div>
</div>
<div class="container mt-5">
    <center>
        <h1>Nuestros Servicios</h1>
    </center>
    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card mb-3">
                <img src="{{ asset('img/slide1.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service 1</h5>
                    <p class="card-text">Some quick example text to build on the Service and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card mb-3">
                <img src="{{ asset('img/slide2.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service 2</h5>
                    <p class="card-text">Some quick example text to build on the Service and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card mb-3">
                <img src="{{ asset('img/slide3.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service 3</h5>
                    <p class="card-text">Some quick example text to build on the Service and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>


    <br />

</div>
<div class="container-fluid mt-5 contact-form">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 our-feeling pt-5 pr-5 pl-5">
            <div class="mt-5">
                <img style="width: 600px" class="img-fluid" src="{{ asset('img/mockup.png') }}" />
                <div class="our-feeling-link">
                    <a href="#">Nuestro Feeling</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 contact ">
            <form action="/candidatos" method="POST" class="container pt-5 pr-5 pl-5">
                @csrf
                <center class="mb-5">
                    <h1 style="color: #fff;">¡Únete a Nuestro Equipo!</h1>
                </center>
                <div class="row">
                    <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control form-control-sm" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control form-control-sm" id="edad" name="edad" placeholder="Ingresa tu edad" required>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="habilidades">Habilidades</label>
                            <select class="js-example-basic-multiple form-control form-control-sm" id="habilidades" required name="habilidades[]" multiple="multiple">
                                @foreach ($habilidades as $habilidad)
                                <option value="{{ $habilidad->id }}">{{ $habilidad->habilidad }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Ingresa tu correo electronico" required>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-12 col-lg-12 mt-5 mb-5">
                        <div class="button-form">
                            <button class="button-send">Enviar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection