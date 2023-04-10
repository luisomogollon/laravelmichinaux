@extends('adminlte::page')

@section('title', 'CRUD Luiso Dev')

@section('content_header')
    <h1>Luisodev</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary">CREAR</a>

<table id="articulos" class="table table-striped table-bordered table-striped mt-4" style="width:100%">
    <thead class=" bg-primary text-white">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Código</th>
          <th scope="col">Descripción</th>
          <th scope="col">Cantidad</th>
          
          <th scope="col">Acciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
           
              <td>
                
             <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
          <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>    
            </td>  
        </tr>
      </tbody>
      @endforeach
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop