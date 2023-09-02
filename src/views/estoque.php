
    <?php
        include('loader.php');
        loadTemplateView();
    ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<!-- Bootstrap JS e dependências do Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<main class="content">
    <a class="btn btn-lg btn-primary mb-3"
        href="">Cadastrar Peça</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Fornecedor</th>
            <th>Quantidade</th>
            <th></th>
        </thead>
        <tbody>
                <tr>
                    <td>Platô</td>
                    <td>Empresa 1</td>
                    <td>12</td>
                    <td>

                    <!-- Botão que aciona o modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                        editar
                    </button>

                    </td>
                </tr>
                <tr>
                    <td>Cilindro</td>
                    <td>Empresa 2</td>
                    <td>7</td>
                    <td>

                    <!-- Botão que aciona o modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                        editar
                    </button>

                    </td>
                </tr>
                <tr>
                    <td>Platô</td>
                    <td>Empresa 1</td>
                    <td>12</td>
                    <td>

                    <!-- Botão que aciona o modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                        editar
                    </button>

                    </td>
                </tr>
        </tbody>
    </table>
</main>

<!-- O Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Cabeçalho do Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Editar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Conteúdo do Modal -->
      <div class="modal-body">
        
      </div>
      
      <!-- Rodapé do Modal -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
      
    </div>
  </div>
</div>

