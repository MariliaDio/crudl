<script src="/js/scripts.js">

</script>
<div class="modal fade " id="CriarNovo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Novo Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('usuarios.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-6">
            <label for="foto">Selecionar Foto:</label>
            <input type="file" id="foto" name="foto" class="from-control-file"  >
          </div>
          <div class="mb-6">
            <label for="nomec" class="col-form-label">Nome completo:</label>
            <input type="text" class="form-control" id="nomec" name="nomec" 
            placeholder="Informe o nome completo" autocomplete="off">
          </div>
          <div class="mb-6">
            <label for="cpf" class="col-form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf"  
            placeholder="Informe o CPF" autocomplete="off" maxlength="14" onkeyup="mask_cpf()" >
          </div>
          <div class="mb-6">
            <label for="idade" class="col-form-label">Idade:</label>
            <input type="text" class="form-control" id="idade" name="idade" 
            placeholder="Informe a idade" autocomplete="off">
          </div>
          <div class="mb-6">
            <label for="whats" class="col-form-label">Whatsapp:</label>
            <input type="text" class="form-control" id="whats" name="whats" 
            placeholder="Informe o whatsapp" autocomplete="off" maxlength="11">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success" >Cadastrar</button>
      </form>
      @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif
      </div>
    </div>
  </div>
</div>