@extends('layout.admin')

@section('title', 'EndlessLoop – Crear contacto')

@section('extra-styles')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item"> <a href="{{ url('admin/contactos/' )}}">Contactos</a></li>
      <li class="breadcrumb-item active">Crear nuevo Contacto</li>
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
          <h1>Crear nuevo Contacto</h1>
          <hr>
          <form method="post" class="form" enctype="multipart/form-data">
            	@csrf
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <p>Nombre y Apellidos:</p>
                  <input class="form-control my-2" type="text" name="persona" value="{{ old('persona') }}" placeholder="Nombre y Apellidos" required>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Correo electrónico:</p>
                  <input class="form-control my-2 w-100" type="email" name="mail" value="{{ old('mail') }}"  placeholder="Correo electrónico" required>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Empresa:</p>
                  <input class="form-control my-2 w-100" type="text" name="empresa" value="{{ old('empresa') }}"  placeholder="Empresa" required>
                </div>
                <div class="col-md-6 col-lg-2">
                  <p>Estado:</p>
                  <select class="form-control my-2 w-100" name="estado" required>
                    @foreach($estados as $estado)
                      <option value="{{$estado->id}}">{{ $estado->estado }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 col-lg-2">
                  <p>País:</p>
                  <input class="form-control my-2 w-100" type="text" name="pais" value="{{ old('pais') }}"  placeholder="País" required>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Teléfono:</p>
                  <input class="form-control my-2 w-100" type="text" name="telefono" value="{{ old('telefono') }}"  placeholder="Teléfono">
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Página web:</p>
                  <input class="form-control my-2 w-100" type="text" name="web" value="{{ old('web') }}"  placeholder="Página web">
                </div>
                <div class="col-md-6 col-lg-6">
                  <p>Tags:</p>
                  <input class="form-control my-2 w-100" type="text" name="ramas" value="{{ old('ramas') }}"  placeholder="Tags contacto (Arte, Sonido, etc.)">
                </div>
                <div class="col-md-6 col-lg-6">
                  <p>Otros medios de contacto:</p>
                  <input class="form-control my-2 w-100" type="text" name="otro_medio" value="{{ old('otro_medio') }}"  placeholder="Otro medio de contacto">
                </div>
                <div class="col-md-6 col-lg-6">
                  <p>Histórico:</p>
                  <TEXTAREA class="form-control my-2 w-100" name="historico" value="{{old('historico')}}"  placeholder="Historico"></TEXTAREA>
                </div>
                <div class="col-md-12">
                  <input class="btn my-2" type="submit" name="" value="Guardar">         
                </div>
              </div>
          </form>
@endsection