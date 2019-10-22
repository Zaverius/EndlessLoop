@extends('layout.vista')
@section('title','Inicio')

@section('carousel')
<!--Esto es el carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rounded-circle"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-circle"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded-circle"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
     
      <div class="carousel-item active" style="background-image: url('{{asset('img/slider/escenariosJOC1.jpg')}}')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Troya</h2>
          <p class="lead">Vive el terror de la guerra de Troya.</p>
        </div>
      </div>
     
      <div class="carousel-item" style="background-image: url('{{asset('img/slider/escenariosJOC2.jpg')}}')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Inframundo</h2>
          <p class="lead">Surca el río estigio en compañía de los muertos.</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('{{asset('img/slider/escenariosJOC.jpg')}}')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Laberinto de Creta</h2>
          <p class="lead">Piérdete en el laberinto del minotauro.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
  </div>

@endsection

@section('content')
<div class="container-fluid">
  <!--Esto es el apartado de nuestros juegos del home-->
  <div class="row endless-padding justify-content-center text-center endless-bg-light">
    <div class="col-md-auto">
      <h4 class="endless-blody">NUESTRO JUEGO</h4>
      <div class="col-md-12 text-center">
        <img class="rounded-img border-endless" src="{{asset('GameIcon.png')}}" width="250" height="250">
      </div>
    </div>
  </div>
  <div class="row endless-padding endlesscontainer-newletter justify-content-center">
    <div class="col-md-auto text-center">
         <p class="endless-blody">¡Suscríbete al Newsletter y entérate de todas nuestras novedades!</p>
         <div class="input-group mb-3 justify-content-center">
            <form class="input-group">
              <input type="text" class="form-control endless-blody endless-form-sub text-center" placeholder="Escribe tu e-mail..." aria-label="Escribe tu e-mail..." aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" name="susbcribe" value="Suscribirse" class="input-group-text endless-blody endless-form-sub-submit endless-bg-dark" id="basic-addon2">
              </div>
            </form>
          </div>
    </div>
  </div>

  <!--Esto es el apartado de contacto-->
  <div id="contacto" class="row endless-padding justify-content-md-center endless-bg-dark">
    <div class="col-md-12 pt-4"><h4 class="endless-blody text-center endlesscolor">CONTACTO</h4></div>
    <div class="col-md-12 text-center mt-3">
      <a href="https://facebook.com/endlessloopentertainment/" target="_blank"><img class="rounded-circle mx-2" src="{{asset('img/logo/logofacebook.png')}}" width="45px" height="45px"></a>
      <a href="https://twitter.com/EndlessLoopEnt1?lang=es" target="_blank"><img class="rounded-circle mx-2" src="{{asset('img/logo/logotwitter.png')}}" width="45px" height="45px"></a>
      <a href="https://www.instagram.com/endlessloop_entertainment/" target="_blank"><img class="rounded-circle mx-2" src="{{asset('img/logo/logoinsta.png')}}" width="45px" height="45px"></a>
    </div>
    <div class="col-md-2 endlesscolor text-center">
      <a href="mailto:info@endlessloop.com" target="_top"><p class="mt-4 mb-1">EndlessLoop@cosesdealumnes.net</p></a> 
      <p class="my-1">Calle de Josep Torras i Bages 55</p>
      <p class="my-1">08401 Granollers, Barcelona</p>
    </div> 
  </div>
</div>

@include ('layout.footer')

@endsection