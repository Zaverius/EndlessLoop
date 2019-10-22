@extends('layout.vista')
@section('title','Nosotros')

@section('content')
<div class="container-fluid">
  <div class="row initial-padding">
    <div class="col-md-11 offset-md-1">
      <h4 class="endless-blody">NOSOTROS</h4>
    </div>
    <div class="col-md-4 offset-md-1">
      EndlessLoop es una empresa de jóvenes estudiantes con mucha
      motivación. Nuestro objetivo es innovar en cada proyecto que
      realizamos. Creemos que el mundo contiene una infinidad de
      posibilidades y que a todo se le puede sacar provecho dándoles
      vueltas.
    </div>
  </div>


  <div class="row py-5">
    <div class="col-md-2 offset-md-2 mt-3">
       <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Nuria.jpg') }}" alt="Image of Núria Formentí Borràs">
        <div class="overlay">
           <div class="endlessworker">
             <h5>Núria Formentí Borràs</h5> 
             <p>Ilustradora</p>
           </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 mt-3">
     <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Helena.jpg') }}" alt="Image of Marc Marmol Escobar">
        <div class="overlay">
           <div class="endlessworker">
            <h5>Helena Marcelo</h5> 
            <p>Ilustradora</p>>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 mt-3">
      <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Kevin.jpg') }}" alt="Image of Kevin Martinez Isaac">
        <div class="overlay">
           <div class="endlessworker">
              <h5>Kevin Martinez Isaac</h5>
              <p>Ilustrador</p>
           </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 mt-3">
      <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Qi.jpg') }}" alt="Image of Marc Marmol Escobar">
        <div class="overlay">
           <div class="endlessworker">
            <h5>Qi Wang</h5> 
            <p>Ilustrador</p>>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row py-5">
    <div class="col-md-2 offset-md-2 mt-3">
       <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Laura.jpg') }}" alt="Image of Laura Gonzalez Lopez">
        <div class="overlay">
           <div class="endlessworker">
            <h5>Laura Gonzalez Lopez</h5> 
            <p>Comunity Manager</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 mt-3">
       <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Marc.jpg') }}" alt="Image of Marc Marmol Escobar">
        <div class="overlay">
           <div class="endlessworker">
            <h5>Marc Marmol Escobar</h5> 
            <p>Game Designer</p>>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 mt-3">
       <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Aitor.jpg') }}" alt="Image of Marc Marmol Escobar">
        <div class="overlay">
           <div class="endlessworker">
            <h5>Aitor Garcia</h5> 
            <p>Programador</p>>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 mt-3">
       <div class="hovereffect">
        <img class="img-fluid" src="{{ asset('img/photos/Javi.jpg') }}" alt="Image of Marc Marmol Escobar">
        <div class="overlay">
           <div class="endlessworker"> 
            <h5>Javier Bufo</h5> 
            <p>Programador</p>>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include ('layout.footer')

@endsection