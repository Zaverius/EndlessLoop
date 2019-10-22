@extends('layout.vista')
@section('title','Noticias')

@section('carousel')

@endsection

@section('content')

<div class="container-fluid main-content initial-padding">
	
		@foreach($noticias as $noticia) 
		<div class="row endless-bg-light text-center my-1">
			<div class="col-md-8 offset-md-2 my-5">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<img class="border-endless noticias-img" src="{{asset('upload/thumbnail/'.$noticia->imagen)}}">
					</div>
					<div class="col-md-10 offset-md-1 pt-4">
						<h1 class="noticia-url text-uppercase"><a href="{{ url('noticias/'.$noticia->slug) }}">{{ $noticia->titulo }}</a></h1>
					</div>
					<div class="col-md-12 pt-3 text-secondary text-small">
						{{ $noticia->autor }} | {{ \Carbon\Carbon::parse($noticia->created_at)->format('d/m/Y')}}
					</div>
					<div class="col-md-10 offset-md-1">
						<div class="col-md-12 text-left pt-3">
							<p>
								@php
									$textoContenido = explode('<p id="leer-mas"></p>', $noticia->contenido);
								@endphp
								
								{!! $textoContenido[0] !!}

								@if(count($textoContenido) > 1)
									<p class="noticia-url mt-4"><a href="{{ url('noticias/'.$noticia->slug) }}">Seguir leyendo..</a></p>
								@endif
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	    @endforeach

	    @if($noticias->count() >= $noticias->perPage())
	    <div class="row endless-bg-light text-center my-1">
			<div class="col-md-8 offset-md-2">
			    <ul class="pagination justify-content-end" role="navigation">
			    	@if(!$noticias->onFirstPage())
				    	<li class="page-item noticia-url">
							<a class="page-link" href="{{ $noticias->previousPageUrl() }}" rel="antiguas">« Recientes</a>
						</li>
			    	@else
				    	<li class="page-item disabled" aria-disabled="true">
				    		<span class="page-link">« Recientes</span>
				    	</li>
			    	@endif

			    	@if($noticias->hasMorePages())
				    	<li class="page-item">
							<a class="page-link noticia-url" href="{{ $noticias->nextPageUrl() }}" rel="antiguas">Antiguas »</a>
						</li>
			    	@else
				    	<li class="page-item disabled" aria-disabled="true">
				    		<span class="page-link">Antiguas »</span>
				    	</li>
			    	@endif
			    </ul>
			</div>
		</div>
		@endif
</div>

@include('layout.footer')

@endsection

