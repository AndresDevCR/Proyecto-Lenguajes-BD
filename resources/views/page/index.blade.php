@extends('layouts.layout')

@section('title', 'Home Page')


@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.newlogisticltda.com/wp-content/uploads/2018/12/banner-carros-newlogistic-1.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://motor.elpais.com/wp-content/uploads/2016/06/portada_toyota.jpg" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.pinegocios.com.br/images/noticias/516/Toyota2.jpeg" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class=" indexh1 text-center display-5 mt-3 mb-4">Autos Fidélitas</h1>
                <div class="main text-center">


                    <p class=" color-primary ">
                        Somos una empresa dedicada a la venta de vehículos nuevos y usados, con más de 20 años de
                        experiencia en el
                        mercado.
                    </p>

                    <p class="color-primary ">
                        Nuestro objetivo es brindarle la mejor atención y servicio, para que usted pueda adquirir el
                        vehículo que
                        siempre soñó.

                    </p>

                    <p class="color-primary ">
                        Contamos con un amplio stock de vehículos, para que usted pueda elegir el que más se adapte a sus
                        necesidades.
                    </p>

                    <p class="color-primary ">
                        Nuestro personal está altamente capacitado para brindarle la mejor atención y servicio.
                    </p>
                </div>

            </div>
        </div>



    @endsection
