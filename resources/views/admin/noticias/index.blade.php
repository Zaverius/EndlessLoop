@extends('layout.admin')

@section('title', 'EndlessLoop – Noticias')

@section('breadcrumb')
  <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active"> Noticias</li>
    </ol>
@endsection

@section('content')

<hr>
          @if(session('success'))
              <div class="col-md-5 alert alert-success">
                  {{ session('success') }}
              </div>
          @endif


<a href="{{url('admin/noticias/crear')}}"><input type="button" class="btn btn-primary my-3" value="Crear Noticia" name=""></a>

  <div class="card mb-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titulo</th>
              <th>Contenido</th>
              <th>Imagen</th>
              <th>Autor</th>
              <th>Creado</th>
              <th>Modificado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Titulo</th>
              <th>Contenido</th>
              <th>Imagen</th>
              <th>Autor</th>
              <th>Creado</th>
              <th>Modificado</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($noticias as $noticia)
              <tr>
                <td class="align-middle">{{ $noticia->id }}</td>
                <td class="align-middle">{{ $noticia->titulo }}</td>
                <td class="align-middle">{{ str_limit(strip_tags(html_entity_decode($noticia->contenido,0,'UTF-8')), 45) }}</td>
                <td class="align-middle">{{ $noticia->imagen }}</td>
                <td class="align-middle">{{ $noticia->autor }}</td>
                <td class="align-middle">{{ \Carbon\Carbon::parse($noticia->created_at)->format('d/m/Y')}}</td>
                <td class="align-middle">{{ \Carbon\Carbon::parse($noticia->updated_at)->format('d/m/Y')}}</td>
                <td class="align-middle">
                  
                    <!--<a class="editar-noticia" href="#"><img src="{{asset('img/Icons/editIcon.png')}}" width="25px" height="25px"></a>-->

                    <a href="{{ url('/admin/noticias/edit/') }}/{{ $noticia->id }}"><button class="d-inline-block btn btn-info"><img src="{{asset('img/Icons/editIcon.png')}}" width="25px" height="25px"></button></a>
                    
                    <form class="d-inline-block" method="POST" action="/admin/noticias/{{ $noticia->id }}" onsubmit="return confirm('Seguro que quieres eliminar la noticia con ID {{ $noticia->id }}?');">

                      {{ method_field('DELETE') }}

                      @csrf
                      <div>
                        <button type="submit" class="btn btn-danger"><img src="{{asset('img/Icons/filled-trash.png')}}" width="25px" height="25px"></button>
                      </div>
                    </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

    <script src="{{ asset('js/demo-charts/datatables-demo.js') }}"></script>

    <!--<script src="{{ asset('js/admin/deleteNotice.js') }}"></script>-->

@endsection