@extends('corretora.template')

@section('nome_pag')
    Selecione uma Categoria!
@endsection

@section('principal')
<div class="row" align="center">

<div class="col-4"> 
    <div class="card" style="width: 15rem;">
        <img src="img/prod/auto.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Seguro Auto</h5>
        </div>
    </div>
</div>
<div class="col-4">    
    <div class="card" style="width: 15rem;">
        <img src="img/prod/residencia.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Seguro Residencial</h5>
        </div>
    </div>
</div>
<div class="col-4"> 
    <div class="card" style="width: 15rem;">
        <img src="img/prod/vida.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Seguro de Vida</h5>
        </div>
    </div>
</div>

</div>

@endsection