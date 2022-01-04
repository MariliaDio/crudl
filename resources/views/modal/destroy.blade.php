<div class="modal fade" id="DeletarUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Excluir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Você ter certeza em deletar todos os dados de <Strong>{{$usuario->nomec}}</Strong>??</p>
      </div>
      <div class="modal-footer">
      <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" value="">Confirmar</button>
      </form>
      </div>
    </div>
  </div>
</div>