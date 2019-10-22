@extends('layout.admin')

@section('title', 'EndlessLoop – Contactos')

@section('breadcrumb')
  <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active"> Contactos</li>
    </ol>
@endsection

@section('content')

<hr>

@if ($errors->any())
  <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              {{ $error }}<br>
          @endforeach
  </div>
@endif
@if(session('success'))
    <div class="col-md-5 alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(Auth::user()->admin)<a href="{{url('admin/contactos/crear')}}"><input type="button" class="btn btn-primary my-3" value="Crear Contacto" name=""></a>@endif
  <div class="card mb-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              @if(Auth::user()->admin)<th></th>@endif
              <th>Tags</th>
              <th>Nombre y Apellidos</th>
              <th>Estado Contacto</th>
              <th>Correo Electrónico</th>
              <th>Empresa</th>
              <th>País</th>
              <th>Telefono</th>
              <th>Página web</th>
              <th>Otros medios</th>
              <th>Histórico</th>
              @if(Auth::user()->admin)<th>Acciones</th>@endif
            </tr>
          </thead>
          <tfoot>
            <tr>
              @if(Auth::user()->admin)<th></th>@endif
              <th>Tags</th>
              <th>Nombre y Apellidos</th>
              <th>Estado Contacto</th>
              <th>Correo Electrónico</th>
              <th>Empresa</th>
              <th>País</th>
              <th>Telefono</th>
              <th>Página web</th>
              <th>Otros medios</th>
              <th>Histórico</th>
              @if(Auth::user()->admin)<th>Acciones</th>@endif
            </tr>
          </tfoot>
          <tbody>
            @foreach($contactos as $contacto)
            <tr>
              @if(Auth::user()->admin)<td class="align-middle"><input type="checkbox" name="contacto" value="{{ $contacto->id }}"></td>@endif
              <td class="align-middle">@foreach($contacto->tags as $tag){{$tag->nombre_tag}}@if(!$loop->last),@endif @endforeach</td>
              <td class="align-middle">{{ $contacto->persona }}</td>
              <td class="align-middle" style="background-color: {{ $contacto->estadoContacto->color }}">{{ $contacto->estadoContacto->estado }}</td>
              <td class="align-middle"><a href="mailto:{{ $contacto->email }}">{{ $contacto->email }}</a></td>
              <td class="align-middle">{{ $contacto->empresa}}</td>
              <td class="align-middle">{{ $contacto->pais }}</td>
              <td class="align-middle">{{ $contacto->telefono }}</td>
              <td class="align-middle"><a href="{{ $contacto->web }}" target="_blank">{{ $contacto->web }}</a></td>
              <td class="align-middle"><a href="{{ $contacto->urlToOtrosMedios() }}" target="_blank">{{ $contacto->otros_medios }}</td>
              <td class="align-middle"><textarea disabled>{{ $contacto->historico }}</textarea></td>
              @if(Auth::user()->admin)
              <td class="btn-group align-middle">
                <a href="{{ url('/admin/contactos/edit/'.$contacto->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                <form class="d-inline-block" method="POST" action="/admin/contactos/{{ $contacto->id }}" onsubmit="return confirm('¿Seguro que quieres eliminar el contacto de {{ $contacto->persona }}?');">

                      {{ method_field('DELETE') }}

                      @csrf
                      <div>
                        <button type="submit" class="btn btn-danger"><img src="{{asset('img/Icons/filled-trash.png')}}" width="25px" height="25px"></button>
                      </div>
                    </form>
             </td>
             @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @if(Auth::user()->admin)<input type="button" id="eliminarVarios" class="btn btn-danger my-3 float-right" value="Borrar Contactos" name="">@endif
@endsection

@section('scripts')

    <script src="{{ asset('js/demo-charts/datatables-demo.js') }}"></script>

    <!--<script src="{{ asset('js/admin/deleteNotice.js') }}"></script>-->

        <script type="text/javascript">
      $( document ).ready(function() {
          
      });

      jQuery("#eliminarVarios").click(function() {

        var confirmado = confirm('¿Seguro que quieres eliminar los contactos seleccionados?');
        if (confirmado) {
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            }
          });

            var sList = new Array();
            $('input[type=checkbox]').each(function () {
              if (this.checked) {
                sList.push($(this).val());
              }
              //sList += "(" + $(this).val() + "-" + (this.checked ? "checked" : "not checked") + ")";
            });

            //alert(sList);

            sList = JSON.stringify(sList);

            jQuery.ajax({
              url: "{{ url('/admin/contactos/')}}",
              method: 'post',
              data: {
                listaID: sList
              },
              success: function(result) {
                alert(result);
                window.location.href="{{ url('/admin/contactos')}}";
              }
            });

        }

          //alert(sList);
      });      

    </script>

@endsection