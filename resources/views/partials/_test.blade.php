<div class="modal fade" id="test" aria-labelledby="testLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="testLabel">Prova</h4>
      </div>
      <div class="modal-body">
		<form>
		  <div class="form-group">
		    <label for="title">Professor</label>
		    <input type="text" class="form-control" id="title" placeholder="Ex: Manoel Ribeiro" ng-model="test.teacher">
		  </div>
		  <div class="form-group">
		    <label for="title">Turma</label>
		    <input type="text" class="form-control" id="title" placeholder="Ex: 3º Ano B " ng-model="test.class">
		  </div>
		  <div class="form-group">
		    <label for="tags">Categorias</label>
		    <tags-input ng-model="test.tags" display-property="text" placeholder="Ex: Matemática" replace-spaces-with-dashes="false" template="tag-template" add-from-autocomplete-only="true" on-tag-added="countQuestions($tag)" on-tag-removed="countQuestions($tag)">
		      <auto-complete source="tagscomplete($query)"
		                       min-length="1"
		                       load-on-focus="true"
		                       load-on-empty="true"
		                       max-results-to-show="32"
		                       template="autocomplete-template"
		                       >
        	  </auto-complete>
		    </tags-input>
		    <small>Foram encontrdas <strong>{[{ test.total_questions }]}</strong> questões</small>
		  </div>
		  <div class="form-group">
		    <label for="title">Quantidade de questões</label>
		    <input type="text" class="form-control" id="title" placeholder="Ex: 10" ng-model="test.quant_questions">
		  </div>		  
		</form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-danger" ng-click="downloadTest(test)">Baixar PDF</button>
      </div>
    </div>
  </div>
</div>