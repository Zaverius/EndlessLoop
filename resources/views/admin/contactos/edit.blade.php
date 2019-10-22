@extends('layout.admin')

@section('title', 'EndlessLoop – Editar contacto')

@section('extra-styles')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item"> <a href="{{ url('admin/contactos/' )}}">Contactos</a></li>
      <li class="breadcrumb-item active">Editar Contacto</li>
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
          <h1>Editando Contacto</h1>
          <hr>
          <form method="post" class="form" enctype="multipart/form-data">
            	@csrf
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <p>Nombre y Apellidos:</p>
                  <input class="form-control my-2" type="text" name="persona" value="@if(old('persona') != null){{old('persona')}}@else{{ $contacto->persona }}@endif" placeholder="Nombre y Apellidos">
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Correo electrónico:</p>
                  <input class="form-control my-2 w-100" type="email" name="mail" value="@if(old('mail') != null){{old('mail')}}@else{{ $contacto->email }}@endif"  placeholder="Correo electrónico">
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Empresa:</p>
                  <input class="form-control my-2 w-100" type="text" name="empresa" value="@if(old('empresa') != null){{old('empresa')}}@else{{ $contacto->empresa }}@endif"  placeholder="Empresa">
                </div>
                <div class="col-md-6 col-lg-2">
                  <p>Estado contacto:</p>
                  <select class="form-control my-2 w-100" name="estado" required>
                    <option slected="selected">-- Selecciona un estado --</option>
                    @foreach($estados as $estado)
                      <option value="{{$estado->id}}" @if($contacto->estadoContacto->id == $estado->id) selected @endif>{{ $estado->estado }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>País:</p>
                  <input class="form-control my-2 w-100" type="text" name="pais" value="@if(old('pais') != null){{old('pais')}}@else{{ $contacto->pais }}@endif"  placeholder="País">
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Teléfono:</p>
                  <input class="form-control my-2 w-100" type="text" name="telefono" value="@if(old('telefono') != null){{old('telefono')}}@else{{ $contacto->telefono }}@endif"  placeholder="Teléfono">
                </div>
                <div class="col-md-6 col-lg-4">
                  <p>Página web:</p>
                  <input class="form-control my-2 w-100" type="text" name="web" value="@if(old('web') != null){{old('web')}}@else{{ $contacto->web }}@endif"  placeholder="Página web">
                </div>
                <div class="col-md-6 col-lg-6">
                  <p>Tags:</p>
                  <input class="form-control my-2 w-100" type="text" name="ramas" 
                  @if(old('ramas') != null) value="{{ old('ramas') }}"
                  @else
                    value="@foreach($contacto->tags as $tag){{$tag->nombre_tag}}@if(!$loop->last),@endif @endforeach"
                  @endif
                  placeholder="Ramas contacto (Arte, Sonido, etc.)">
                </div>
                <div class="col-md-6 col-lg-6">
                  <p>Otro medio de contacto:</p>
                  <input class="form-control my-2 w-100" type="text" name="otro_medio" value="@if(old('otro_medio') != null) {{old('otro_medio')}} @else{{ $contacto->otros_medios }}@endif"  placeholder="Otro medio de contacto">
                </div>
                <div class="col-md-6 col-lg-6">
                  <p>Historico:</p>
                  <TEXTAREA class="form-control my-2 w-100" name="historico" placeholder="Historico">@if(old('historico') != null) {{old('historico')}} @else{{ $contacto->historico }}@endif</TEXTAREA>
                </div>

                <div class="col-md-12">
                  <input class="btn my-2" type="submit" name="" value="Guardar">         
                </div>
              </div>
          </form>
@endsection