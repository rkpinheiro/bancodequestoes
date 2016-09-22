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
    <div class="form-group">
      <label for="tags">Categorias</label>
      <tags-input ng-model="question.tags" display-property="text"  placeholder="Ex: Matemática" replace-spaces-with-dashes="false" template="tag-template">
        <auto-complete source="tagscomplete($query)"
                       min-length="1"
                       load-on-focus="true"
                       load-on-empty="true"
                       max-results-to-show="32"
                       template="autocomplete-template">
        </auto-complete>
      </tags-input>
    </div>
    <div class="form-group">
      <label for="answers">Respostas</label>
      <div ng-repeat="answer in question.answers">
        <div class="form-group row">
          <label class="col-xs-1 col-form-label">
            <input type="radio" ng-model="question.correct_id" name="question.correct_id" ng-value="answer.id">
          </label>
          <div class="col-xs-11">
            <input type="text" class="form-control" id="title" placeholder="Opção {[{ $index+1 }]}" ng-model="answer.text" >
          </div>
        </div>
      </div>
    </div>
</form>

<script type="text/ng-template" id="tag-template">
  <div class="tag-template">
      <span class="tag tag-default" style="margin-right:3px"> 
        <span>{[{ $getDisplayText() }]} </span>
        <button type="button" class="close" aria-label="Close" ng-click="$removeTag()">
          <span aria-hidden="true">&times;</span>
        </button>
      </span>
  </div>
</script>

<script type="text/ng-template" id="autocomplete-template">
  <div class="autocomplete-template">
    <span ng-bind-html="$highlight($getDisplayText())"></span>
  </div>
</script>