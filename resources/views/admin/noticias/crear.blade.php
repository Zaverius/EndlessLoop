@extends('layout.admin')

@section('title', 'EndlessLoop – Crear noticia')

@section('extra-styles')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item"> <a href="{{ url('admin/noticias/' )}}">Noticias</a></li>
      <li class="breadcrumb-item active">Crear Noticia</li>
    </ol>

@endsection

@section('content')
      @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
			@endif
          <h1>Crear nueva noticia</h1>
          <hr>
          <form method="post" class="form" enctype="multipart/form-data">
            	@csrf
              <div class="row">
                <div class="col-md-3">
                  <input class="form-control my-2" type="text" name="autor" value="{{ old('autor') }}" placeholder="Autor">
                </div>
                <div class="col-md-5">
                  <input class="form-control my-2 w-100" type="text" name="titulo" value="{{ old('titulo') }}"  placeholder="Titulo">
                </div>
                <div class="col-md-4">
                  <p>Portada: <input class="my-2 w-75" type="file" name="thumbnail" value="{{ old('thumbnail') }}" accept="image/*"></p>
                </div>
                <div class="col-md-12">
                  <div class="w-100">
                    <textarea id="summernote" name="contenido" class="endless-textarea my-2" placeholder="Contenido de la noticia">
                      {{ old('contenido') }}
                    </textarea>
                  </div>  
                </div>
                <div class="col-md-12 text-center">
                  <input class="btn my-2" type="submit" name="" value="Publicar">         
                </div>
              </div>
          </form>

          

@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
          height: 300,
          maxHeight: 450
        });
    });
  </script>
@endsection