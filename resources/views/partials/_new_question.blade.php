<div class="modal fade" id="newQuestion" tabindex="-1" role="dialog" aria-labelledby="newQuestionLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="newQuestionLabel">Adicionar</h4>
      </div>
      <div class="modal-body">
        @include('partials._form')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger" ng-click="save()" >Salvar</button>
      </div>
    </div>
  </div>
</div>