@extends('vistas/base/plantilla')
@section('content')
<style>
  /* body{
    background: #000100;
  } */
  .cards-container{
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, 340px);
    gap: 25px;
    margin: 20px;
    place-content: center;
  }
  .cards{
    /* display: flex; */
    width: 240px;
    height: 240px;
    background: beige;
    margin-bottom: 24px;
    border-radius: 10px;
    text-align: center;
  }
  .cards p:nth-child(1){
    top: 20px;
    color: green;
  }
  .cards p:nth-child(2){
    color: black;
  }
  .cards-container a{
    text-decoration: none;
  }
</style>

<div class="cards-container">
 @foreach ($games as $game )
 <a href="{{ route( 'details', $game -> slug) }}">
   <div class="cards">
   <!-- <p>{{ $game['game_id'] }}</p> -->
     <p>{{ $game -> title }}</p>
     <p> {{ $game -> price }}$ </p>
   </div> 
 </a>
 @endforeach
 {{$games->links()}}
</div>

@endsection