@extends('corretora.template')

@section('nome_pag')
@include('carousel')
@endsection


@section('principal')

<section id="servico" class="container mt-3">

<div class="row" align="center">
  @foreach ($cartoes as $card)
  
  <div class="col-4">    
    <div class="card" style="width: 18rem;">
      <img src="{{$card->imgCard}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$card->titulo}}</h5>
        <p class="card-text">{{$card->resumo}}</p>
        <a href="#" class="btn btn-primary">Saiba mais...</a>
      </div>
    </div>
  </div>          
 
  @endforeach
</div>

</section>


@endsection
