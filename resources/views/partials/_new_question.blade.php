<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastre uma nova pergunta</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" placeholder="Ex: Qual o estado brasileiro que nunca virou do avesso?">
          </div>
          <div class="form-group answers">
            <label for="title">Resposta</label>
            <div>
              <div class="radio">
                <label>
                  <input type="radio" name="answers" id="mono" value="mono" checked>
                  <input type="text" class="form-control" id="title" placeholder="Opção 1">
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="answers" id="multi" value="multi">
                  <input type="text" class="form-control" id="title" placeholder="Opção 2">
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="answers" id="multi" value="multi">
                  <input type="text" class="form-control" id="title" placeholder="Opção 3">
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="answers" id="multi" value="multi">
                  <input type="text" class="form-control" id="title" placeholder="Opção 4">
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="answers" id="multi" value="multi">
                  <input type="text" class="form-control" id="title" placeholder="Opção 5">
                </label>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>