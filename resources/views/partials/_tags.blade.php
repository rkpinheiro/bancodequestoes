<div class="modal fade" id="tags" aria-labelledby="tagsLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="tagsLabel">Categorias</h4>
      </div>
      <div class="modal-body">
        <table class="table ">
          <thead>
            <tr>
              {{-- <th>#</th> --}}
            </tr>
          </thead>
          <tbody>
            <tr data-ng-repeat="tag in tags">
              <td>
                {[{ tag.text }]} ({[{ tag.questions.length }]})
                
              </td>
              <td style="text-align:right">
                <a ng-click="deleteTag(tag.id)" class="pull-xs-right" style="color:#d9534f">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>