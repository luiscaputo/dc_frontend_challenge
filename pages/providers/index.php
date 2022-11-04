<?php require_once('../includes/header.php') ?>

<div class="container t-2">
  <div class="row mb-2">
    <table class="table t-2" style="margin-top: 15%">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Designação</th>
          <th scope="col">Descrição</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Quantidade Disponivel</th>
          <th scope="col">Preço</th>
          <th scope="col">Criado em</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Mark</td>
          <td>@mdo</td>
          <td>Otto</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        Novo Fornecedor
      </button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Novo Fornecedor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <label>
                Designação
              </label>
              <input type="text" class="form-control" placeholder="Designação">
              <label>
                Descrição
              </label>
              <textarea type="text" class="form-control" placeholder="Descrição"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Salvar Categoria</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('../includes/footer.php') ?>