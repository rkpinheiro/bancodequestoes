<div class="modal fade" id="showQuestion" aria-labelledby="showQuestionLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="showQuestionLabel">Questão {[{ question.id }]}</h4>
      </div>
      <div class="modal-body">
        <p> <span>Titulo: </span> {[{ question.title }]}</p>
        <p> <span>Descrição: </span> {[{ question.content }]}</p>
        <p>
          <span>Categorias: </span>
          <span ng-repeat="tag in question.tags" class="tag tag-default" style="margin-right:3px"> {[{ tag.text }]} </span>
        </p>
        <p>
            Dificuldade: 
            <span ng-repeat="n in [1,2,3,4,5]">
              <i class="fa fa-star" ng-if="question.difficulty >= n" aria-hidden="true"></i>
              <i class="fa fa-star-o" ng-if="question.difficulty < n" aria-hidden="true"></i>
            </span>
        </p>
        <p>
          <span>Respostas:</span>
          <ol>
            <li ng-repeat="answer in question.answers">
              <strong ng-if="question.correct_id == answer.id">{[{ answer.text }]}</strong> 
              <span ng-if="question.correct_id != answer.id">{[{ answer.text }]}</span>
            </li>
          </ol>
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger " ng-click="delete(question.id)" >Deletar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>