<nav class="navbar navbar-expand-lg navbar-dark navbar-fixed bg-dark">
    <a class="navbar-brand" href="{{route('home')}}"> <img src="img/LogoCorretoraBranco.png" class="img-fluid" width="150"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{request()->is('/')?'active':''}}">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{request()->is('sobre')?'active':''}}">
          <a class="nav-link" href="{{route('sobre')}}">Sobre</a>
        </li>
        <li class="nav-item {{request()->is('orcamento')?'active':''}}">
            <a class="nav-link" href="{{route('orcamento')}}">Orçamento</a>
          </li>
          <li class="nav-item {{request()->is('contato')?'active':''}}">
            <a class="nav-link" href="{{route('contato')}}">Contato</a>
          </li>        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>