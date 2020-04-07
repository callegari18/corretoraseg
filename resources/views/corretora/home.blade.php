@extends('corretora.template')

@section('nome_pag')
@include('carousel')
@endsection


@section('principal')

<section id="servico" class="container mt-5">
<div class="row" align="center">

<div class="col-4">    
    <div class="card" style="width: 18rem;">
    <img src="img/prod/first.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Saiba mais...</a>
    </div>
    </div>
</div>

<div class="col-4">    
    <div class="card" style="width: 18rem;">
    <img src="img/prod/second.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Saiba mais...</a>
    </div>
    </div>
</div>

<div class="col-4">    
    <div class="card" style="width: 18rem;">
    <img src="img/prod/third.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Saiba mais...</a>
    </div>
    </div>
</div>

</div>
</section>



@endsection
