
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel</title>

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
  </head>
  <body>
    
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Laravel - CRUD</span>
      </div>
    </nav>

    <div class="container">
      <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
          <form class="d-flex" action="{{route('usuarios.search')}}" method="post">
            @csrf
            <input class="form-control me-2" type="text" name="search" placeholder="Procurar" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Procurar</button>
          </form>
        </div>
        <div class="p-2 bd-highlight">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CriarNovo">
            Novo +
          </button>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Foto</th>
              <th scope="col">Nome Completo</th>
              <th scope="col">CPF</th>
              <th scope="col">Idade</th>
              <th scope="col">Whatsapp</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="mytable">
            @foreach($usuarios as $usuario)
            <tr>
              <td>{{$usuario->id}}</td>
              <td>Foto</td>
              <td>{{ $usuario->nomec}}</td>
              <td>{{$usuario->cpf}}</td>
              <td>{{ $usuario->idade}}</td>
              <td>{{ $usuario->whats}}</td>
              <td>  
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeletarUser">Excluir</button>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditarUser" >Editar</button>
                <button type="button" class="btn btn-success">Criar Ficha</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @if(session('message'))
          <div class="alert alert-success" role="alert">
            {{ session('message')}}
          </div>
      @endif

      {{$usuarios->links()}}
      
    </div>
    <footer>
      <p>Laravel &copy 2022 </p>
    </footer>
    @include('modal.create')
    @include('modal.edit')
    @include('modal.destroy')
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
