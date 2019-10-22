@extends('layout.vista')
@section('title','Olympus\' Heir')


<!--Esto es el carousel-->
  
  <!--Esto es el apartado de nuestros juegos del home-->
 
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
	        <div class="carousel-caption d-none d-md-block endess-carrousel-textcenter">
	          <h2 class="display-4"">Olympus' Heir</h2>
	        </div>
	      </div>
	     
	      <div class="carousel-item" style="background-image: url('{{asset('img/slider/escenariosJOC2.jpg')}}')">
	        <div class="carousel-caption d-none d-md-block endess-carrousel-textcenter">
	         <h2 class="display-4"">Olympus' Heir</h2>
	        </div>
	      </div>

	      <div class="carousel-item" style="background-image: url('{{asset('img/slider/escenariosJOC.jpg')}}')">
	        <div class="carousel-caption d-none d-md-block endess-carrousel-textcenter">
	          <h2 class="display-4"">Olympus' Heir</h2>
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
	<!--Sinopsis del juego-->
	<div class="row endless-bg-light pt-5 text-center">
		<div class="col-md-3 offset-md-3 align-self-center"><img class="rounded-img border-endless img-fluid" src="{{asset('GameIcon.png')}}" width="250" height="250"></div>
		<div class="col-md-3 align-self-center"><p class="">Un adolescente vive en un mundo en el que Cronos derrotó a
	   todos los dioses.<br>
       Nos embarcaremos en una aventura de rol en dos dimensiones
       llena de plataformas para acabar con el dios del tiempo y
       restaurar la paz en la Tierra.</p></div>
	</div>
	<!--héroes-->
	<div class="row endless-bg-light pt-5 text-center">
		<div class="col-md-3 offset-md-3 my-auto py-2">
			<h5 class="endless-blody">HÉROES</h5>
			<p class="">Escoge entre chico o chica
			 para poder convertirte en el
			  héroe que devolverá la paz en
			   la Tierra.
		</div>
		<div class="col-md-3">
			<img class="img-fluid" src="{{asset('coso.jpg')}}">
		</div>
	</div>
	<!--semidioses-->
	<div class="row endless-bg-light pt-5 text-center">
		<div class="col-md-3 my-auto order-md-2 py-2">
			<h5 class="endless-blody">SEMIDIOSES</h5>
			<p class="">Enfréntate y ayuda a diversos
			 semidioses para poder avanzar 
			  en tu aventura y poner fin a la
			  rivalidad que hay entre ellos.</p>
		</div>
		<div class="col-md-3 offset-md-3">
			<img class="img-fluid" src="{{asset('coso.jpg')}}">
		</div>
	</div>
	<!--Dioses-->
	<div class="row endless-bg-light pt-5 text-center">
		<div class="col-md-3 offset-md-3 my-auto py-2">
			<h5 class="endless-blody">DIOSES</h5>
			<p class="">Ayudalos a recuperar sus
			 armas para así poder vencer a
			  Cronos. Alíate con ellos para
			  obtener fantásticas habilidades
			únicas.</p>
		</div>
		<div class="col-md-3 order-md-2">
			<img class="img-fluid" src="{{asset('coso.jpg')}}">
		</div>
	</div>
	<!--Criaturas-->
	<div class="row endless-bg-light pt-5 text-center">
		<div class="col-md-3 my-auto order-md-2 py-2">
			<h5 class="endless-blody">CRIATURAS</h5>
			<p class="">Enfréntate a un sinfín de
			 criaturas que te complicarán mucho
			  la misión.</p>
		</div>
		<div class="col-md-3 offset-md-3">
			<img class="img-fluid" src="{{asset('coso.jpg')}}">
		</div>
	</div>
	<!--Coleccionables-->
	<div class="row endless-bg-light py-5 text-center">
		<div class="col-md-3 offset-md-3 my-auto py-2">
			<h5 class="endless-blody">COLECCIONABLES</h5>
			<p class="">Hazte con todas las cartas
			 para descubrir mucho más de
			  los dioses de la mitología
			   griega y todo lo que les
			rodeaba. Además, todo esfuerzo
			 tiene su recompensa.</p>
		</div>
		<div class="col-md-3 order-md-2">
			<img class="img-fluid" src="{{asset('coso.jpg')}}">
		</div>
	</div>
	</div>

@include ('layout.footer')

@endsection