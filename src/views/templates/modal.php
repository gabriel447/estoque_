<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<!-- Bootstrap JS e dependências do Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<div class="d-flex justify-content-center my-3 py-3">
  <!-- Botão que aciona o modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Abrir Modal
  </button>
</div>

<!-- O Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Cabeçalho do Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Título do Modal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Conteúdo do Modal -->
      <div class="modal-body">
        <p>Este é um exemplo de modal com Bootstrap e jQuery.</p>
      </div>
      
      <!-- Rodapé do Modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $("#myModal").modal('show'); // Mostra o modal ao carregar a página
});
</script>