@extends('vistas/base/plantilla')
@section('content')
 <h1>{{ $games -> title }}</h1>
 <p>{{ $games -> descrip }}</p>
@endsection