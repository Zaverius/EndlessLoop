@extends('layout.vista')
@section('title','Noticias')

@section('carousel')

@endsection

@section('content')

<div class="container-fluid main-content initial-padding">
	
		<div class="row endless-bg-light text-center my-1">
			<div class="col-md-8 offset-md-2 my-5">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<img class="border-endless" src="{{asset('upload/thumbnail/'.$noticia->imagen)}}" style="height: auto; width: 100%;">
					</div>
					<div class="col-md-10 offset-md-1 pt-4">
						<h1 class="noticia-url text-current text-uppercase">{{ $noticia->titulo }}</h1>
					</div>
					<div class="col-md-12 pt-3 text-secondary text-small">
						{{ $noticia->autor }} | {{ \Carbon\Carbon::parse($noticia->created_at)->format('d/m/Y')}}
					</div>
					<div class="col-md-10 offset-md-1">
						<div class="col-md-12 text-left pt-3">{!! $noticia->contenido !!}</div>
					</div>
				</div>
			</div>
		</div>
</div>

@include('layout.footer')

@endsection

