<form>
    <div class="form-group">
      <label for="title">Pergunta</label>
      <input type="text" class="form-control" id="title" placeholder="Ex: Qual o estado brasileiro que nunca virou do avesso?" ng-model="question.title">
    </div>
    <div class="form-group">
      <label for="title">Descrição (opcional)</label>
      <textarea name="content" class="form-control" ng-model='question.content'></textarea>
    </div>
    <div class="form-group">
      <label for="difficulty">Dificuldade</label>
      <label class="form-check-inline">
        <input class="form-check-input" type="radio" name="difficulty" id="difficulty1" value="1" ng-model="question.difficulty"> 1
      </label>
      <label class="form-check-inline">
        <input class="form-check-input" type="radio" name="difficulty" id="difficulty2" value="2" ng-model="question.difficulty"> 2
      </label>
      <label class="form-check-inline">
        <input class="form-check-input" type="radio" name="difficulty" id="difficulty3" value="3" ng-model="question.difficulty"> 3
      </label>
      <label class="form-check-inline">
        <input class="form-check-input" type="radio" name="difficulty" id="difficulty4" value="4" ng-model="question.difficulty"> 4
      </label>
      <label class="form-check-inline">
        <input class="form-check-input" type="radio" name="difficulty" id="difficulty5" value="5" ng-model="question.difficulty"> 5
      </label>
    </div>
    <div class="form-group answers">
      <label for="title">Respostas</label>
      <div>
        <div class="checkbox">
          <label>
            <input type="checkbox" ng-model="question.answers[0].correct" ng-true-value="1" ng-false-value="0">
            <input type="text" class="form-control" id="title" placeholder="Opção 1" ng-model="question.answers[0].text" >
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" ng-model="question.answers[1].correct" ng-true-value="1" ng-false-value="0" >
            <input type="text" class="form-control" id="title" placeholder="Opção 2" ng-model="question.answers[1].text">
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" ng-model="question.answers[2].correct" ng-true-value="1" ng-false-value="0" >
            <input type="text" class="form-control" id="title" placeholder="Opção 3" ng-model="question.answers[2].text">
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" ng-model="question.answers[3].correct" ng-true-value="1" ng-false-value="0" >
            <input type="text" class="form-control" id="title" placeholder="Opção 4" ng-model="question.answers[3].text">
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" ng-model="question.answers[4].correct" ng-true-value="1" ng-false-value="0" >
            <input type="text" class="form-control" id="title" placeholder="Opção 5" ng-model="question.answers[4].text">
          </label>
        </div>
      </div>
    </div>
    {[{question}]}
</form>